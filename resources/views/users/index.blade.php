@extends('layouts.admin_layout')

@section('content')

All Users

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Roles</th>
            <th>Permissions</th>
            <th width="200px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                {{-- Roles --}}
                <td>
                    @if($user->roles->isNotEmpty())
                        @foreach ($user->roles as $role)
                            <span class="badge bg-primary">{{ $role->name }}</span>
                        @endforeach
                    @else
                        <span class="text-muted">No roles</span>
                    @endif
                </td>

                {{-- Permissions --}}
                <td>
                    @if($user->permissions->isNotEmpty())
                        @foreach ($user->permissions as $permission)
                            <span class="badge bg-info text-dark">{{ $permission->name }}</span>
                        @endforeach
                    @else
                        <span class="text-muted">No permissions</span>
                    @endif
                </td>

                {{-- Actions --}}
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Show</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this user?');">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
