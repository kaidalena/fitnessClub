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
            <div class="card" id="card">
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

    <div class="modalBack" id="modal" style="display: none">
          <div class="window">
            <div class="card green">
                <h3 class="titleCards">Название карты</h3>
                <div class="bar">
                  <div class="emptybar"></div>
                  <div class="filledbar"></div>
                </div>
            </div>

            <p>
              <h2>Оформить карту?</h2>
              <a href="{{ route('cards-buy') }}"><input type="button" value="Да"> </a>
              <input type="button" id="buttonNo" value="Нет" > 
            </p>

          </div>
        </div>

        <script>
          
          window.onload = function () {
            let cards = document.getElementsByClassName("card");
            console.log(cards);

            function click(){
              console.log("click on card");
              var window = document.getElementById("modal");
              window.style.display = "flex";
            }

            for (var i=0; i<cards.length; i++){
              console.log("foreach ");
              cards[i].onclick = click;
            }
          
            var no = document.getElementById('buttonNo');
            no.addEventListener('click', close);

            function close(){
                console.log("fff");
                document.getElementById("modal").style.display = "none";
            }
        }
        </script>
        
  </div>

  @endsection