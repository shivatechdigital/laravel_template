<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class TemplateEditorController extends Controller
{
    public function index(): View
    {
        $path = resource_path('views/beauty_salon');

        $files = collect(File::files($path))
            ->map(fn ($file) => $file->getFilename())
            ->filter(fn ($name) => str_ends_with($name, '.blade.php'))
            ->sort()
            ->values();

        return view('admin.pages.index', [
            'files' => $files,
        ]);
    }

    public function edit(string $file): View
    {
        $filename = $this->sanitizeFilename($file);
        $absolutePath = resource_path('views/beauty_salon/' . $filename);

        abort_unless(File::exists($absolutePath), 404);

        return view('admin.pages.edit', [
            'file' => $filename,
            'content' => File::get($absolutePath),
        ]);
    }

    public function update(Request $request, string $file): RedirectResponse
    {
        $filename = $this->sanitizeFilename($file);
        $absolutePath = resource_path('views/beauty_salon/' . $filename);

        abort_unless(File::exists($absolutePath), 404);

        $validated = $request->validate([
            'content' => ['required', 'string'],
        ]);

        File::put($absolutePath, $validated['content']);

        return back()->with('success', 'Page template updated successfully.');
    }

    private function sanitizeFilename(string $file): string
    {
        abort_unless((bool) preg_match('/^[a-zA-Z0-9._-]+$/', $file), 404);

        return basename($file);
    }
}
