@extends('layouts.app')

@section('title', 'Myrick | Portfolio')

@section('content')
<section class="home-hero">
  <div class="home-hero__content">
    <h1 class="heading-primary">Hey, My name is Myrick Noel B. Clemente</h1>
    <div class="home-hero__info">
      <p class="text-primary">
       I'm <strong>Myrick Noel B. Clemente </strong>, a passionate BSIT student skilled in web and mobile development, driven by innovation and continuous learning.
      </p>
    </div>
    <div class="home-hero__cta">
      <a href="#projects" class="btn btn--bg">Projects</a>
    </div>
  </div>
  <div class="home-hero__socials">
    <div class="home-hero__social">
      <a href="#" class="home-hero__social-icon-link">
        <img
          src="{{ asset('assets/png/linkedin-ico.png') }}"
          alt="icon"
          class="home-hero__social-icon"
        />
      </a>
    </div>
    <div class="home-hero__social">
      <a href="#" class="home-hero__social-icon-link">
        <img
          src="{{ asset('assets/png/github-ico.png') }}"
          alt="icon"
          class="home-hero__social-icon"
        />
      </a>
    </div>
    <div class="home-hero__social">
      <a href="#" class="home-hero__social-icon-link">
        <img
          src="{{ asset('assets/png/twitter-ico.png') }}"
          alt="icon"
          class="home-hero__social-icon"
        />
      </a>
    </div>
    <div class="home-hero__social">
      <a href="#" class="home-hero__social-icon-link">
        <img
          src="{{ asset('assets/png/yt-ico.png') }}"
          alt="icon"
          class="home-hero__social-icon"
        />
      </a>
    </div>
    <div class="home-hero__social">
      <a
        href="#"
        class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
      >
        <img
          src="{{ asset('assets/png/insta-ico.png') }}"
          alt="icon"
          class="home-hero__social-icon"
        />
      </a>
    </div>
  </div>
  <div class="home-hero__mouse-scroll-cont">
    <div class="mouse"></div>
  </div>
</section>
<section id="about" class="about sec-pad">  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-med">
      <span class="heading-sec__main">About Me</span>
    </h2>
    <div class="about-header-container" style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">      <div class="about__content-img-cont">
        <img
          src="{{ asset('assets/png/john-doe.png') }}"
          alt="Myrick Noel B. Clemente"
          class="about__content-img"
          style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%; border: 3px solid #333;"
        />
      </div>
      <span class="heading-sec__sub">
        A passionate full stack app and web developer with AI and IT student from the Mabini, dedicated to building user-friendly digital solutions with a focus on design, security, and innovation.
      </span>
    </div>
    <div class="about__content">
        <div class="about__content-main">       
        <div class="about__content-text">
          <h3 class="about__content-title">Get to know me!</h3>
          <div class="about__content-details">
            <p class="about__content-details-para">
              Hey! It's
              <strong>Myrick Noel B. Clemente</strong>
              and I'm a <strong> Full-stack Mobile and Web Developer with AI </strong> located in
              Mabini. I've
              <strong> worked </strong>
             on academic and freelance projects, collaborated with awesome teams, and helped build  
              <strong>digital solutions </strong>
              for community-focused and sustainable initiatives.
            </p>
            <p class="about__content-details-para">
             I’m a bit of a tech and design enthusiast. Over the years, I’ve explored and worked with a wide range of tools, web apps, and mobile platforms across different domains—from security-focused systems develope, to E-commerce apps like Harvest.
              <strong>contact</strong> me here.
            </p>
          </div>
          <a href="#contact" class="btn btn--med btn--theme dynamicBgClr">Contact</a>
        </div>
      </div>
      <div class="about__content-skills">
        <h3 class="about__content-title">My Skills</h3>
        <div class="skills">
          <div class="skills__skill">HTML</div>
          <div class="skills__skill">CSS</div>
          <div class="skills__skill">JavaScript</div>
          <div class="skills__skill">React</div>
          <div class="skills__skill">SASS</div>
          <div class="skills__skill">GIT</div>
          <div class="skills__skill">Shopify</div>
          <div class="skills__skill">Wordpress</div>
          <div class="skills__skill">Google ADS</div>
          <div class="skills__skill">Facebook Ads</div>
          <div class="skills__skill">Android</div>
          <div class="skills__skill">IOS</div>
          <div class="skills__skill">Laravel</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="projects" class="projects sec-pad">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-bg">
      <span class="heading-sec__main">Projects</span>
      <span class="heading-sec__sub">
       Here's a showcase of my recent projects, where I apply my skills in web and mobile development to create innovative solutions. Each project reflects my commitment to quality and user experience.
      </span>
    </h2>

    <div class="projects__content">
      <div class="projects__row">
        <div class="projects__row-img-cont">
          <img
            src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
            alt="Software Screenshot"
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
          <a
            href="{{ route('project1') }}"
            class="btn btn--med btn--theme dynamicBgClr"
            target="_blank"
            >Case Study</a
          >
        </div>
      </div>
      <div class="projects__row">
        <div class="projects__row-img-cont">
          <img
            src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
            alt="Software Screenshot"
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
          <a
            href="{{ route('project2') }}"
            class="btn btn--med btn--theme dynamicBgClr"
            target="_blank"
            >Case Study</a
          >
        </div>
      </div>
      <div class="projects__row">
        <div class="projects__row-img-cont">
          <img
            src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
            alt="Software Screenshot"
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
          <a
            href="{{ route('project3') }}"
            class="btn btn--med btn--theme dynamicBgClr"
            target="_blank"
            >Case Study</a
          >
        </div>
      </div>
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