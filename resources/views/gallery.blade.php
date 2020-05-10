@extends ('layouts.default')

@section('title-block')
  Галлерея
@endsection


@section('content')

  <!-- ##### Breadcumb Area Start ##### -->

  <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="brand">
      <div class="containerLena">
        <div class="titlesLena">
          <h2>Галерея</h2>
          <ol class="itemsLena">
            <li class="itemLena"><a href="#">Наши тренера</a></li>
            <li class="itemLena"><a href="#">Фото залов</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Первая часть страницы "Основная информация" -->
  <section class="teachers-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading">
            <h6>Fitness Gym</h6>
            <h2>Наши тренера</h2>
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Single Teachers -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-teachers-area mb-100">
            <!-- Bg Gradients -->
            <div class="teachers-bg-gradients"></div>
            <!-- Thumbnail -->
            <div class="teachers-thumbnail">
              <img src="img/team-img/t1.png" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>Мария Зосимова</h6>
              <span>Персональный тренер</span>
            </div>
          </div>
        </div>

        <!-- Single Teachers -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-teachers-area mb-100">
            <!-- Bg Gradients -->
            <div class="teachers-bg-gradients"></div>
            <!-- Thumbnail -->
            <div class="teachers-thumbnail">
              <img src="img/team-img/t2.png" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>Павел Полбицев</h6>
              <span>Персональный тренер</span>
            </div>
          </div>
        </div>

        <!-- Single Teachers -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-teachers-area mb-100">
            <!-- Bg Gradients -->
            <div class="teachers-bg-gradients"></div>
            <!-- Thumbnail -->
            <div class="teachers-thumbnail">
              <img src="img/team-img/t3.png" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>Юлия Гапочка</h6>
              <span>Фитнес тренер</span>
            </div>
          </div>
        </div>

        <!-- Single Teachers -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-teachers-area mb-100">
            <!-- Bg Gradients -->
            <div class="teachers-bg-gradients"></div>
            <!-- Thumbnail -->
            <div class="teachers-thumbnail">
              <img src="img/team-img/t4.png" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>Ринат Фатхулин</h6>
              <span>Персональный тренер</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <div class="commentsLenaR">
    <div class="containerLena">
      <div class="titleHow">
        <h2 class="titleFoto" align="center">Фото залов</h2>
      </div>
    </div>

    <!-- вывод через цикл -->
    <div class="responsLena">
      <div class="LenaBoom">
        <img src="img\bg-img\bg-14.jpg" alt="">
        <img src="img\bg-img\bg-2.jpg" alt="">
        <img src="img\bg-img\bg-10.jpg" alt="">
        <img src="img\bg-img\bg-11.jpg" alt="">
      </div>
    </div>
    <!-- end -->
  </div>



  @endsection
