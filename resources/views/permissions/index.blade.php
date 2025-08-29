@extends('layouts.admin_layout')

@section('content')

All Permissions

<a href="{{ route('permissions.create') }}" class="btn btn-sm btn-primary">Create Permission</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th width="200px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Show</a>
                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this role?');">
                            Delete
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
