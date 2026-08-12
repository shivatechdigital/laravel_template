<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TeamMemberController extends Controller
{
    public function index(): View
    {
        return view('admin.team-members.index', [
            'members' => TeamMember::query()
                ->orderByDesc('home_priority')
                ->orderBy('sort_order')
                ->latest('id')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.team-members.form', [
            'member' => new TeamMember(),
            'mode' => 'create',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateData($request);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('cms/team', 'public');
        }

        TeamMember::create($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member created.');
    }

    public function edit(TeamMember $teamMember): View
    {
        return view('admin.team-members.form', [
            'member' => $teamMember,
            'mode' => 'edit',
        ]);
    }

    public function update(Request $request, TeamMember $teamMember): RedirectResponse
    {
        $data = $this->validateData($request);

        if ($request->hasFile('image')) {
            if ($teamMember->image_path) {
                Storage::disk('public')->delete($teamMember->image_path);
            }
            $data['image_path'] = $request->file('image')->store('cms/team', 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated.');
    }

    public function destroy(TeamMember $teamMember): RedirectResponse
    {
        if ($teamMember->image_path) {
            Storage::disk('public')->delete($teamMember->image_path);
        }

        $teamMember->delete();

        return redirect()->route('admin.team-members.index')->with('success', 'Team member deleted.');
    }

    private function validateData(Request $request): array
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'designation' => ['nullable', 'string', 'max:120'],
            'bio' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'home_priority' => ['nullable', 'integer', 'min:0'],
            'show_on_home' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'max:4096'],
        ]);

        $data['show_on_home'] = $request->boolean('show_on_home');
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['home_priority'] = (int) ($data['home_priority'] ?? 0);

        return $data;
    }
}
