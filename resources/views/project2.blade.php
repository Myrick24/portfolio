@extends('layouts.app')

@section('title', 'Security ni Jomar - Mobile Security App')

@section('content')
<section class="project-cs-hero">
    <div class="project-cs-hero__content">
        <h1 class="heading-primary">Security ni Jomar</h1>
        <div class="project-cs-hero__info">
            <p class="text-primary">
                A comprehensive mobile security application with advanced features for personal and business protection
            </p>
        </div>
    </div>
</section>
<section class="project-details">
    <div class="main-container">        <div class="project-details__content">
            <div class="project-details__showcase">
                <div class="project-details__showcase-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-3-a.jpg') }}"
                        alt="Security ni Jomar App"
                        class="project-details__showcase-img"
                    />
                    <img
                        src="{{ asset('assets/jpeg/project-3-b.jpg') }}"
                        alt="Security ni Jomar App - Feature"
                        class="project-details__showcase-img"
                    />
                </div>
            </div>
            <div class="project-details__content-main">
                <div class="project-details__desc">
                    <h3 class="project-details__content-title">Project Overview</h3>
                    <p class="project-details__desc-para">
                        "Security ni Jomar" is a cutting-edge mobile security application designed to provide comprehensive protection for both personal and business users. The app combines multiple security features into a single, user-friendly platform, addressing the growing concerns of digital privacy, device security, and personal safety.
                    </p>
                    <p class="project-details__desc-para">
                        Key features include advanced biometric authentication (fingerprint, facial recognition), real-time threat detection, secure file encryption, anti-phishing protection, and a privacy scanner that identifies potentially vulnerable applications. The app also includes a unique "SOS Mode" that can silently alert emergency contacts with the user's GPS location when triggered.
                    </p>
                    <p class="project-details__desc-para">
                        For business users, "Security ni Jomar" offers additional enterprise-grade features such as remote device management, secure communication channels, data breach alerts, and compliance monitoring. The application was built with a focus on lightweight performance, ensuring security doesn't come at the cost of device speed or battery life.
                    </p>
                </div>
                <div class="project-details__tools-used">
                    <h3 class="project-details__content-title">Tools Used</h3>
                    <div class="skills">
                         <div class="skills__skill">Flutter</div>
                        <div class="skills__skill">VS code</div>
                        <div class="skills__skill">Firebase</div>
                       
                        <div class="skills__skill">Responsive Design</div>
                      
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
                        >App Store</a
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