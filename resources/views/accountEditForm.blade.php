@extends ('layouts.default')

@section('title-block')
  Редактирование данных
@endsection


@section('content')

<div class="mainTitleLena" style="background-image: url(/img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena">
            </div>
        </div>
      </div>
</div>

    <div class="container-form" style="background-image: url(/img/bg-img/bg-8.jpg);">
        <div class="block-form">
            <form class="contentForm" action="{{ route('account-edit-post') }}" method="post">
                @csrf
                <h1>{{ __('header')['Data_editing'] }}</h1>
                @include('inc.messages')
                <label for="name"> {{ __('header')['name'] }}</label>
                <input type="text" name="name" class="input" placeholder="Имя" value="{{$user->name}}"><br/>
                <label for="surname">{{ __('header')['surname'] }}</label>
                <input type="text" name="surname" class="input" placeholder="Фамилия" value="{{$user->surname}}"><br/>
                <label for="birthday">{{ __('header')['dr'] }}</label>
                <input type="date" name="birthday" class="input" placeholder="Дата рождения" value=<?php echo date("Y-m-d", strtotime($user->birthday)) ?> ><br/>
                <label for="email">Email</label>
                <input type="email"  name="email" class="input" placeholder="Email" value="{{$user->email}}"><br/>
                <label for="weight">{{ __('header')['height'] }}</label>
                <input type="number" name="weight" class="input" placeholder="Вес" value="{{$user->weight}}"><br/>
                <label for="height">{{ __('header')['rost'] }}</label>
                <input type="number" name="height" class="input" placeholder="Рост" value="{{$user->height}}"><br/>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" /><br/>
                <!-- <label for="userfile">{{ __('header')['newfoto'] }}</label>
                <input name="userfile" type="file" class="foto" /><br/> -->
                <input type="submit" class="submit" value="Сохранить">

            </form>
        </div>
    </div>

    @endsection
