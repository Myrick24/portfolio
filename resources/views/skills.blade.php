@extends('layouts.app')

@section('title', 'Skills | Portfolio')

@section('content')
<section id="skills" class="skills-section sec-pad">
  <div class="main-container">
    <h2 class="heading heading-sec heading-sec__mb-med">
      <span class="heading-sec__main">My Skills</span>
      <span class="heading-sec__sub">
        Here are the technologies and tools I specialize in
      </span>
    </h2>
    
    <div class="skills-content">
      <div class="skills-category">
        <h3 class="skills-category__title">Frontend Development</h3>
        <div class="skills">
          <div class="skills__skill">HTML</div>
          <div class="skills__skill">CSS</div>
          <div class="skills__skill">JavaScript</div>
          <div class="skills__skill">React</div>
          <div class="skills__skill">SASS</div>
          <div class="skills__skill">Responsive Design</div>
        </div>
      </div>
      
      <div class="skills-category">
        <h3 class="skills-category__title">Backend Development</h3>
        <div class="skills">
          <div class="skills__skill">PHP</div>
          <div class="skills__skill">Laravel</div>
          <div class="skills__skill">MySQL</div>
          <div class="skills__skill">API Development</div>
        </div>
      </div>
      
      <div class="skills-category">
        <h3 class="skills-category__title">Tools & Platforms</h3>
        <div class="skills">
          <div class="skills__skill">GIT</div>
          <div class="skills__skill">GitHub</div>
          <div class="skills__skill">VS Code</div>
          <div class="skills__skill">Shopify</div>
          <div class="skills__skill">Wordpress</div>
          <div class="skills__skill">Docker</div>
        </div>
      </div>
      
      <div class="skills-category">
        <h3 class="skills-category__title">Digital Marketing</h3>
        <div class="skills">
          <div class="skills__skill">Google ADS</div>
          <div class="skills__skill">Facebook Ads</div>
          <div class="skills__skill">SEO</div>
          <div class="skills__skill">Analytics</div>
        </div>
      </div>
      
      <div class="skills-category">
        <h3 class="skills-category__title">Mobile Development</h3>
        <div class="skills">
          <div class="skills__skill">Android</div>
          <div class="skills__skill">IOS</div>
          <div class="skills__skill">React Native</div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
