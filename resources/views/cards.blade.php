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
      <?php $i = 0; ?>
      @foreach($group as $temp)
        <h4>{{ $temp->name }}</h4>
        <div class="containerCards">
        @for(; $i<=$temp->id; $i++)
          <?php $card = $cards[$i]; ?>
          @if( $card->card_group != $temp->id ) 
            @break;
          @endif
            <div class="card" id="{{ $card->id }}" onclick="test(this)">
              <h3 class="titleCards">{{ $card->name }}</h3>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div class="description">
                <h5>Недель: {{ $card->number_of_weeks }}</h5>
                <h5>Занятий в неделю: {{ $card->number_of_training }}</h5>
              </div>
            </div>
        @endfor
        </div>
      @endforeach
      
    </div>

    <div class="modalBack" id="modal" style="display: none">
          <div class="window" id='window'>

            <p>
              <h2>Оформить карту?</h2>
              <form action="{{ route('cards_buy') }}" method="post">
                @csrf
                <!-- <input type="hidden" name="card_id" id="card_id" value=""> -->
                <input type="submit" value="Да">
                <input type="button" id="buttonNo" value="Нет" > 
              </form>
            </p>

          </div>
        </div>

        <script>
          let card;
          window.onload = function () {
            let cards = document.getElementsByClassName("card");
          
            var no = document.getElementById('buttonNo');
            no.addEventListener('click', close);

            function close(){
                document.getElementById("modal").style.display = "none";
            }
        }

        function test(elem){
          
          card = elem;
          console.log("test card id: ");
          console.log(card.id);
          var window = document.getElementById("modal");
          window.style.display = "flex";
          var parent = document.getElementById('window');
          parent.insertBefore(card, parent.firstElementChild);
          // var input = document.getElementById("card_id");
          // input.setAttribute('value', card.id);
        }

        function getCard(){
          return card;
        }
        </script>
        
  </div>

  @endsection