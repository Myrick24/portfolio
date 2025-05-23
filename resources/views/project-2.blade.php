@extends('layouts.app')

@section('title', 'Project 2 | John Doe')

@section('content')
<section class="project-cs-hero">
  <div class="project-cs-hero__content">
    <h1 class="heading-primary">Project 2</h1>
    <div class="project-cs-hero__info">
      <p class="text-primary">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos in numquam incidunt earum quaerat cum fuga, nemo a magni et?
      </p>
    </div>
    <div class="project-cs-hero__cta">
      <a href="{{ route('home') }}#projects" class="btn btn--bg">Back to Projects</a>
    </div>
  </div>
</section>
<section class="project-details">
  <div class="main-container">
    <div class="project-details__content">
      <div class="project-details__showcase-img-cont">
        <img
          src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
          alt="Project Image"
          class="project-details__showcase-img"
        />
      </div>
      <div class="project-details__content-main">
        <div class="project-details__desc">
          <h3 class="project-details__content-title">Project Overview</h3>
          <p class="project-details__desc-para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias
            tenetur minus quaerat aliquid, aut provident blanditiis, deleniti
            aspernatur ipsam eaque veniam voluptatem corporis vitae mollitia
            impedit. Recusandae, rerum tenetur.
          </p>
          <p class="project-details__desc-para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias
            tenetur minus quaerat aliquid, aut provident blanditiis, deleniti
            aspernatur ipsam eaque veniam voluptatem corporis vitae mollitia
            impedit. Recusandae, rerum tenetur.
          </p>
        </div>
        <div class="project-details__tools-used">
          <h3 class="project-details__content-title">Tools Used</h3>
          <div class="skills">
            <div class="skills__skill">PHP</div>
            <div class="skills__skill">MySQL</div>
            <div class="skills__skill">Laravel</div>
            <div class="skills__skill">VueJS</div>
          </div>
        </div>
        <div class="project-details__links">
          <h3 class="project-details__content-title">See Live</h3>
          <a
            href="#"
            class="btn btn--med btn--theme project-details__links-btn"
            target="_blank"
            >Live Link</a
          >
          <a
            href="#"
            class="btn btn--med btn--theme-inv project-details__links-btn"
            target="_blank"
            >Code Link</a
          >
        </div>
      </div>
    </div>
  </div>
</section>
@endsection