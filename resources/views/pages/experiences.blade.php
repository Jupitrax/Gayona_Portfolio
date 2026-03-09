@extends('layouts.content')

@section('title', 'Experience')

@section('content')
<div class="main-content p-4">
    <div class="main-header text-center mb-4">
        <img src="{{ asset('img/title.png') }}" class="img-fluid mx-auto d-block" style="max-width:700px;" alt="Title">
        <h1>Experience & Education</h1>
        <img src="{{ asset('img/divider.png') }}" class="img-fluid mx-auto d-block my-2" style="width:200px;" alt="Divider">
    </div>
    
    <div class="resume-content">
        @if($experiences->isNotEmpty())
            @php
            $workExp = $experiences->where('type', 'work');
            $eduExp = $experiences->where('type', 'education');
            @endphp
            
            @if($workExp->isNotEmpty())
            <div class="resume-section">
                <h3><i class="bi bi-briefcase"></i> Experience</h3>
                @foreach($workExp as $exp)
                <div class="mb-3">
                    <h4>{{ $exp->role }} — {{ $exp->organization }}</h4>
                    <p>{{ $exp->year }}</p>
                    <p>{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
            @endif
            
            @if($eduExp->isNotEmpty())
            <div class="resume-section">
                <h3><i class="bi bi-mortarboard"></i> Education</h3>
                @foreach($eduExp as $exp)
                <div class="mb-3">
                    <h4>{{ $exp->role }}</h4>
                    <p>{{ $exp->organization }}</p>
                    <p>{{ $exp->year }}</p>
                    <p>{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
            @endif
        @else
            <p>No experiences found. Please run migrations and seeders.</p>
        @endif
    </div>
@endsection
