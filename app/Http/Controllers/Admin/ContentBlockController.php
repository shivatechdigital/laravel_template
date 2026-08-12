<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContentBlockController extends Controller
{
    public function index(): View
    {
        return view('admin.content-blocks.index', [
            'blocks' => ContentBlock::query()->orderBy('key')->get(),
        ]);
    }

    public function edit(ContentBlock $contentBlock): View
    {
        $contactData = $contentBlock->key === 'contact_info'
            ? [
                'address' => $contentBlock->data['address'] ?? '',
                'phone' => $contentBlock->data['phone'] ?? '',
                'email' => $contentBlock->data['email'] ?? '',
                'map_embed' => $contentBlock->data['map_embed'] ?? '',
            ]
            : null;

        return view('admin.content-blocks.form', [
            'block' => $contentBlock,
            'dataJson' => $contentBlock->data ? json_encode($contentBlock->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) : '',
            'contactData' => $contactData,
        ]);
    }

    public function update(Request $request, ContentBlock $contentBlock): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['nullable', 'string', 'max:180'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'data_json' => ['nullable', 'string'],
            'contact_address' => ['nullable', 'string', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:80'],
            'contact_email' => ['nullable', 'email', 'max:180'],
            'contact_map_embed' => ['nullable', 'string'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $parsed = null;

        if ($contentBlock->key === 'contact_info') {
            $parsed = [
                'address' => trim((string) ($data['contact_address'] ?? '')),
                'phone' => trim((string) ($data['contact_phone'] ?? '')),
                'email' => trim((string) ($data['contact_email'] ?? '')),
                'map_embed' => trim((string) ($data['contact_map_embed'] ?? '')),
            ];
        } else {
            $jsonRaw = trim((string) ($data['data_json'] ?? ''));

            if ($jsonRaw !== '') {
                $parsed = json_decode($jsonRaw, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    return back()->withErrors(['data_json' => 'Invalid JSON format in Data JSON field.'])->withInput();
                }
            }
        }

        $contentBlock->update([
            'title' => $data['title'] ?? null,
            'subtitle' => $data['subtitle'] ?? null,
            'content' => $data['content'] ?? null,
            'data' => $parsed,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.content-blocks.index')->with('success', 'Content block updated.');
    }
}
