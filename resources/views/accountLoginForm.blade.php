@extends ('layouts.default')

@section('title-block')
  Авторизация
@endsection

@section('scripts')
<script src="/js/loginTabs.js"></script>
@endsection

@section('content')

<div class="mainTitleLena" style="background-image: url(/img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena tabs">
                <div class="tabsLena login" id="divTabs">
                    <p class="input checked" id="0" onclick=checkTabs(this)><input type="button" id=0 value="{{ __('header')['entry'] }}" ></p>
                    <p class="input" id=1 onclick=checkTabs(this)><input type="button" id=1 value="{{ __('header')['reg'] }}" ></p>
                </div>
            </div>
        </div>
      </div>
</div>

<div class="container-form login" style="background-image: url(/img/bg-img/bg-19.jpg);">
        <div class="block-form" id="enter">

            <form class="contentForm"  action="{{ route('login') }}" method="post">
                @csrf

                <label for="email">Email</label>
                <input type="email"  name="email" class="input" placeholder="Email"><br/>
                <label for="password">{{ __('header')['password'] }}</label>
                <input type="password" name="password" class="input" placeholder="{{ __('header')['password'] }}"><br/>

                <input type="submit" class="submit" value="{{ __('header')['e'] }}">

            </form>
        </div>

        <div class="block-form" id="registration" style="display: none;">

            <form class="contentForm" action="{{ route('register') }}" method="post">
                @csrf

                <label for="name"> Имя</label>
                <input type="text" id="name" name="name" class="input" placeholder="{{ __('header')['name']}}"><br/>
                <label for="surname">{{ __('header')['surname'] }}</label>
                <input type="text" id="surname" name="surname" class="input" placeholder="{{ __('header')['surname']}}"><br/>
                <label for="birthday">{{ __('header')['dr'] }}</label>
                <input type="text" id="birthday" name="birthday" class="input" placeholder="{{ __('header')['dr']}} "><br/>
                <label for="email">Email</label>
                <input type="email" id="email"  name="email" class="input" placeholder="Email"><br/>
                <label for="password">{{ __('header')['password'] }}</label>
                <input type="password" id="password" name="password" class="input" placeholder="{{ __('header')['password']}}"><br/>
                <label for="twoPassword">{{ __('header')['passwordd'] }}я</label>
                <input type="password" id="password-confirm" name="password_confirmation" class="input" placeholder="{{ __('header')['passwordd'] }}"><br/>

                <input type="submit" class="submit" value="{{ __('header')['register'] }}">

            </form>
        </div>
    </div>

    @endsection
