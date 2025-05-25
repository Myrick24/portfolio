@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<section class="projects sec-pad" id="projects">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-bg">
            <span class="heading-sec__main">Projects</span>
            <span class="heading-sec__sub">
                Here are some of my recent projects
            </span>
        </h2>

        <div class="projects__content">
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-1.jpeg') }}"
                        alt="Project 1"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Project 1</h3>
                    <p class="projects__row-content-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        facilis tempora, explicabo quae quod deserunt eius sapiente
                        praesentium.
                    </p>
                    <a href="#" class="btn btn--med btn--theme dynamicBgClr">View Details</a>
                </div>
            </div>
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-2.jpeg') }}"
                        alt="Project 2"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Project 2</h3>
                    <p class="projects__row-content-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        facilis tempora, explicabo quae quod deserunt eius sapiente
                        praesentium.
                    </p>
                    <a href="#" class="btn btn--med btn--theme dynamicBgClr">View Details</a>
                </div>
            </div>
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-3.jpeg') }}"
                        alt="Project 3"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Project 3</h3>
                    <p class="projects__row-content-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        facilis tempora, explicabo quae quod deserunt eius sapiente
                        praesentium.
                    </p>
                    <a href="#" class="btn btn--med btn--theme dynamicBgClr">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
