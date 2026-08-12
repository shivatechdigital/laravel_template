<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialLinkController extends Controller
{
    public function index(): View
    {
        return view('admin.social-links.index', [
            'links' => SocialLink::query()->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.social-links.form', [
            'link' => new SocialLink(),
            'mode' => 'create',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateData($request);
        SocialLink::create($data);

        return redirect()->route('admin.social-links.index')->with('success', 'Social link created.');
    }

    public function edit(SocialLink $socialLink): View
    {
        return view('admin.social-links.form', [
            'link' => $socialLink,
            'mode' => 'edit',
        ]);
    }

    public function update(Request $request, SocialLink $socialLink): RedirectResponse
    {
        $data = $this->validateData($request);
        $socialLink->update($data);

        return redirect()->route('admin.social-links.index')->with('success', 'Social link updated.');
    }

    public function destroy(SocialLink $socialLink): RedirectResponse
    {
        $socialLink->delete();

        return redirect()->route('admin.social-links.index')->with('success', 'Social link deleted.');
    }

    private function validateData(Request $request): array
    {
        $data = $request->validate([
            'platform' => ['required', 'string', 'max:50'],
            'label' => ['required', 'string', 'max:80'],
            'url' => ['required', 'url', 'max:500'],
            'icon_class' => ['required', 'string', 'max:100'],
            'css_class' => ['nullable', 'string', 'max:50'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'open_new_tab' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['platform'] = strtolower(trim($data['platform']));
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['open_new_tab'] = $request->boolean('open_new_tab');
        $data['is_active'] = $request->boolean('is_active');

        return $data;
    }
}
