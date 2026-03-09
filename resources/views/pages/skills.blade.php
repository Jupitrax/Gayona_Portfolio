@extends('layouts.content')

@section('title', 'Skills')

@section('content')
<div class="main-content p-4">
    <div class="main-header text-center mb-4">
        <img src="{{ asset('img/title.png') }}" class="img-fluid mx-auto d-block" style="max-width:700px;" alt="Title">
        <h1>My Skills</h1>
        <img src="{{ asset('img/divider.png') }}" class="img-fluid mx-auto d-block my-2" style="width:200px;" alt="Divider">
    </div>
    
    <div class="resume-content">
        @if($skills->isNotEmpty())
            @php
            $grouped = $skills->groupBy('category');
            $icons = [
                'Digital Art' => 'bi-palette',
                'Game Design' => 'bi-controller',
                'Illustration' => 'bi-brush',
                'Creative Direction' => 'bi-lightbulb',
                'Programming' => 'bi-code-slash',
                'Cloud Computing' => 'bi-cloud',
                'Leadership' => 'bi-people'
            ];
            $levelToPercent = [
                'Advanced' => 100,
                'Intermediate' => 50,
                'Beginner' => 25
            ];
            @endphp
            
            @foreach($grouped as $category => $skillItems)
                @php
                $icon = isset($icons[$category]) ? $icons[$category] : 'bi-star';
                @endphp
                <div class="resume-section">
                    <h3><i class="bi {{ $icon }}"></i> {{ $category }}</h3>
                    <div class="row">
                        @foreach($skillItems as $skill)
                        <div class="col-md-6 mb-3">
                            <div class="skill-item">
                                <h4>{{ $skill->name }}</h4>
                                @php
                                $percent = isset($levelToPercent[$skill->level]) ? $levelToPercent[$skill->level] : 50;
                                @endphp
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $percent }}%;" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100">{{ $skill->level }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <p>No skills found. Please run migrations and seeders.</p>
        @endif
    </div>
</div>
@endsection
