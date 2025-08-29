@extends('layouts.admin_layout')

@section('content')

Create Permission

<a href="{{ route('permissions.index') }}" class="btn btn-sm btn-primary">View Permissions</a>

<form action="{{ route('permissions.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="mb-3">
        <label for="permission_name" class="form-label">Permission Name</label>
        <input type="text" class="form-control" id="permission_name" name="permission_name" placeholder="Enter permission name" required>
    </div>
    
    <button type="submit" class="btn btn-success">Create Permission</button>
</form>

@endsection