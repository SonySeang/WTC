@extends('layout.layout')

@section('title', 'Admin Dashboard')
@section('content')
    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is a simple admin dashboard page.</p>
        <div class="row gap-2">
            <div class="col-md-4">
                <h2>Manage Users</h2>
                <p>View and manage users.</p>
                <a href="{{ url('/admin/users') }}" class="btn btn-primary">View Users</a>
            </div>
            <div class="col-md-4">
                <h2>Manage Feature</h2>
                <p>View and manage Feature.</p>
                <a href="{{ url('/admin/feature') }}" class="btn btn-primary">View feature</a>
            </div>
            <div class="col-md-4">
                <h2>Manage Posts</h2>
                <p>View and manage posts.</p>
                <a href="{{ url('/admin/posts') }}" class="btn btn-primary">View Posts</a>
            </div>
            <div class="col-md-4">
                <h2>Settings</h2>
                <p>Update application settings.</p>
                <a href="{{ url('/admin/settings') }}" class="btn btn-primary">Settings</a>
            </div>
    </div>
@endsection