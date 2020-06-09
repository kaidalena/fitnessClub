<div class="admin-block" id="admin-block">
    <div class="containerLena admin" id="container">
        <div id="icon-close" onclick="closeAdminPanel()"> </div>
        <h1>Данные для редактирования</h1>
        <div id="admin-links">
            @foreach($linksOnTable as $linkName)
            <a href="#" onclick="getTable('<?php echo $linkName ?>')">ссылка на таблицу {{$linkName}}</a>
            @endforeach
        </div>

        <table id="adminTable">

        </table>
        <div id='inputs-container'>

        </div>
        <a class="admin-btn" href="">Добавить</a>
        <a class="admin-btn" href="#" id="change">Изменить</a>
    </div>
</div>

<input id="admin-btn-edit" type="button" value="Редактор" onclick="openAdminPanel()">
