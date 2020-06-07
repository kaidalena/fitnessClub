<div class="admin-block" id="admin-block">
    <div class="containerLena admin" id="container" style="display: none;">
        <h1>Данные для редактирования</h1>
        @foreach($linksOnTable as $linkName)
        <a href="#" onclick="getTable('<?php echo $linkName ?>')">ссылка на таблицу {{$linkName}}</a>
        @endforeach
        
        <table id="adminTable">
            
        </table>
        <td><a href="">Добавить</a></td>
    </div>
</div>

<input id="admin-btn-edit" type="button" value="Редактор" onclick="openAdminPanel()">
