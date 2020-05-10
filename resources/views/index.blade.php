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

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="hero-slides-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">Арнольд Шварценеггер</h2>
                <p data-animation="fadeInUp" data-delay="400ms">"Худшее, что может случиться - я стану обыкновенным. Ненавижу быть обыкновенным"</p>
                <a href="#" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Стать членом фитнес-клуба</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="hero-slides-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">Р.В. Эмерсон</h2>
                <p data-animation="fadeInUp" data-delay="400ms">"Главное богатство - это здоровье"</p>
                <a href="#" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Стать членом фитнес-клуба</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="hero-slides-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">Джон Кеннеди</h2>
                <p data-animation="fadeInUp" data-delay="400ms"> "Фитнес - не только один из ключей к здоровому телу, но и основа динамичности и творческой мысли".</p>
                <a href="#" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Стать членом фитнес-клуба</a>
              </div>
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
