@extends('layouts.admin_layout')

@section('content')

Edit Permission

<a href="{{ route('permissions.index') }}" class="btn btn-sm btn-primary">View Permissions</a>

<form action="{{ route('permissions.update', $permission->id) }}" method="POST" class="mt-4">
    @csrf
    @method("put")
    <div class="mb-3">
        <label for="permission_name" class="form-label">Edit Permission</label>
        <input type="text" value="{{ $permission->name }}" class="form-control" id="permission_name" name="permission_name" placeholder="Enter permission name" required>
    </div>
    
    <button type="submit" class="btn btn-success">Update permission</button>
</form>

@endsection