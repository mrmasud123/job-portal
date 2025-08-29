@extends('layouts.admin_layout')

@section('content')

Create Role

<a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary">View Roles</a>

<form action="{{ route('roles.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="mb-3">
        <label for="role_name" class="form-label">Role Name</label>
        <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter role name" required>
    </div>
    <div class="mt-2">
        <h3>Permissions:</h3>
        @foreach($permissions as $permission)
    <label>
        <input type="checkbox" name="permissions[]" value="{{ $permission->name }}">
        {{ $permission->name }}
    </label><br/>
@endforeach

    </div>
    <button type="submit" class="btn btn-success">Create Role</button>
</form>

@endsection