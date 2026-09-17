@props(['project'])

<div class="col-md-3 col-sm-6 col-xs-12 project-card-col animate-box">
    <div class="project-card">
        <img src="{{ asset($project->image) }}" class="project-card-img" alt="{{ $project->title }} - {{ $project->author }}">
        <div class="project-card-body">
            <div>
                <span class="project-tag">
                    <x-icons.building style="width: 12px; height: 12px; display: inline-block; vertical-align: -1px; margin-right: 3px;" />
                    {{ $project->category }}
                </span>
            </div>
            <h3 class="project-card-title">{{ $project->title }}</h3>
            <div class="project-card-author">
                <x-icons.user-architect style="width: 13px; height: 13px; display: inline-block; vertical-align: -2px; margin-right: 4px; color: #888;" />
                {{ $project->author }}
            </div>
            <p class="project-card-desc">{{ $project->description }}</p>
        </div>
    </div>
</div>
