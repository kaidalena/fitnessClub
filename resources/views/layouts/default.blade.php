<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>@yield('title-block')</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/classy-nav.css">

  <script src="js/jquery-2.2.3.js"></script>
  <script src="js/admin.js"></script>
  @yield('scripts')

</head>

<body>



  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="fitness-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="fitnessNav">

            <!-- Nav brand -->
            <a href="{{ route('index') }}" class="nav-brand"><img src="/img/core-img/logo.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- close btn -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              @php($noDropdown = $noDropdown?? false)
              <div class="classynav">
                <ul>
                  <li><a href="{{ route('index') }}">{{ __('header')['main'] }}</a></li>
                  <li><a href="{{ route('about') }}">{{ __('header')['about'] }}</a>
                    @if(!$noDropdown)
                    <ul class="dropdown">
                      <li><a href="{{ route('about') . '#t1' }}">{{ __('header')['Basic_information'] }}</a></li>
                      <li><a href="#">{{ __('header')['reviews'] }}</a></li>
                    </ul>
                    @endif
                  </li>

                  <li><a href="{{ route('gallery') }}">{{ __('header')['gallary'] }}</a>
                    @if(!$noDropdown)
                    <ul class="dropdown">
                      <li><a href="#">{{ __('header')['trainers'] }} </a></li>
                      <li><a href="#">{{ __('header')['foto'] }} </a></li>
                    </ul>
                      @endif
                  </li>
                  <li><a href="{{ route('service') }}">{{ __('header')['service'] }}</a>
                    @if(!$noDropdown)
                    <ul class="dropdown">
                      <li><a href="#">{{ __('header')['cardio'] }}</a></li>
                      <li><a href="#">{{ __('header')['sila'] }}</a></li>
                      <li><a href="#">{{ __('header')['aero'] }}</a></li>
                      <li><a href="#">{{ __('header')['tranaj'] }}</a></li>
                    </ul>
                    @endif
                  </li>
                  <li><a href="{{ route('schedule') }}">{{ __('header')['rasp'] }}</a></li>
                  <li><a href="{{ route('contact') }}">{{ __('header')['contact'] }}</a></li>
                </ul>

                <!-- Call Button -->
                <a href="{{ route('cards') }}" class="fitness-btn menu-btn ml-30">{{ __('header')['cards'] }}</a>
                <a href="{{ route('account') }}" class="fitness-btn menu-btn ml-30">{{ __('header')['cabinet'] }}</a>
                @if(Auth::check())
                <a id="menu-exit" href="{{ route('exit') }}"><img src="/img/exit.png"></a>
                @endif
              </div>
              <!-- Nav End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  @yield('content')

<!-- Copywrite Area -->
  <footer>
    <div class="bottom-footer-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer_cont">
              <p> {{ __('header')['foot'] }}</p>
              <div class="footer_cont">
                <a href="#"><img class="img_cont" src="\img\core-img\Vk.png"></a>
                <a href="#"><img class="img_cont" src="\img\core-img\insta.png"></a>
                <a href="#"><img class="img_cont" src="\img\core-img\telegram.png"></a>
                <a href="#"><img class="img_cont" src="\img\core-img\Whatsapp.png"></a>
              </div>
              <div class="footer_cont">
                <div class="">
                  <span style="color: white;">Язык</span>
                  <div class="">
                    <a class="locale" href="{{ route('locale', 'ru') }}">ru</a>
                    <span style="color: white;">|</span>
                    <a class="locale" href="{{ route('locale','en') }}">en</a>
                  </div>

                </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


</body>
</html>
