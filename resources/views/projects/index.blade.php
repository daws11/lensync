@extends('layouts.app')

@section('title', 'Project List - LEN Sync')

@section('content')
<div class="container mt-4">
    
    <x-primary-button  ><a href="{{ route('projects.create') }}"> + Add New Project </a></x-primary-button>

    <div class="projects-grid">
        @forelse ($projects as $project)
        <div class="project-card">
        <div class="card-project">
            <div class="card-top">
                <div class="card-date">{{ \Carbon\Carbon::parse($project->contract_start_date)->format('F d, Y') }}</div>
                <span onclick="showDetails({{ $project->id }})"><i class="fa-solid fa-circle-info card-icon"></i></span>
            </div>
            <div class="card-content">
                <div class="card-title">
                {{ $project->name }}
                </div>
                <div class="card-owner">{{ $project->owner_name }}</div>
            </div>
            <a href="{{ route('projects.show', $project) }}"  class="card-detail">Lihat Detail</a>
            </div>
        </div>

        @empty
            <p>No projects found.</p>
        @endforelse
    </div>
</div>

<script>
function showDetails(projectId) {
    
}
</script>
@endsection
