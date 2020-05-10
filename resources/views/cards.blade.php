@extends ('layouts.default')

@section('title-block')
  Абонементы
@endsection

@section('content')
  <!-- ##### Breadcumb Area Start ##### -->

    <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena">
                <h2>Абонементы</h2>
                <ol class="itemsLena">
                    <li class="itemLena"><a href="#">группы</a></li>
                    <li class="itemLena"><a href="#">зал</a></li>
                    <li class="itemLena"><a href="#">безлимит</a></li>
                </ol>
            </div>
        </div>
      </div>  
    </div>

  <!-- Первая часть страницы "Основная информация" -->
  <div class="basic-infoLena" >
    <div class="containerLena cards">
      
        <h4>ГРУППОВЫЕ ЗАНЯТИЯ</h4>
          
          <div class="containerCards">
            <div class="card">
              <h3 class="titleCards">Название карты</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <!-- <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="stroke" cx="60" cy="60" r="50"/>
              </svg>
              </div> -->
            </div>
            <div class="card">
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
            <div class="card">
              <h3 class="titleCards">Название карты</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div>


              </div>
            </div>
            <div class="card">
              <h3 class="titleCards">Название карты</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div>


              </div>
            </div>
          </div>
          
          <h4>ТРЕНАЖЕРНЫЙ ЗАЛ</h4>

          <div class="containerCards">
            <div class="card">
              <h3 class="titleCards">Название карты</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div>


            </div>
            </div>
            <div class="card">
              <h3 class="titleCards">Название карты</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div>


            </div>
            </div>
        </div>

            <h4>БЕЗЛИМИТ</h4>
          
          <div class="containerCards green">
            <div class="card">
              <h3 class="titleCards">Название карты</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div>


            </div>
            </div>
            <div class="card">
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

  @endsection