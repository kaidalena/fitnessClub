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
          <h2>{{ __('header')['gallary'] }}</h2>
          <ol class="itemsLena">
            <li class="itemLena"><a href="#">{{ __('header')['trainers'] }}</a></li>
            <li class="itemLena"><a href="#">{{ __('header')['foto'] }}</a></li>
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
            <h2>{{ __('header')['trainers'] }}</h2>
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
              <img src="{{ $trainers[0]->image_path }}" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>{{ $trainers[0]->fio }}</h6>
              <span>{{ $trainers[0]->position }}</span>
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
              <img src="{{ $trainers[1]->image_path }}" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>{{ $trainers[1]->fio }}</h6>
              <span>{{ $trainers[1]->position }}</span>
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
              <img src="{{ $trainers[2]->image_path }}" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>{{ $trainers[2]->fio }}</h6>
              <span>{{ $trainers[2]->position }}</span>
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
              <img src="{{ $trainers[3]->image_path }}" alt="">
            </div>
            <!-- Meta Info -->
            <div class="teachers-info">
              <h6>{{ $trainers[3]->fio }}</h6>
              <span>{{ $trainers[3]->position }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <div class="commentsLenaRa">
    <div class="containerLena">
      <div class="titleHow">
        <h2 class="titleFoto" align="center">{{ __('header')['foto'] }}</h2>
      </div>
    </div>
  </div>

    <!-- вывод через цикл -->
    <div class="responsLena">
      <div class="LenaBoom">
        <img src="img\bg-img\bg-14.jpg" alt="" width="478px" >
        <img src="img\bg-img\bg-2.jpg" alt=""  width="475px">
        <img src="img\bg-img\bg-10.jpg" alt="" width="475px">
        <img src="img\bg-img\bg-11.jpg" alt="" width="475px">
      </div>
    </div>
    <!-- end -->



  @endsection
