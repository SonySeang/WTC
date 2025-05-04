{{-- filepath: resources/views/admin/show.blade.php --}}
@extends('layout.layout')
@section('title', 'Show Feature')
@section('content')
<div class="container py-4">
    <h3>Feature Details</h3>
    <div class="mb-3">
        <label for="icon" class="form-label">Icon</label>
        <input type="text" class="form-control" id="icon" name="icon" value="{{ $feature->icon }}" readonly>
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $feature->title }}" readonly>
    </div>
    <a href="{{ route('admin.feature') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection