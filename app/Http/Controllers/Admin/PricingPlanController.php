<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PricingPlanController extends Controller
{
    public function index(): View
    {
        return view('admin.pricing.index', [
            'plans' => PricingPlan::query()->with('service')->orderBy('sort_order')->latest('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.pricing.form', [
            'plan' => new PricingPlan(),
            'mode' => 'create',
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->orderBy('title')->get(),
            'subServicePricingText' => '',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'service_id' => ['nullable', 'integer', 'exists:services,id'],
            'name' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'sub_service_pricing_text' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['sub_service_prices'] = $this->parseSubServicePricing($data['sub_service_pricing_text'] ?? '');
        unset($data['sub_service_pricing_text']);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        PricingPlan::create($data);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan created.');
    }

    public function edit(PricingPlan $pricing): View
    {
        return view('admin.pricing.form', [
            'plan' => $pricing,
            'mode' => 'edit',
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->orderBy('title')->get(),
            'subServicePricingText' => collect($pricing->sub_service_prices ?? [])->map(function ($row) {
                $name = trim((string) ($row['name'] ?? ''));
                $price = trim((string) ($row['price'] ?? ''));
                $description = trim((string) ($row['description'] ?? ''));
                return $name . ' | ' . $price . ($description !== '' ? ' | ' . $description : '');
            })->implode(PHP_EOL),
        ]);
    }

    public function update(Request $request, PricingPlan $pricing): RedirectResponse
    {
        $data = $request->validate([
            'service_id' => ['nullable', 'integer', 'exists:services,id'],
            'name' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'sub_service_pricing_text' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['sub_service_prices'] = $this->parseSubServicePricing($data['sub_service_pricing_text'] ?? '');
        unset($data['sub_service_pricing_text']);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        $pricing->update($data);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan updated.');
    }

    public function destroy(PricingPlan $pricing): RedirectResponse
    {
        $pricing->delete();

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan deleted.');
    }

    private function parseSubServicePricing(string $text): array
    {
        return collect(preg_split('/\r\n|\r|\n/', $text))
            ->map(function ($line) {
                $parts = array_map('trim', explode('|', (string) $line));
                $name = $parts[0] ?? '';
                $price = $parts[1] ?? '';
                $description = $parts[2] ?? '';

                if ($name === '') {
                    return null;
                }

                return [
                    'name' => $name,
                    'price' => is_numeric($price) ? (float) $price : null,
                    'description' => $description !== '' ? $description : null,
                ];
            })
            ->filter()
            ->values()
            ->all();
    }
}
