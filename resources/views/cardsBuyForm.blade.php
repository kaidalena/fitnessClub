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
            <h1> {{ $group->name }} </h1>
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

            <form class="contentForm" action="{{ route('cards-buy-post') }}" method="post">
                @csrf
                <input type="hidden" name="card_id" value="{{ $_POST['card_id'] }}">
                <input type="hidden" name="user_id" value="1">

                <label for="name">{{ __('header')['name'] }} </label>
                <input type="text" name="name" class="input" placeholder="{{ __('header')['name'] }}" value="{{$user->name}}"><br/>
                <label for="surname">{{ __('header')['surname'] }}</label>
                <input type="text" name="surname" class="input" placeholder="{{ __('header')['surname'] }}" value="{{$user->surname}}"><br/>
                <label for="email">Email</label>
                <input type="email"  name="email" class="input" placeholder="Email" value="{{$user->email}}"><br/>

                <label for="numberCard" id="pay">{{ __('header')['order'] }}</label>
                <input type="number"  name="numberCard" class="input" placeholder="{{ __('header')['nk'] }}">
                <p> <input type="text"  name="dateCard" class="input cards" placeholder="{{ __('header')['data'] }}">
                <input type="number"  name="cidCard" class="input cards" placeholder="CID"></p>

                <input type="submit" class="submit" value="{{ __('header')['oform'] }}">

            </form>
        </div>
    </div>

    @endsection
