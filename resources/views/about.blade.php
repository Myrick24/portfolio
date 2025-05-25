@extends('layouts.app')

@section('title', 'Myrick | About Me')

@section('content')
<section class="about-section sec-pad">    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">About Me</span>
        </h2>
        <div class="about-header-container" style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
            <div class="about__content-img-cont">
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
@endsection
