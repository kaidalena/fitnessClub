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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/classy-nav.css">

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
            <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
              <div class="classynav">
                <ul>
                  <li><a href="/">Главная</a></li>
                  <li><a href="aboutUs">О нас</a>
                    <ul class="dropdown">
                      <li><a href="aboutUs">Основная информация</a></li>
                      <li><a href="#">Отзывы</a></li>
                    </ul>
                  </li>
                  <li><a href="gallery">Галерея</a>
                    <ul class="dropdown">
                      <li><a href="#">Наши тренера</a></li>
                      <li><a href="#">Фото залов</a></li>
                    </ul>
                  </li>
                  <li><a href="service">Услуги</a>
                    <ul class="dropdown">
                      <li><a href="#">Кардио тренировки</a></li>
                      <li><a href="#">Силовые тренировки</a></li>
                      <li><a href="#">Аэробные тренировки</a></li>
                      <li><a href="#">Тренажерный зал</a></li>
                    </ul>
                  </li>
                  <li><a href="schedule">Расписание</a></li>
                  <li><a href="contact">Контакты</a></li>
                </ul>

                <!-- Call Button -->
                <a href="cards" class="fitness-btn menu-btn ml-30">Клубные карты</a>
                <a href="account" class="fitness-btn menu-btn ml-30">Личный кабинет</a>

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
              <p> Мы в соцсетях : </p>
              <div class="footer_cont">
                <a href="#"><img class="img_cont" src="img\core-img\Vk.png"></a>
                <a href="#"><img class="img_cont" src="img\core-img\insta.png"></a>
                <a href="#"><img class="img_cont" src="img\core-img\telegram.png"></a>
                <a href="#"><img class="img_cont" src="img\core-img\Whatsapp.png"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


</body>
</html>
