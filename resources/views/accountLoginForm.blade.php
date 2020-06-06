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
                    <p class="input checked" id="0" onclick=checkTabs(this)><input type="button" id=0 value="ВХОД" ></p>
                    <p class="input" id=1 onclick=checkTabs(this)><input type="button" id=1 value="РЕГИСТРАЦИЯ" ></p>
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
                <label for="password">Пароль</label>
                <input type="password" name="password" class="input" placeholder="Пароль"><br/>
                
                <input type="submit" class="submit" value="Войти"> 
 
            </form>
        </div>       

        <div class="block-form" id="registration" style="display: none;">
            
            <form class="contentForm" action="{{ route('register') }}" method="post">
                @csrf
                
                <label for="name"> Имя</label>
                <input type="text" id="name" name="name" class="input" placeholder="Имя"><br/>
                <label for="surname">Фамилия</label>
                <input type="text" id="surname" name="surname" class="input" placeholder="Фамилия"><br/>
                <label for="birthday">Дата рождения</label>
                <input type="text" id="birthday" name="birthday" class="input" placeholder="Дата рождения"><br/>
                <label for="email">Email</label>
                <input type="email" id="email"  name="email" class="input" placeholder="Email"><br/>
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" class="input" placeholder="Пароль"><br/>
                <label for="twoPassword">Повтор пароля</label>
                <input type="password" id="password-confirm" name="password_confirmation" class="input" placeholder="Повтор пароля"><br/>
                
                <input type="submit" class="submit" value="Зарегестрироваться"> 
 
            </form>
        </div>                
    </div>

    @endsection