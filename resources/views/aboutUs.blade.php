@extends ('layouts.default')

@section('title-block')
  О нас
@endsection

@section('content')
  <!-- ##### Breadcumb Area Start ##### -->

  <div class="mainTitleLena" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="brand">
      <div class="containerLena">
        <div class="titlesLena">
            <h2>О нас</h2>
            <ol class="itemsLena">
                <li class="itemLena"><a href="#">Основная информация</a></li>
                <li class="itemLena"><a href="#">Отзывы</a></li>
            </ol>
        </div>
      </div>
    </div>
</div>

  <!-- Первая часть страницы "Основная информация" -->
  <div class="basic-infoLena">
    <div class="containerLena">
      <div class="columnsLena">
        <!-- Text -->
        <div class="all-textLena">
          <div class="titleLena">
            <h6>Fitness Gym</h6>
            <h2>Почему стоит выбрать Fitness Gym?</h2>
          </div>
          <div class="about-textLena">
            <p>Fitness Gym – самая разветвленная сеть фитнес-клубов России: в сети более 90 клубов. С нами вы можете быть уверены в безопасности своего здоровья – дипломированный тренерский состав всегда к вашим услугам. Наши клиенты весьма
              разноплановые люди: профессиональные спортсмены, медийные персоны, менеджеры высшего и среднего звена, творческие личности и домохозяйки – и к каждому из них у нас индивидуальный подход, соответствующий самым требовательным запросам.
              Свыше 350 000 человек являются клиентами сети. </p>
            <p> Приобщиться к миру спорта и здорового образа жизни просто — достаточно найти ближайший к вам клуб Fitness Gym.</p>
          </div>
        </div>

        <!-- Foto -->
        <div class="about-fotoLena">
          <img src="img/bg-img/bg-12.jpg" alt="">
        </div>
      </div>
      <div class="emojiLena">
        <h2>
          Преимущества занятия фитнесом в Fitness Gym
        </h2>
        <img src="img/smile.png" alt="">
        <pre> ФИЗИЧЕСКАЯ АКТИВНОСТЬ                 ПОЛОЖИТЕЛЬНЫЕ ЭМОЦИИ                    ЗАРЯД ЭНЕРГИИ</pre>
      </div>
    </div>
  </div>



  <div class="commentsLena" style="background-image: url(img/bg-img/bg-13.jpg);">
    <div class="containerLena">
      <div class="titleLena">
        <h2>Отзывы</h2>
      </div>

      <!-- вывод через цикл -->
      <div class="responsLena">
        <div class="avatarLena">
          <img src="img/avatar.png" alt="">
        </div>
        <div class="textLena">
          <h3>Имя Фимилия</h3>
          <p> комментарий</p>
        </div>
      </div>
      <div class="responsLena">
        <div class="avatarLena">
          <img src="img/avatar.png" alt="">
        </div>
        <div class="textLena">
          <h3>Имя Фимилия</h3>
          <p> комментарий</p>
        </div>
      </div>
      <div class="responsLena">
        <div class="avatarLena">
          <img src="img/avatar.png" alt="">
        </div>
        <div class="textLena">
          <h3>Имя Фимилия</h3>
          <p> комментарий</p>
        </div>
      </div>
      <!-- end -->
    </div>
  </div>


  @endsection