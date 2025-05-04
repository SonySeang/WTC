{{-- filepath: resources/views/admin/service.blade.php --}}
@extends('layout.layout')
@section('title', 'Manage Service')
@section('content')
<div class="container py-4">
    <h3>Service List</h3>
    {{-- Uncomment the following line if you have a route for creating services --}}
    <a href="{{ route('admin.create') }}" class="btn btn-success mb-3">Add Service</a>
    <table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($feature as $features)
        <tr>
            <th scope="row">{{ $features->id }}</th>
            <td>{{ $features->icon }}</td>
            <td>{{ $features->title }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Actions">
                    <a  href="{{ route('admin.edit' , $features->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.destroy' , $features->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection