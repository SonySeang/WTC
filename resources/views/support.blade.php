@extends('layout.layout')

@section('title', 'Support - Ideas')
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
        <h4 class="mb-4"> Need Help? Contact Support </h4>
        <div class="card p-3">
          <form>
            <div class="mb-3">
              <label for="supportEmail" class="form-label">Your Email</label>
              <input type="email" class="form-control" id="supportEmail" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="supportMessage" class="form-label">Your Message</label>
              <textarea class="form-control" id="supportMessage" rows="4" placeholder="Describe your issue..."></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
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
