<?php

namespace App\Http\Controllers;

use App\Models\ContentBlock;
use App\Models\GalleryItem;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function home(): View
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        $plans = PricingPlan::query()
            ->with('service')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        $galleryItems = GalleryItem::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->take(8)
            ->get();

        $homeTeamMembers = TeamMember::query()
            ->where('is_active', true)
            ->where('show_on_home', true)
            ->orderByDesc('home_priority')
            ->orderBy('sort_order')
            ->latest('id')
            ->take(4)
            ->get();

        $blocks = $this->activeBlocks([
            'home_why_choose',
            'home_team',
        ]);

        return view('beauty_salon.index', [
            'services' => $services,
            'plans' => $plans,
            'galleryItems' => $galleryItems,
            'homeWhyChoose' => $blocks['home_why_choose'] ?? null,
            'homeTeam' => $blocks['home_team'] ?? null,
            'homeTeamMembers' => $homeTeamMembers,
        ]);
    }

    public function team(): View
    {
        $teamMembers = TeamMember::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        return view('beauty_salon.team', [
            'teamMembers' => $teamMembers,
        ]);
    }

    public function about(): View
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        $blocks = $this->activeBlocks([
            'about_intro',
            'about_mission_cards',
        ]);

        return view('beauty_salon.about-us', [
            'services' => $services,
            'aboutIntro' => $blocks['about_intro'] ?? null,
            'aboutMissionCards' => $blocks['about_mission_cards'] ?? null,
        ]);
    }

    public function services(): View
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        $plans = PricingPlan::query()
            ->with('service')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        return view('beauty_salon.service', [
            'services' => $services,
            'plans' => $plans,
        ]);
    }

    public function pricing(): View
    {
        $plans = PricingPlan::query()
            ->with('service')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        return view('beauty_salon.pricing', [
            'plans' => $plans,
        ]);
    }

    public function gallery(): View
    {
        $galleryItems = GalleryItem::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        return view('beauty_salon.portfolio-grid-2', [
            'galleryItems' => $galleryItems,
        ]);
    }

    public function contact(): View
    {
        $block = ContentBlock::query()->where('key', 'contact_info')->first();
        $data = $block?->data ?? [];

        $defaultMap = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219';

        $contactInfo = [
            'title' => $block?->title ?: 'Quick Contact',
            'subtitle' => $block?->subtitle ?: 'If you have any questions simply use the following contact details.',
            'address' => $data['address'] ?? '97 C Block Panki Kanpur',
            'email' => $data['email'] ?? 'info@example.com',
            'phone' => $data['phone'] ?? '+91 7007294764',
            'map_embed' => $this->normalizeMapEmbed($data['map_embed'] ?? '', $defaultMap),
        ];

        return view('beauty_salon.contact', [
            'contactInfo' => $contactInfo,
        ]);
    }

    private function activeBlocks(array $keys): array
    {
        return ContentBlock::query()
            ->whereIn('key', $keys)
            ->where('is_active', true)
            ->get()
            ->keyBy('key')
            ->all();
    }

    private function normalizeMapEmbed(string $value, string $fallback): string
    {
        $raw = trim($value);

        if ($raw === '') {
            return $fallback;
        }

        if (preg_match('/src=["\']([^"\']+)["\']/i', $raw, $matches) === 1) {
            return $matches[1];
        }

        if (str_starts_with($raw, 'https://') || str_starts_with($raw, 'http://')) {
            return $raw;
        }

        if (str_starts_with($raw, 'www.google.com/maps/embed')) {
            return 'https://' . $raw;
        }

        if (str_starts_with($raw, 'maps/embed')) {
            return 'https://www.google.com/' . ltrim($raw, '/');
        }

        if (str_starts_with($raw, '?pb=') || str_starts_with($raw, 'pb=')) {
            return 'https://www.google.com/maps/embed' . (str_starts_with($raw, '?') ? '' : '?') . ltrim($raw, '?');
        }

        return $fallback;
    }
}
