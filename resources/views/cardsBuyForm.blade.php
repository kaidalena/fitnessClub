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
                <!-- <h1> {{ $group->name }} </h1> -->
                    <div class="card {{ $group->color}}">
                    <h3 class="titleCards">{{ $card->name }}</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="description">
                        <h5>Недель: {{ $card->number_of_weeks }}</h5>
                        <h5>Занятий в неделю: {{ $card->number_of_training }}</h5>
                        <h4> {{ $card->prise }} руб.</h4>
                    </div>
                    </div>
            </div>

            <form class="contentForm" action="#" method="post">
                @csrf
                

                <label for="name"> Имя</label>
                <input type="text" name="name" class="input" placeholder="Имя"><br/>
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" class="input" placeholder="Фамилия"><br/>
                <label for="email">Email</label>
                <input type="email"  name="email" class="input" placeholder="Email"><br/>

                <input type="number"  name="numberCard" class="input" placeholder="Номер карты">
                <p> <input type="text"  name="dateCard" class="input cards" placeholder="Дата">
                <input type="number"  name="cidCard" class="input cards" placeholder="CID"></p>

                <input type="submit" class="submit" value="ОформитьKs"> 
 
            </form>
        </div>                
    </div>

    @endsection