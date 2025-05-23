@extends('layouts.app')

@section('title', 'Myrick | Portfolio')

@section('content')
<section class="home-hero">
  <div class="home-hero__content">
    <h1 class="heading-primary">Hey, My name is Myrick Noel B. Clemente</h1>
    <div class="home-hero__info">
      <p class="text-primary">
        I'm a full-stack app and web developer sabi ni Chat-GPT. Currently, I'm focused on creating accessible, 
        human-centered products at a software development company.
      </p>
    </div>
    <div class="home-hero__cta">
      <a href="{{ route('portfolio') }}" class="btn btn--bg">Projects</a>
    </div>
  </div>
  <div class="home-hero__socials">    <div class="home-hero__social">
      <a href="https://www.facebook.com/myrick.noel.clemente" class="home-hero__social-icon-link" target="_blank" rel="noopener">
        <img
          src="{{ asset('assets/png/linkedin-ico.png') }}"
          alt="Facebook"
          class="home-hero__social-icon"
        />
      </a>
    </div>
    <div class="home-hero__social">
      <a href="https://github.com/Myrick24" class="home-hero__social-icon-link" target="_blank" rel="noopener">
        <img
          src="{{ asset('assets/png/github-ico.png') }}"
          alt="GitHub"
          class="home-hero__social-icon"
        />
      </a>
    </div>
    <div class="home-hero__social">
      <a
        href="https://www.instagram.com/myrkz_/"
        class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
        target="_blank" rel="noopener"
      >
        <img
          src="{{ asset('assets/png/insta-ico.png') }}"
          alt="Instagram"
          class="home-hero__social-icon"
        />
      </a>
    </div>
  </div>
  <div class="home-hero__mouse-scroll-cont">
    <div class="mouse"></div>
  </div>
</section>
<section id="about" class="about sec-pad">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-med">
      <span class="heading-sec__main">About Me</span>
      <span class="heading-sec__sub">
        I'm Myrick Noel B. Clemente, a passionate BSIT student s <strong>killed</strong> in web and mobile development, driven by innovation and continuous learning.
      </span>
    </h2>
    <div class="about__content">
      <div class="about__content-main">
        <h3 class="about__content-title">Get to know me!</h3>
        <div class="about__content-details">
          <p class="about__content-details-para">
            Hey! It's
            <strong>Myrick</strong>
            and I'm a <strong> Fullstack App and Web Developer but with AI </strong> located in
            Deguzman Mabini Pangasinan. I've done
            <strong> worked </strong>
            on academic and freelance projects, collaborated with awesome teams, and helped build 
            <strong>digital solutions  </strong>
            for community-focused and sustainable initiatives.
          </p>
          <p class="about__content-details-para">
            I’m a bit of a tech and design enthusiast. Over the years, I’ve explored and worked with a wide range of tools, web apps, and mobile platforms across different domains—from security-focused systems developed, to E-commerce apps like Harvest. Feel free to
            <strong>contact</strong> me here.
          </p>
        </div>
        <a href="#contact" class="btn btn--med btn--theme dynamicBgClr"
          >Contact</a
        >
      </div>
      <div class="about__content-skills">
        <h3 class="about__content-title">My Skills</h3>
        <div class="skills">
      
          <div class="skills__skill">HTML</div>
          <div class="skills__skill">CSS</div>
          <div class="skills__skill">Canva</div>
           <div class="skills__skill">PhotoShop</div>
           <div class="skills__skill">Flutter</div>
            <div class="skills__skill">Firebase</div>
          <div class="skills__skill">GIT</div>
   <div class="skills__skill">Capcut</div>
          <div class="skills__skill">Android</div>
        <div class="skills__skill">Ml</div>
         <div class="skills__skill">Mag AI</div>
          <div class="skills__skill">Laravel</div>
           <div class="skills__skill">Magpa baby</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="projects" class="projects sec-pad">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-bg">
      <span class="heading-sec__main">Featured Projects</span>
      <span class="heading-sec__sub">
        Here are some of my recent work and personal projects
      </span>
    </h2>

    <div class="projects__content">
      @forelse($featuredProjects as $project)
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
        <p>No featured projects available at the moment. Check back soon!</p>
      </div>
      @endforelse
    </div>
    
    <div class="text-center mt-4">
      <a href="{{ route('portfolio') }}" class="btn btn--med btn--theme">View All Projects</a>
    </div>
  </div>
</section>
<section id="contact" class="contact sec-pad dynamicBg">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-med">
      <span class="heading-sec__main heading-sec__main--lt">Contact</span>
      <span class="heading-sec__sub heading-sec__sub--lt">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facilis
        tempora explicabo quae quod deserunt eius sapiente
      </span>
    </h2>    <div class="contact__form-container">
      @if(session('success'))
      <div style="background-color: #4CAF50; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
        {{ session('success') }}
      </div>
      @endif
      
      @if($errors->any())
      <div style="background-color: #f44336; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
        <ul style="margin: 0; padding-left: 20px;">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
      <form action="{{ route('contact.submit') }}" method="POST" class="contact__form">
        @csrf
        <div class="contact__form-field">
          <label class="contact__form-label" for="name">Name</label>
          <input
            required
            placeholder="Enter Your Name"
            type="text"
            class="contact__form-input"
            name="name"
            id="name"
            value="{{ old('name') }}"
          />
        </div>
        <div class="contact__form-field">
          <label class="contact__form-label" for="email">Email</label>
          <input
            required
            placeholder="Enter Your Email"
            type="email"
            class="contact__form-input"
            name="email"
            id="email"
            value="{{ old('email') }}"
          />
        </div>
        <div class="contact__form-field">
          <label class="contact__form-label" for="message">Message</label>
          <textarea
            required
            cols="30"
            rows="10"
            class="contact__form-input"
            placeholder="Enter Your Message"
            name="message"
            id="message"
          >{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn--theme contact__btn">
          Submit
        </button>
      </form>
    </div>
  </div>
</section>
@endsection