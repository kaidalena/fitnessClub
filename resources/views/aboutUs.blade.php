<?php use Illuminate\Support\Facades\Auth; ?>
@php($noDropdown = true)
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
            <h2>{{ __('header')['about'] }}</h2>
            <ol class="itemsLena">
                <li class="itemLena"><a href="#t1">{{ __('header')['Basic_information'] }}</a></li>
                <li class="itemLena"><a href="#t2">{{ __('header')['reviews'] }}</a></li>
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
            <h2 id="t1">{{ __('header')['ty'] }}</h2>
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
        <h2 id="t2">{{ __('header')['reviews'] }}</h2>
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
      <div class="titleLena" id="respons">
        <h2>{{ __('header')['reviewsO'] }}</h2>
      </div>
      @if(Auth::check())
      <form class="responsForm" action="{{ route('about-respons-post') }}" method="post">
        @csrf
        <h3>{{ Auth::user()->surname }} {{ Auth::user()->name }}</h3>
        <br/>
        <textarea name="message" placeholder="{{ __('header')['feed'] }}"></textarea>
        <br/>
        <input type="submit" value="{{ __('header')['send'] }}">
      </form>
      @else
      <h3 id="not-auth">Комментирование доступно только авторизированным пользователям </h3>
      @endif
    </div>
  </div>

  @endsection
