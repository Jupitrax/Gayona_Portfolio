@extends('layouts.content')

@section('title', 'Projects')

@section('content')
<div class="main-content p-4">
    <div class="main-header text-center mb-4">
        <img src="{{ asset('img/title.png') }}" class="img-fluid mx-auto d-block" style="max-width:700px;" alt="Title">
        <h1>My Creative Projects</h1>
        <img src="{{ asset('img/divider.png') }}" class="img-fluid mx-auto d-block my-2" style="width:200px;" alt="Divider">
    </div>
    
    @if($projects->isNotEmpty())
        @php
        $grouped = $projects->groupBy('category');
        $icons = [
            'Blender' => 'bi-brush',
            'Concept Art' => 'bi-palette',
            'Sprite' => 'bi-controller',
            'AWS' => 'bi-cloud',
            'HALINAW' => 'bi-lightning'
        ];
        @endphp
        
        <div class="page-description">
            <p>Welcome to my Projects page! Here, you'll find a showcase of my creative work, including digital art, 3D renders, game assets, and more.</p>
        </div>
        
        <div class="gallery">
            @foreach($grouped as $category => $projectItems)
                @php $icon = $icons[$category] ?? 'bi-image'; @endphp
                <div class="resume-section">
                    <h3 class='text-center mb-2'><i class='bi {{ $icon }}'></i> {{ $category }}</h3>
                </div>
                <div class="row">
                    @foreach($projectItems as $project)
                    <div class="col-md-4 mb-4">
                        <div class="image-container">
                            <img src="{{ asset('project-img/' . $project->image_path) }}" 
                                 alt="{{ $project->title }}" 
                                 data-description="{{ $project->description }}"
                                 data-category="{{ $project->category }}"
                                 class="gallery-img img-fluid" 
                                 onclick="openProject(this)">
                        </div>
                    </div>
                    @endforeach
                </div>
                <img src="{{ asset('img/divider.png') }}" class="img-fluid d-block mx-auto my-2" style="width:200px;" alt="Divider">
            @endforeach
        </div>
    @else
        <p class="text-center">No projects found. Please run migrations and seeders.</p>
    @endif
</div>

<div id="overlay">
    <button id="close-btn" onclick="closeProject()">&times;</button>
    <div class="overlay-content">
        <img id="enlarged-img" src="" alt="">
        <h2 id="img-title"></h2>
        <p id="img-description"></p>
    </div>
</div>



<script>
function openProject(imgElement) {
    const overlay = document.getElementById('overlay');
    const enlargedImg = document.getElementById('enlarged-img');
    const title = document.getElementById('img-title');
    const description = document.getElementById('img-description');

    // Pull data from clicked image
    enlargedImg.src = imgElement.src;
    title.innerText = imgElement.alt + " (" + imgElement.getAttribute('data-category') + ")";
    description.innerText = imgElement.getAttribute('data-description');

    // Show overlay
    overlay.style.display = 'block';
    document.body.style.overflow = 'hidden'; // Stop background scrolling
}

function closeProject() {
    document.getElementById('overlay').style.display = 'none';
    document.body.style.overflow = 'auto'; // Re-enable scrolling
}

// Close if user clicks outside the black box
document.getElementById('overlay').addEventListener('click', function(e) {
    if (e.target === this) {
        closeProject();
    }
});
</script>
@endsection