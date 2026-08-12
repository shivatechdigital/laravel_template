@extends('admin.layout')

@section('title', 'Admin Team Members')
@section('heading', 'Professional Team')

@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px;">
        <h3 style="margin:0;">All Team Members</h3>
        <a class="btn btn-secondary" href="{{ route('admin.team-members.create') }}">Add Team Member</a>
    </div>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Home Show</th>
                    <th>Home Priority</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->designation ?: '-' }}</td>
                        <td>{{ $member->show_on_home ? 'Yes' : 'No' }}</td>
                        <td>{{ $member->home_priority }}</td>
                        <td>{{ $member->is_active ? 'Active' : 'Hidden' }}</td>
                        <td>{{ $member->sort_order }}</td>
                        <td style="display:flex;gap:8px;">
                            <a class="btn btn-secondary" href="{{ route('admin.team-members.edit', $member) }}">Edit</a>
                            <form method="post" action="{{ route('admin.team-members.destroy', $member) }}" onsubmit="return confirm('Delete this team member?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7">No team members yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
