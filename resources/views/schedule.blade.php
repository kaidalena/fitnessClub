<?php use Illuminate\Support\Facades\Auth; ?>
@php($noDropdown = true)
@extends ('layouts.default')

@section('title-block')
  Расписание
@endsection

@section('scripts')
<script src="js/scheduleTabs.js"></script>
@endsection

@section('content')

@if(Auth::check() && Auth::user()->isAdmin())
    @include('inc.admin')
@endif

  <!-- ##### Breadcumb Area Start ##### -->

    <script> saveDB(<?php echo json_encode($trainings); ?>)
            saveTabs(<?php echo json_encode($groups); ?>)
    </script>
    <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena tabs">
                <h2>{{ __('header')['rasp'] }}</h2>
                <p></p>
                <div class="tabsLena" id="divTabs">
                    @foreach($groups as $tab)
                    <p class="input" id=<?php echo $tab->id ?> onclick=checkTabs(this)><input type="button" value=<?php echo $tab->name ?> ></p>
                    @endforeach
                    <!-- <p class="input" id=1 onclick=checkTabs(this)><input type="button" value="силовые" ></p>
                    <p class="input" id=2 onclick=checkTabs(this)><input type="button" value="кардио" ></p>
                    <p class="input" id=3 onclick=checkTabs(this)><input type="button" value="аэробные" ></p> -->
                </div>
            </div>
        </div>
      </div>
    </div>

  <!-- Первая часть страницы "Основная информация" -->
  <div class="basic-infoLena table" >
    <div class="containerLena">
      <div class="tableSchedule">
            <!-- <table>-->

        <div class="cell entry"></div>

        <div class="cell entry">
            <div class="mark">{{ __('header')['pon'] }}</div>
        </div>
        <div class="cell entry">
            <div class="mark">{{ __('header')['vt'] }}</div>
        </div>
        <div class="cell entry">
            <div class="mark">{{ __('header')['cr'] }}</div>
        </div>
        <div class="cell entry">
            <div class="mark">{{ __('header')['chet'] }}</div>
        </div>
        <div class="cell entry">
            <div class="mark">{{ __('header')['pt'] }}</div>
        </div>
        <div class="cell entry">
            <div class="mark">{{ __('header')['sb'] }}</div>
        </div>
        <div class="cell entry">
            <div class="mark">{{ __('header')['vs'] }}</div>
        </div>


        @if(!empty($trainings))
            @foreach($trainings as $key=>$temp)

                <div class="cell entry">
                    <div class="mark"><?php echo date("H:i", strtotime($temp['time']));?></div>
                </div>
                <div class="cell {{ $temp['monday']['color'] }}">
                    <div class="info">{{ $temp['monday']['name'] }}</div>
                </div>
                <div class="cell {{ $temp['tuesday']['color'] }}">
                    <div class="info">{{ $temp['tuesday']['name'] }}</div>
                </div>
                <div class="cell {{ $temp['wednesday']['color'] }}">
                    <div class="info">{{ $temp['wednesday']['name'] }}</div>
                </div>
                <div class="cell {{ $temp['thursday']['color'] }}">
                    <div class="info">{{ $temp['thursday']['name'] }}</div>
                </div>
                <div class="cell {{ $temp['friday']['color'] }}">
                    <div class="info">{{ $temp['friday']['name'] }}</div>
                </div>
                <div class="cell {{ $temp['satuday']['color'] }}">
                    <div class="info">{{ $temp['satuday']['name'] }}</div>
                </div>
                <div class="cell {{ $temp['sunday']['color'] }}">
                    <div class="info">{{ $temp['sunday']['name'] }}</div>
                </div>

            @endforeach
        @endif


      </div>
    </div>
  </div>
  @endsection
