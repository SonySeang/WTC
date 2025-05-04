{{-- filepath: resources/views/feature.blade.php --}}
@extends('layout.layout')
@section('title', 'Feature - Ideas')
@section('content')
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">FEATURES</h2>
        <p class="text-muted mb-5">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($feature as $features)
                <div class="col">
                <div class="border p-3 d-flex align-items-center">
                    <i class="{{ $features->icon}} text-warning fs-4 me-3"></i>
                    <span class="fw-semibold"> {{ $features->title}}</span>
                </div>
            </div>
            @endforeach      
            
        </div>
    </div>
</section>

@endsection