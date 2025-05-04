@extends('layout.layout')
@section('title', 'Create Feature')
@section('content')
<div class="container py-4">
    <h3>Create New Feature</h3>
    <form action="{{ route('admin.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Feature</button>
    </form>
</div>
@endsection
{{-- Add any additional scripts or styles if needed --}}