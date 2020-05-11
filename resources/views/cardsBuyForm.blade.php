@extends ('layouts.default')

@section('title-block')
  Оформление карты
@endsection


@section('content')

<div class="mainTitleLena" style="background-image: url(/img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena">
                <h2>Оформление абонемента</h2>
            </div>
        </div>
      </div>  
</div>

    <div class="container-form" style="background-image: url(/img/bg-img/bg-8.jpg);">
        <div class="block-form cards">

            <div class="containerCards">
                    <div class="card green">
                    <h3 class="titleCards">Стандарт</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="description">
                        
                        <h5>4 недели</h5>
                        <h5>2 занятия в неделю</h5>
                    </div>
                    </div>
            </div>

            <form class="contentForm" action="{{ route('cards-buy-post') }}" method="post">
                @csrf
                <!-- <h1>Оформление абонемента</h1> -->

                

                <label for="name"> Имя</label>
                <input type="text" name="name" class="input" placeholder="Имя"><br/>
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" class="input" placeholder="Фамилия"><br/>
                <label for="email">Email</label>
                <input type="email"  name="email" class="input" placeholder="Email"><br/>

                <input type="number"  name="numberCard" class="input" placeholder="Номер карты">
                <p> <input type="text"  name="dateCard" class="input cards" placeholder="Дата">
                <input type="number"  name="cidCard" class="input cards" placeholder="CID"></p>

                <input type="submit" class="submit" value="Сохранить"> 
 
            </form>
        </div>                
    </div>

    @endsection