@extends('layout.layout')

@section('title', 'Explore - Ideas')
@section('content')

 <!-- Main Content -->
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
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Feed loaded successfully!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <h4 class="mb-4"> Your Feed </h4>

        <div class="card mb-3">
          <div class="card-body">
            <h5>John Doe</h5>
            <p class="text-muted">Just shared a new amazing idea about AI development!</p>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <h5>Jane Smith</h5>
            <p class="text-muted">Check out my thoughts on sustainable energy solutions!</p>
          </div>
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

        <div class="card mt-3">
          <div class="card-header pb-0 border-0">
            <h5>Who to follow</h5>
          </div>
          <div class="card-body">
            <div class="hstack gap-2 mb-3">
              <div class="avatar">
                <a href="#"><img class="avatar-img rounded-circle" src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Peach" alt=""></a>
              </div>
              <div class="overflow-hidden">
                <a class="h6 mb-0" href="#">Princess Peach</a>
                <p class="mb-0 small text-truncate">@Peach</p>
              </div>
              <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="d-grid mt-3">
              <a class="btn btn-sm btn-primary-soft" href="#">Show More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection