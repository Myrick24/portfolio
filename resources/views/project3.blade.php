@extends('layouts.app')

@section('title', 'Portfolio Website')

@section('content')
<section class="project-cs-hero">
    <div class="project-cs-hero__content">
        <h1 class="heading-primary">Personal Portfolio Website</h1>
        <div class="project-cs-hero__info">
            <p class="text-primary">
                A responsive professional portfolio website showcasing skills, projects, and contact information
            </p>
        </div>
    </div>
</section>
<section class="project-details">
    <div class="main-container">        <div class="project-details__content">
            <div class="project-details__showcase">
                <div class="project-details__showcase-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-1.png') }}"
                        alt="Portfolio Website"
                        class="project-details__showcase-img"
                    />
                   
                </div>
            </div>
            <div class="project-details__content-main">
                <div class="project-details__desc">
                    <h3 class="project-details__content-title">Project Overview</h3>
                    <p class="project-details__desc-para">
                        This portfolio website serves as a digital resume and project showcase, designed with a focus on user experience, responsive design, and modern aesthetics. The site features a clean, professional layout that effectively communicates my skills, projects, and professional journey to potential employers and clients.
                    </p>
                    <p class="project-details__desc-para">
                        Key features include a responsive design that adapts seamlessly to various screen sizes, animated text elements that create visual interest, an interactive projects section with detailed case studies, and a contact form for easy communication. The website also incorporates SEO best practices to ensure visibility in search results and uses modern web performance techniques for fast loading times.
                    </p>
                    <p class="project-details__desc-para">
                        The portfolio was built using Laravel, a powerful PHP framework, which allowed for clean organization of code, efficient routing, and easy implementation of features like the contact form with email notifications. The front-end was developed with a combination of HTML, CSS, and JavaScript, with a focus on creating an intuitive and engaging user experience that effectively communicates my professional brand.
                    </p>
                </div>
                <div class="project-details__tools-used">
                    <h3 class="project-details__content-title">Tools Used</h3>
                    <div class="skills">
                        <div class="skills__skill">HTML</div>
                        <div class="skills__skill">CSS</div>
                        <div class="skills__skill">JavaScript</div>
                        <div class="skills__skill">PHP</div>
                        <div class="skills__skill">Laravel</div>
                        <div class="skills__skill">Responsive Design</div>
                        <div class="skills__skill">SEO</div>
                        <div class="skills__skill">Git</div>
                        <div class="skills__skill">Figma</div>
                    </div>
                </div>
                <div class="project-details__links">
                    <h3 class="project-details__content-title">See Live</h3>
                    <a
                        href="#"
                        class="btn btn--med btn--theme project-details__links-btn"
                        target="_blank"
                        >Live Website</a
                    >
                    <a
                        href="#"
                        class="btn btn--med btn--theme-inv project-details__links-btn"
                        target="_blank"
                        >GitHub Repository</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
@endsection