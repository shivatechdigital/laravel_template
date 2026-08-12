<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GalleryItemController extends Controller
{
    public function index(): View
    {
        return view('admin.gallery.index', [
            'items' => GalleryItem::query()->orderBy('sort_order')->latest('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.gallery.form', [
            'item' => new GalleryItem(),
            'mode' => 'create',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'type' => ['required', 'in:image,video'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'max:5120'],
            'thumbnail' => ['nullable', 'image', 'max:5120'],
            'video_url' => ['nullable', 'url'],
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        if ($request->hasFile('image')) {
            $data['media_path'] = $request->file('image')->store('cms/gallery', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail_path'] = $request->file('thumbnail')->store('cms/gallery/thumbs', 'public');
        }

        if ($data['type'] === 'image') {
            $data['video_url'] = null;
        } else {
            $data['media_path'] = null;
        }

        GalleryItem::create($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item created.');
    }

    public function edit(GalleryItem $gallery): View
    {
        return view('admin.gallery.form', [
            'item' => $gallery,
            'mode' => 'edit',
        ]);
    }

    public function update(Request $request, GalleryItem $gallery): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'type' => ['required', 'in:image,video'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'max:5120'],
            'thumbnail' => ['nullable', 'image', 'max:5120'],
            'video_url' => ['nullable', 'url'],
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        if ($request->hasFile('image')) {
            if ($gallery->media_path) {
                Storage::disk('public')->delete($gallery->media_path);
            }
            $data['media_path'] = $request->file('image')->store('cms/gallery', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            if ($gallery->thumbnail_path) {
                Storage::disk('public')->delete($gallery->thumbnail_path);
            }
            $data['thumbnail_path'] = $request->file('thumbnail')->store('cms/gallery/thumbs', 'public');
        }

        if ($data['type'] === 'image') {
            $data['video_url'] = null;
        } else {
            $data['media_path'] = null;
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item updated.');
    }

    public function destroy(GalleryItem $gallery): RedirectResponse
    {
        if ($gallery->media_path) {
            Storage::disk('public')->delete($gallery->media_path);
        }

        if ($gallery->thumbnail_path) {
            Storage::disk('public')->delete($gallery->thumbnail_path);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item deleted.');
    }
}
