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
                <h1>Редактирование данных</h1>
                <label for="name"> Имя</label>
                <input type="text" name="name" class="input" placeholder="Имя" value="{{$user->name}}"><br/>
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" class="input" placeholder="Фамилия" value="{{$user->surname}}"><br/>
                <label for="birthday">Дата рождения</label>
                <input type="text" name="birthday" class="input" placeholder="Дата рождения" value=<?php echo date("d.m.Y", strtotime($user->birthday)) ?> ><br/>
                <label for="email">Email</label>
                <input type="email"  name="email" class="input" placeholder="Email" value="{{$user->email}}"><br/>
                <label for="weight">Вес</label>
                <input type="number" name="weight" class="input" placeholder="Вес" value="{{$user->weight}}"><br/>
                <label for="height">Рост</label>
                <input type="number" name="height" class="input" placeholder="Рост" value="{{$user->height}}"><br/>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" /><br/>
                <label for="userfile">Hовое фото</label>
                <input name="userfile" type="file" class="foto" /><br/>
                <input type="submit" class="submit" value="Сохранить"> 
 
            </form>
        </div>                
    </div>

    @endsection