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
                        src="{{ asset('assets/jpeg/project-2-a.jpg') }}"
                        alt="Harvest E-Commerce App"
                        class="projects__row-img"
                        loading="lazy"
                    />
                    <img
                        src="{{ asset('assets/jpeg/project-2-b.jpg') }}"
                        alt="Harvest E-Commerce App - Feature"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Harvest E-Commerce App</h3>
                    <p class="projects__row-content-desc">
                        A farm-to-table e-commerce platform connecting local farmers directly with consumers, featuring secure payments, inventory management, and interactive farmer profiles.
                    </p>
                    <a href="{{ url('/project1') }}" class="btn btn--med btn--theme dynamicBgClr">View Details</a>
                </div>
            </div>            
            <div class="projects__row">                <div class="projects__row-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-3-a.jpg') }}"
                        alt="Security ni Jomar App"
                        class="projects__row-img"
                        loading="lazy"
                    />
                    <img
                        src="{{ asset('assets/jpeg/project-3-b.jpg') }}"
                        alt="Security ni Jomar App - Feature"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Security ni Jomar</h3>
                    <p class="projects__row-content-desc">
                        A comprehensive mobile security application with advanced features including biometric authentication, threat detection, file encryption, and emergency SOS functionality.
                    </p>
                    <a href="{{ url('/project2') }}" class="btn btn--med btn--theme dynamicBgClr">View Details</a>
                </div>
            </div>            
            <div class="projects__row">                <div class="projects__row-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-1.png') }}"
                        alt="Portfolio Website"
                        class="projects__row-img"
                        loading="lazy"
                    />
                   
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Portfolio Website</h3>
                    <p class="projects__row-content-desc">
                        A responsive professional portfolio website built with Laravel, featuring modern design, animated elements, project showcases, and a contact form with email notifications.
                    </p>
                    <a href="{{ url('/project3') }}" class="btn btn--med btn--theme dynamicBgClr">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
