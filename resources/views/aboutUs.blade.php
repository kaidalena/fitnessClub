<?php use Illuminate\Support\Facades\Auth; ?>
@extends ('layouts.default')

@section('title-block')
  О нас
@endsection

@section('scripts')
<script src="js/scheduleTabs.js"></script>
@endsection

@section('content')

@if(Auth::check() && Auth::user()->isAdmin())
    @include('inc.admin')
@endif

  <!-- ##### Breadcumb Area Start ##### -->

  <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="brand">
      <div class="containerLena">
        <div class="titlesLena">
            <h2>О нас</h2>
            <ol class="itemsLena">
                <li class="itemLena"><a href="#">{{ __('header')['Basic_information'] }}</a></li>
                <li class="itemLena"><a href="#">{{ __('header')['reviews'] }}</a></li>
            </ol>
        </div>
      </div>
    </div>
</div>

  <!-- Первая часть страницы "Основная информация" -->
  <div class="basic-infoLena">
    <div class="containerLena">
      <div class="columnsLena">
        <!-- Text -->
        <div class="all-textLena">
          <div class="titleLena">
            <h6>Fitness Gym</h6>
            <h2>{{ __('header')['ty'] }}</h2>
          </div>
          <div class="about-textLena">
            <p>{{ __('header')['tyy'] }} </p>
            <p>{{ __('header')['tyyy'] }}</p>
          </div>
        </div>

        <!-- Foto -->
        <div class="about-fotoLena">
          <img src="img/bg-img/bg-12.jpg" alt="">
        </div>
      </div>
    </div>
  </div>



  <div class="commentsLena" style="background-image: url(img/bg-img/bg-13.jpg);">
    <div class="containerLena">
      <div class="titleLena">
        <h2>{{ __('header')['reviews'] }}</h2>
      </div>

      <!-- вывод из БД -->
      @foreach($comments as $elem)
      <div class="responsLena">
        <div class="avatarLena">
          <img src="img/avatar.png" alt="">
        </div>
        <div class="textLena">
          <h3>{{$elem->fio}}</h3>
          <p>{{ $elem->message }}</p>
        </div>
      </div>
      @endforeach


    </div>
  </div>


  <div class="basic-infoLena">
    <div class="containerLena">
      <div class="titleLena">
        <h2>{{ __('header')['reviewsO'] }}</h2>
      </div>
      <form class="responsForm" action="{{ route('about-respons-post') }}" method="post">
        @csrf
        <h3>{{ __('header')['nf'] }}</h3>
        <br/>
        <textarea name="message" placeholder="Ваш отзыв..."></textarea>
        <br/>
        <input type="submit" value="Отправить">
      </form>
    </div>
  </div>

  @endsection
