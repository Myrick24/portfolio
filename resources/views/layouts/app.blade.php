<!DOCTYPE html>
<html lang="en">  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="{{ asset('assets/png/myrick-favicon.png') }}" type="image/png">
    <title>@yield('title', 'Portfolio')</title>    <meta name="description" content="@yield('description', 'Portfolio Template for Developer')" /><link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/typing-animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/image-click-animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/image-slideshow.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/image-preloader.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/project-showcase.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/enhanced-image-animations.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
      rel="stylesheet"
    />

    @yield('extra-css')
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img
              src="{{ asset('assets/png/john-doe.png') }}"
              alt="John Doe Logo Image"
              class="header__logo-img"
            />
            
          </div>          
          <img 
              src="{{ asset('assets/png/myrick-favicon-t.png') }}" 
              alt="Myrick Profile Image" 
              class="header__logo-secondary-img" 
              style="width: 30px; height: 30px; margin-right: -6px; margin-left: 5px;"
            />
          <span class="header__logo-sub header__logo-text-animation" >
            <span class="header__logo-letter">y</span><span class="header__logo-letter">r</span><span class="header__logo-letter">i</span><span class="header__logo-letter">c</span><span class="header__logo-letter">k</span>
          </span>
        </div>
        <div class="header__main">          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="{{ route('home') }}" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="{{ route('about') }}" class="header__link">About </a>
            </li>
            <li class="header__link-wrapper">
              <a href="{{ route('skills') }}" class="header__link">Skills </a>
            </li>
            <li class="header__link-wrapper">
              <a href="{{ route('portfolio') }}" class="header__link">
                Portfolio
              </a>
            </li>
            <li class="header__link-wrapper">
              <a href="{{ route('contact') }}" class="header__link"> Contact </a>
            </li>
          </ul>
          <div class="header__main-ham-menu-cont">
            <img
              src="{{ asset('assets/svg/ham-menu.svg') }}"
              alt="hamburger menu"
              class="header__main-ham-menu"
            />
            <img
              src="{{ asset('assets/svg/ham-menu-close.svg') }}"
              alt="hamburger menu close"
              class="header__main-ham-menu-close d-none"
            />
          </div>
        </div>
      </div>
      <div class="header__sm-menu">
        <div class="header__sm-menu-content">          <ul class="header__sm-menu-links">
            <li class="header__sm-menu-link">
              <a href="{{ route('home') }}"> Home </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('about') }}"> About </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('skills') }}"> Skills </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('portfolio') }}"> Portfolio </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('contact') }}"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    @yield('content')
    
    <footer class="main-footer">
      <div class="main-container">
        <div class="main-footer__upper">          
          <div class="main-footer__row main-footer__row-1">
            <h2 class="heading heading-sm main-footer__heading-sm">
              <span>Social</span>
            </h2>
            <div class="main-footer__social-cont">
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/linkedin-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/github-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/twitter-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/yt-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/insta-ico.png') }}"
                  alt="icon"
                />
              </a>
            </div>
            
            <!-- Contact Information -->
            <div style="margin-top: 20px;">
              <h3 class="heading heading-sm main-footer__heading-sm" style="margin-bottom: 10px;">
                <span>Contact Info</span>
              </h3>
              <div style="color: #eee; font-size: 1rem;">
                <div style="margin-bottom: 8px;">
                  <strong>Email:</strong> <a href="mailto:myrick.clemente@example.com" style="color: #eee; text-decoration: none;">myrick.clemente@example.com</a>
                </div>
                <div>
                  <strong>Phone:</strong> <a href="tel:+639123456789" style="color: #eee; text-decoration: none;">+63 912 345 6789</a>
                </div>
              </div>
            </div>
          </div>          <div class="main-footer__row main-footer__row-2">
            
            <h4 class="heading heading-sm text-lt">
              <img 
                src="{{ asset('assets/png/myrick-favicon-w.png') }}" 
                alt="Myrick Logo" 
                style="width: 30px; height:30px; margin-right: 8px; vertical-align: middle;"
              />
              Myrick Noel B. Clemente
            </h4>
            <p class="main-footer__short-desc">
              A passionate full stack app and web developer and a design enthusiast and IT student from the Mabini, dedicated to building user-friendly digital solutions with a focus on design, security, and innovation.
            </p>
          </div>
        </div> 

        <div class="main-footer__lower">
          &copy; Copyright by Myrick {{ date('Y') }}. Made with Laravel.
        </div>
      </div>    </footer>    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/image-preloader.js') }}"></script>
    <script src="{{ asset('js/image-switcher.js') }}"></script>
    <script src="{{ asset('js/touch-swipe.js') }}"></script>
    <script src="{{ asset('js/image-slideshow.js') }}"></script>
    @yield('extra-js')
  </body>
</html>