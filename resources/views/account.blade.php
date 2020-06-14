<?php use Illuminate\Support\Facades\Auth; ?>
@php($noDropdown = true)
@extends ('layouts.default')

@section('title-block')
  Личный кабинет
@endsection

@section('scripts')
<script src="js/calendar.js"></script>
<script src="js/account.js"></script>
@endsection

@section('content')

@if(Auth::check() && Auth::user()->isAdmin())
    @include('inc.admin')
@endif

  <!-- ##### Breadcumb Area Start ##### -->

<?php
  // var_dump($user);
  // echo "<br/>";
  // var_dump($cards->card_group);
  // var_dump($cards);
  $today = date("Y-m-d H:i:s");
?>

    <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena">
                <h2>{{$user->name}} {{$user->surname}}</h2>
                <ol class="itemsLena">
                    <li class="itemLena"><a href="#t12">{{ __('header')['myinf'] }}</a></li>
                    <li class="itemLena"><a href="#t13">{{ __('header')['calendar'] }}</a></li>
                    <li class="itemLena"><a href="#t14">{{ __('header')['my_abonoment'] }}</a></li>
                </ol>
            </div>
        </div>
      </div>
    </div>


  <!-- Первая часть страницы "Основная информация" -->


  <div class="basic-infoLena" >
    <div class="containerLena">

        <div class="columnsLena account">
            <div class="myFoto" style="background-image: url(img/avatar.png);">
            </div>

            <div id="infoAboutMe" class="infoAboutMe">
                <div class="myData">
                    <div class="titles">
                        <h2 id="t12">{{ __('header')['dr'] }}</h2>
                        <h2>{{ __('header')['height'] }}</h2>
                        <h2>{{ __('header')['rost'] }}</h2>
                        <h2>Email: </h2>
                    </div>
                    <div class="entry">
                        <h2 class="birthday"> <?php echo date("m.d.Y", strtotime($user->birthday)) ?></h2>
                        <h2 class="weight"> <?php echo (empty($user->weight)) ? "не указано" : $user->weight."кг" ?> </h2>
                        <h2 class="height"> <?php echo (empty($user->height)) ? "не указано" : $user->height."см" ?> </h2>
                        <h2 class="email">{{$user->email}}</h2>
                    </div>
                </div>
                <a href="{{ route('account-edit') }}"><input type="button" class="edit" value="Редактировать"></a>
            </div>
        </div>
    </div>
  </div>


  <div class="timetableBlock" id="t13" style="background-image: url(img/bg-img/bg-11.jpg);">
      <div class="containerLena" >
        <div class="border" id="show">
          <div class="infoDate" id="infoDate">

          </div>
          <script>start(this)</script>
        </div>
      </div>
  </div>


    <div class="myCards">
        <div class="containerLena">
          <?php $i=0; $t=0 ?>
          <div class="currentCards">
            <h2>{{ __('header')['da'] }}</h2>
            <div class="containerCards">

            @foreach($cards as $card)
              @if (strtotime($card['expiry_date']) >= strtotime($today))
              @if($i%2 === 0 && $i!==0)
              </div> <div class="containerCards">
              @endif
                <div class="card {{ $card['group']->color }}" id="{{ $card['card']->id }}">
                  <h3 class="titleCards">{{ $card['card']->name }}</h3>
                  <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                  </div>
                  <div class="description">
                    <h4>{{ __('header')['dd'] }}<?php echo " ".date("m.d.y", strtotime($card['expiry_date'])); ?></h5>
                    <h4>{{ __('header')['oz'] }} {{ $card['remains'] }}</h4>
                    <p>#<?php echo sprintf("%'.09d\n", $card['id']); ?></p>
                  </div>
                </div>
                <?php $i++;?>
                @endif
            @endforeach
            </div>
          </div>



          <div class="usedCards">
            <h2>{{ __('header')['ia'] }}</h2>
            <div  id="t14" class="containerCards">

            @foreach($cards as $card)
              @if (strtotime($card['expiry_date']) < strtotime($today))
              @if($t%2 === 0 && $t!==0)
            </div> <div class="containerCards">
              @endif
                <div class="card gray" id="{{ $card['card']->id }}">
                  <h3 class="titleCards">{{ $card['card']->name }}</h3>
                  <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                  </div>
                  <div class="description">
                    <h4>{{ __('header')['istek'] }} <?php echo date("m.d.y", strtotime($card['expiry_date'])); ?></h5>
                    <div id="id"><p>#<?php echo sprintf("%'.09d\n", $card['id']); ?></p></div>
                  </div>
                </div>
                <?php $t++; ?>
                @endif
            @endforeach

            </div>
          </div>
        </div>
    </div>

    @endsection
