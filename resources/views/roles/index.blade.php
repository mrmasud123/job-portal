@extends('layouts.admin_layout')

@section('content')

All Roles

<a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">Create Roles</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Permissions</th>
            <th width="200px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    @if($role->permissions->isNotEmpty())
                        @foreach ($role->permissions as $permission)
                            <span class="badge bg-info text-dark">{{ $permission->name }}</span>
                        @endforeach
                    @else
                        <span class="text-muted">No permissions</span>
                    @endif
                </td>
                <td>
                    @if(Auth::user()->hasRole('Admin'))
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this role?');">
                                Delete
                            </button>
                        </form>
                    @else
                        <span class="badge bg-danger">Not Allowed</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
