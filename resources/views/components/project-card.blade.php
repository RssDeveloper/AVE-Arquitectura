@props(['project'])

<div class="col-md-3 col-sm-6 col-xs-12 project-card-col animate-box">
    <div class="project-card">
        <img src="{{ asset($project->image) }}" class="project-card-img" alt="{{ $project->title }} - {{ $project->author }}">
        <div class="project-card-body">
            <div>
                <span class="project-tag">{{ $project->category }}</span>
            </div>
            <h3 class="project-card-title">{{ $project->title }}</h3>
            <div class="project-card-author">{{ $project->author }}</div>
            <p class="project-card-desc">{{ $project->description }}</p>
        </div>
    </div>
</div>
