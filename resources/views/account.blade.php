@extends ('layouts.default')

@section('title-block')
  Личный кабинет
@endsection

@section('scripts')
<script src="js/calendar.js"></script>
@endsection

@section('content')
  <!-- ##### Breadcumb Area Start ##### -->

    <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena">
                <h2>Кайда Елена</h2>
                <ol class="itemsLena">
                    <li class="itemLena"><a href="#">Моя информация</a></li>
                    <li class="itemLena"><a href="#">Календарь</a></li>
                    <li class="itemLena"><a href="#">Мои абонименты</a></li>
                </ol>
            </div>
        </div>
      </div>  
    </div>

  <!-- Первая часть страницы "Основная информация" -->
  <div class="basic-infoLena" >
    <div class="containerLena">
        <div class="columnsLena account">
            <div class="myFoto" style="background-image: url(img/YeLs5h1hyP8.jpg);">

            </div>
            <div class="infoAboutMe">
                <div class="myData">
                    <div class="titles">
                        <h2>Возраст:</h2>
                        <h2>Вес:</h2>
                        <h2>Рост:</h2>
                    </div>
                    <div class="entry">
                        <h2 class="birthday"> 27.11.1999</h2>
                        <h2 class="weight">4 кг</h2>
                        <h2 class="height">100 см</h2>
                    </div>
                </div>
                <input type="button" class="edit" value="Редактировать">
            </div>
        </div>
    </div>
  </div>


  <div class="timetableBlock" style="background-image: url(img/bg-img/bg-11.jpg);">
      <div class="containerLena" >
        <div class="border" id="show">
          <div class="infoDate" id="infoDate">
            
          </div>
          <script>show(this)</script>
        </div>
      </div>
  </div>


    <div class="myCards">
        <div class="containerLena">

          <div class="currentCards">
            <h2>Действующие абонементы</h2>
            <div class="containerCards">

              <div class="card red">
                <h3 class="titleCards">Стандарт</h3>
                <div class="bar">
                  <div class="emptybar"></div>
                  <div class="filledbar"></div>
                </div>
                <div class="description">
                  <h4>Действителен до </h4>
                  <h4>23.05.20 </h4>
                  <h4>Количество занятий</h4>
                  <h4>5</h4>
                  <p>2200 4433 9988 1177</p>
                </div>
              </div>

              <div class="card blue">
                <h3 class="titleCards">Название карты</h3>
                <div class="bar">
                  <div class="emptybar"></div>
                  <div class="filledbar"></div>
                </div>
                <div>

                </div>
              </div>

            </div>
          </div>



          <div class="usedCards">
            <h2>Истекшие абонементы</h2>
            <div class="containerCards">

              <div class="card gray">
                <h3 class="titleCards">Gray</h3>
                <div class="bar">
                  <div class="emptybar"></div>
                  <div class="filledbar"></div>
                </div>
                <div>

                </div>
              </div>

              <div class="card gray">
                <h3 class="titleCards">Название карты</h3>
                <div class="bar">
                  <div class="emptybar"></div>
                  <div class="filledbar"></div>
                </div>
                <div>

                </div>
              </div>

            </div>
          </div>
        </div>
    </div>

    @endsection
