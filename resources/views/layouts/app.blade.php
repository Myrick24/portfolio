<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Portfolio')</title>    <meta name="description" content="@yield('description', 'Portfolio Template for Developer')" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

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
              src="{{ asset('assets/png/myrick.png') }}"
              alt="John Doe Logo Image"
              class="header__logo-img"
            />
          </div>
          <span class="header__logo-sub">Myrick </span>
        </div>        <div class="header__main">
          <ul class="header__links">
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
        <div class="header__sm-menu-content">
          <ul class="header__sm-menu-links">
            <li class="header__sm-menu-link">
              <a href="{{ route('home') }}"> Home </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('home') }}#about"> About </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('home') }}#projects"> Projects </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="{{ route('home') }}#contact"> Contact </a>
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
            </h2>            <div class="main-footer__social-cont">
              <a target="_blank" rel="noreferrer" href="https://www.facebook.com/myrick.noel.clemente">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/linkedin-ico.png') }}"
                  alt="Facebook"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://github.com/Myrick24">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/github-ico.png') }}"
                  alt="GitHub"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://www.instagram.com/myrkz_/">
                <img
                  class="main-footer__icon main-footer__icon--mr-none"
                  src="{{ asset('assets/png/insta-ico.png') }}"
                  alt="Instagram"
                />
              </a>
            </div>
          </div>
          <div class="main-footer__row main-footer__row-2">
            <h4 class="heading heading-sm text-lt">Myrick</h4>
            <p class="main-footer__short-desc">
               I'm Myrick Noel B. Clemente, a passionate BSIT student s <strong>killed</strong> in web and mobile development, driven by innovation and continuous learning.
            </p>
          </div>
        </div>

        <div class="main-footer__lower">
          &copy; Copyright {{ date('Y') }}. Made with Laravel.
        </div>
      </div>
    </footer>

    <script src="{{ asset('js/index.js') }}"></script>
    @yield('extra-js')
  </body>
</html>