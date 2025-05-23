@extends('layouts.app')

@section('title', 'About Me | Portfolio')

@section('content')
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
            I'm a bit of a tech and design enthusiast. Over the years, I've explored and worked with a wide range of tools, web apps, and mobile platforms across different domains—from security-focused systems developed, to E-commerce apps like Harvest. Feel free to
            <strong>contact</strong> me here.
          </p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn--med btn--theme dynamicBgClr"
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
@endsection
