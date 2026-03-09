@extends('layouts.content')

@section('title', 'Contact')

@section('content')
<div class="main-content p-4">
    <div class="main-header text-center mb-4">
        <img src="{{ asset('img/title.png') }}" class="img-fluid mx-auto d-block" style="max-width:700px;" alt="Title">
        <h1>Contact Me</h1>
        <img src="{{ asset('img/divider.png') }}" class="img-fluid mx-auto d-block my-2" style="width:200px;" alt="Divider">
    </div>
    
    <div class="resume-content">
        @if($contacts->isNotEmpty())
            @php $contact = $contacts->first(); @endphp
            <div class="resume-section">
                <h3><i class="bi bi-person-circle"></i> Get In Touch</h3>
                <div class="text-center mb-4 d-flex align-items-center justify-content-center gap-3">
                    <img src="{{ asset('img/resume.jpg') }}" alt="Profile Picture" class="img-fluid rounded-circle" style="width:150px; height:150px; object-fit:cover; border: 2px solid black;">
                    <div>
                        <h1 class="mb-2">John Andrei Gayona</h1>
                        <div class="contact-info text-start">
                            <span class="emoji">📍</span>{{ $contact->location }} |
                            <span class="emoji">📧</span>{{ $contact->email }} |
                            <span class="emoji">📱</span>{{ $contact->phone }} |
                            <span class="emoji">🌐</span><a href="{{ $contact->linkedin }}" target="_blank">LinkedIn</a>
                        </div>
                </div>
        @else
            <p>No contact data found. Please run migrations and seeders.</p>
        @endif
    </div>
@endsection
