@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="main-content p-4">
    @if($profiles->isNotEmpty())
        @php $profile = $profiles->first(); @endphp
        
        <div class="main-header text-center mb-4">
            <img src="{{ asset('img/' . $profile->title_image) }}" class="img-fluid mx-auto d-block" style="max-width:700px;" alt="Title">
            <h1>{{ $profile->title }}</h1>
            <img src="{{ asset('img/divider.png') }}" class="img-fluid mx-auto d-block my-2" style="width:200px;" alt="Divider">
        </div>

        <div class="row g-4 justify-content-center align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('img/' . $profile->profile_image) }}" class="profile-img img-fluid rounded shadow" alt="Profile Image">
            </div>
            
            <div class="col-md-6">
                <div class="bio-box p-4 h-100 d-flex align-items-center bg-light rounded">
                    <p class="mb-0 lead text-secondary">{{ $profile->bio }}</p>
                </div>
            </div>
        </div> @else
        <div class="main-header text-center mb-4">
            <h1>Welcome</h1>
            <p class="mt-4">No profile data found. Please run migrations and seeders.</p>
        </div>
    @endif
</div> @endsection