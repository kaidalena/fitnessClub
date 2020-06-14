@extends ('layouts.default')

@section('title-block')
  Контакты
@endsection

@section('content')
  <!-- ##### Breadcumb Area Start ##### -->

  <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="brand">
      <div class="containerLena">
        <div class="titlesLena">
          <h2>{{ __('header')['contact'] }}</h2>
          <ol class="itemsLena">
            <li class="itemLena"><a href="#t7">{{ __('header')['ccn'] }}</a></li>
            <li class="itemLena"><a href="#t8">{{ __('header')['gmx'] }}</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>


  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contact-title">
            <h3 id="t7">{{ __('header')['ccn'] }}</h3>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="contact-content">
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="#" method="">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="{{ __('header')['vi'] }}">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="{{ __('header')['ve'] }}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" placeholder="{{ __('header')['tema'] }}">
                </div>
                <div class="form-group">
                  <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="{{ __('header')['message'] }}"></textarea>
                </div>
                <button class="btn fitness-btn btn-2 mt-30" type="submit">{{ __('header')['send'] }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->

  <!-- ##### Google Maps ##### -->
  <div class="map-area" id="t8">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11367.344576463662!2d33.508319574103375!3d44.57992104226311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4095237a5eb43c03%3A0x457e135a8b0b6cc8!2z0KHQsNGE0LDRgNC4INGB0L_QvtGA0YI!5e0!3m2!1sru!2s!4v1587746998171!5m2!1sru!2s"
      width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

  @endsection
