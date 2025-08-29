@extends('layouts.admin_layout')

@section('content')

<h2>Edit User</h2>

<a href="{{ route('users.index') }}" class="btn btn-sm btn-primary">Back</a>

<form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-4">
    @csrf
    @method("PUT")

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{ $user->name }}" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{ $user->email }}" class="form-control" id="email" name="email" required>
    </div>

    <div class="mt-2">
        <h3>Assign Roles</h3>
        @foreach($roles as $role)
            <label>
                <input type="checkbox" name="roles[]" value="{{ $role->name }}" 
                    {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                {{ $role->name }}
            </label><br/>
        @endforeach
    </div>

    <button type="submit" class="btn btn-success mt-3">Update User</button>
</form>

@endsection
