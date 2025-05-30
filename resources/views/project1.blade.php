@extends('layouts.app')

@section('title', 'Harvest E-Commerce App')

@section('content')
<section class="project-cs-hero">
    <div class="project-cs-hero__content">
        <h1 class="heading-primary">Harvest E-Commerce App</h1>
        <div class="project-cs-hero__info">
            <p class="text-primary">
                A full-featured e-commerce platform connecting local farmers directly with consumers, promoting sustainable agriculture and supporting local communities.
            </p>
        </div>
    </div>
</section>
<section class="project-details">
    <div class="main-container">        <div class="project-details__content">
            <div class="project-details__showcase">
                <div class="project-details__showcase-img-cont">
                    <img
                        src="{{ asset('assets/jpeg/project-2-a.jpg') }}"
                        alt="Harvest E-Commerce App"
                        class="project-details__showcase-img"
                    />
                    <img
                        src="{{ asset('assets/jpeg/project-2-b.jpg') }}"
                        alt="Harvest E-Commerce App - Feature"
                        class="project-details__showcase-img"
                    />
                </div>
            </div>
            <div class="project-details__content-main"><div class="project-details__desc">
                    <h3 class="project-details__content-title">Project Overview</h3>
                    <p class="project-details__desc-para">
                        Harvest is an innovative e-commerce platform designed to connect local farmers directly with consumers. This farm-to-table digital marketplace eliminates middlemen, ensuring farmers receive fair compensation while providing consumers with fresh, locally-sourced produce at reasonable prices. The application features real-time inventory management, secure payment processing, and an intuitive user interface that makes browsing and purchasing agricultural products seamless.
                    </p>
                    <p class="project-details__desc-para">
                        Key features include user authentication, product categorization, shopping cart functionality, order tracking, review and rating system, and farmer profiles that showcase their growing practices and story. The platform also integrates with mapping services to help users find nearby farms and calculates carbon footprint reduction achieved through local purchasing.
                    </p>
                    <p class="project-details__desc-para">
                        Harvest was developed with sustainability in mind, promoting local agriculture and reducing the environmental impact of food distribution. The project addresses critical challenges in our food system while leveraging technology to create economic opportunities for small-scale farmers.
                    </p>
                </div>                <div class="project-details__tools-used">
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
