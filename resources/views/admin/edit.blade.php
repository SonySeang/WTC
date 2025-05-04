{{-- filepath: resources/views/admin/edit.blade.php --}}
@extends('layout.layout')
@section('title', 'Edit Feature')
@section('content')
<div class="container py-4">
    <h3>Edit Feature</h3>
    <form action="{{ route('admin.update', $feature->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ $feature->icon }}" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $feature->title }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Feature</button>
    </form>
</div>
@endsection