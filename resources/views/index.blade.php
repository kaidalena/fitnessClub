@extends ('layouts.default')

@section('title-block')
  Главная
@endsection

<!-- @section('scripts')
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/active.js"></script>
@endsection -->

@section('content')
  <!-- ##### Hero Area Start ##### -->
  <section class="hero-area">
    <div class="hero-slides owl-carousel">


      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="hero-slides-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">{{ $news[0]->title }}</h2>
                <p data-animation="fadeInUp" data-delay="400ms">"{{ $news[0]->message }}"</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="hero-slides-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">{{ $news[1]->title }}</h2>
                <p data-animation="fadeInUp" data-delay="400ms">"{{ $news[1]->message }}"</p>
                <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="hero-slides-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">{{ $news[2]->title }}</h2>
                <p data-animation="fadeInUp" data-delay="400ms">"{{ $news[2]->message }}"</p>
              </div>
            </div>
          </div>
        </div>
      </div>




  </section>
  <!-- ##### Hero Area End ##### -->

  <script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/active.js"></script>

  @endsection
