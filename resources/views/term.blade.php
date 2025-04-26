@extends('layout.layout')
@section('title', 'Terms')
@section('content')
<div class="container py-4">
    <div class="row">
      <!-- Left Sidebar -->
      <div class="col-3">
        <div class="card overflow-hidden">
          <div class="card-body pt-3">
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                           <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ url ('/') }}">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url ('/explore') }}">
                                    <span>Explore</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url ('/feed') }}">
                                    <span>Feed</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url ('/term') }}">
                                    <span>Terms</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url ('/support') }}">
                                    <span>Support</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url ('/setting') }}">
                                    <span>Settings</span></a>
                            </li>
                        </ul>
          </div>
          <div class="card-footer text-center py-2">
            <a class="btn btn-link btn-sm" href="#">View Profile</a>
          </div>
        </div>
      </div>

      <!-- Center Content -->
      <div class="col-6">
        <h4 class="mb-4"> Terms and Conditions </h4>
        <div class="card p-3">
          <h5>1. Introduction</h5>
          <p class="text-muted">By accessing and using Ideas, you accept and agree to be bound by the terms and provision of this agreement.</p>

          <h5>2. Intellectual Property</h5>
          <p class="text-muted">All content on this platform remains the intellectual property of its respective owners.</p>

          <h5>3. User Responsibilities</h5>
          <p class="text-muted">You agree to use the service only for lawful purposes and not to engage in any conduct that could damage or disrupt the service.</p>

          <h5>4. Changes to Terms</h5>
          <p class="text-muted">We reserve the right to modify these terms at any time without prior notice.</p>
        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="col-3">
        <div class="card">
          <div class="card-header pb-0 border-0">
            <h5>Search</h5>
          </div>
          <div class="card-body">
            <input placeholder="Search..." class="form-control w-100" type="text" id="search">
            <button class="btn btn-dark mt-2">Search</button>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection