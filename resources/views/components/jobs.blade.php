@extends('layouts.admin_layout')

@section('content')

All Jobs

<a href="{{ route('jobs.create') }}" class="btn btn-sm btn-primary">Create Demo Jobs</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumbnail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->description }}</td>
                <td>{{ $job->thumbnail ?? "Not Found" }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection