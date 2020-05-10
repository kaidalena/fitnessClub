@extends ('layouts.default')

@section('title-block')
  Расписание
@endsection

@section('scripts')
<script src="js/scheduleTabs.js"></script>
@endsection

@section('content')

  <!-- ##### Breadcumb Area Start ##### -->

    <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
      <div class="brand">
        <div class="containerLena">
            <div class="titlesLena tabs">
                <h2>Расписание</h2>
                <p></p>
                <div class="tabsLena" id="divTabs">
                    <p class="input checked" id="0" onclick=checkTabs(this)><input type="button" id=0 value="все занятия" ></p>
                    <p class="input" id=1 onclick=checkTabs(this)><input type="button" id=1 value="силовые" ></p>
                    <p class="input" id=2 onclick=checkTabs(this)><input type="button" id=2 value="кардио" ></p>
                    <p class="input" id=3 onclick=checkTabs(this)><input type="button" id=3 value="аэробные" ></p>
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

        <div class="cell red entry"></div>

        <div class="cell entry">
            <div class="mark">Понедельник</div>
        </div>
        <div class="cell entry">
            <div class="mark">Вторник</div>
        </div>
        <div class="cell entry">
            <div class="mark">Среда</div>
        </div>
        <div class="cell entry">
            <div class="mark">Четверг</div>
        </div>
        <div class="cell entry">
            <div class="mark">Пятница</div>
        </div>
        <div class="cell entry">
            <div class="mark">Суббота</div>
        </div>

        <div class="cell entry">
            <div class="mark">9:00-11:00</div>
        </div>
        <div class="cell red">
            <div class="info">Силовая</div>
        </div>
        <div class="cell entry"></div>
        <div class="cell red">
            <div class="info">two</div>
        </div>
        <div class="cell entry"></div>
        <div class="cell red">
            <div class="info">Степ</div>
        </div>
        <div class="cell entry"></div>

        <div class="cell entry">
            <div class="mark">11:00-13:00</div>
        </div>
        <div class="cell red">
            <div class="info">two</div>
        </div>
        <div class="cell red">
            <div class="info">one</div>
        </div>
        <div class="cell entry"></div>
        <div class="cell entry"></div>
        <div class="cell entry"></div>
        <div class="cell red">
            <div class="info">Сткп</div>
        </div>

        <div class="cell entry">
            <div class="mark">13:00-15:00</div>
        </div>
        <div class="cell red">
            <div class="info">two</div>
        </div>
        <div class="cell entry"></div>
        <div class="cell red">
            <div class="info">three</div>
        </div>
        <div class="cell entry"></div>
        <div class="cell red">
            <div class="info">Силовая</div>
        </div>
        <div class="cell red">
            <div class="info">one</div>
        </div>

      </div>
    </div>
  </div>
  @endsection

