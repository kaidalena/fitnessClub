<?php use Illuminate\Support\Facades\Auth; ?>
@php($noDropdown = true)
@extends ('layouts.default')

@section('title-block')
  Оформление карты
@endsection


@section('content')

<div class="mainTitleLena" style="background-image: url(/img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena">
                <h2>{{ __('header')['oa'] }}</h2>
            </div>
        </div>
      </div>
</div>

    <div class="container-form" style="background-image: url(/img/bg-img/bg-8.jpg);">
        <div class="block-form cards">
          <div class='infoBlock'>
            <h1 style="margin-bottom: 30px;"> {{ $group->name }} </h1>
            <div class="containerCards">
                    <div class="card {{ $group->color}}">
                    <h3 class="titleCards">{{ $card->name }}</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="description">
                        <h5>{{ __('header')['nedel'] }} {{ $card->number_of_weeks }}</h5>
                        <h5>{{ __('header')['zvn'] }} {{ $card->number_of_training }}</h5>
                        <h5> {{ $card->prise }} {{ __('header')['rub'] }}</h5>
                    </div>
                    </div>
            </div>
          </div>

            <form class="contentForm" id="pay-card" action="{{ route('cards-buy-post') }}" method="post">
                @csrf
                <input type="hidden" name="card_id" value="{{ $_POST['card_id'] }}">
                <input type="hidden" name="user_id" value="{{ Auth::id()}}">

                <h2> Карта будет оформлена на: </h2>
                <h3> {{$user->surname}} {{$user->name}} </h3>
                <h3> {{$user->email}} </h3>

                <h2 style="margin-top: 60px;"> {{ __('header')['order'] }} </h2>
                <!-- <label for="numberCard" id="pay">{{ __('header')['order'] }}</label> -->
                <input type="number"  name="numberCard" class="input" placeholder="{{ __('header')['nk'] }}">
                <p> <input type="text"  name="dateCard" class="input cards" placeholder="{{ __('header')['data'] }}">
                <input type="number"  name="cidCard" class="input cards" placeholder="CID"></p>

                <div style="text-align: center;">
                  <input type="submit" class="submit" value="{{ __('header')['oform'] }}">
                </div>

            </form>
        </div>
    </div>

    @endsection
