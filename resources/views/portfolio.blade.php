@extends('layouts.app')

@section('title', 'Portfolio | My Projects')

@section('content')
<section id="projects" class="projects sec-pad">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-bg">
      <span class="heading-sec__main">My Projects</span>
      <span class="heading-sec__sub">
        Here's a showcase of my most recent work and personal projects
      </span>
    </h2>    <div class="projects__content">
      @forelse($projects as $project)
      <div class="projects__row">
        <div class="projects__row-img-cont">
          <img
            src="{{ asset($project->image) }}"
            alt="{{ $project->title }} Screenshot"
            class="projects__row-img"
            loading="lazy"
          />
        </div>
        <div class="projects__row-content">
          <h3 class="projects__row-content-title">{{ $project->title }}</h3>
          <p class="projects__row-content-desc">
            {{ $project->description }}
          </p>
          <div class="projects__row-content-tech">
            <p><strong>Technologies:</strong> {{ $project->tech_stack }}</p>
          </div>
          <div class="projects__btn-group">
            @if($project->github_url)
            <a href="{{ $project->github_url }}" class="btn btn--med btn--theme-inv" target="_blank" rel="noreferrer">
              GitHub
            </a>
            @endif
            @if($project->live_url)
            <a href="{{ $project->live_url }}" class="btn btn--med btn--theme dynamicBgClr" target="_blank" rel="noreferrer">
              Live Demo
            </a>
            @endif
          </div>
        </div>
      </div>
      @empty
      <div class="projects__empty">
        <p>No projects available at the moment. Check back soon!</p>
      </div>
      @endforelse
    </div>
  </div>
</section>
@endsection
