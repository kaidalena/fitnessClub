<div class="admin-block" id="admin-block">
    <div class="containerLena admin" id="container">
      <div class = "icon-warp">
        <div id="icon-back" onclick="closeTable()"> </div>
          <div id="icon-close" onclick="closeAdminPanel()"> </div>
      </div>
        <h1>Данные для редактирования</h1>

        <div id="admin-links">
            @foreach($linksOnTable as $key=>$link)
            <a href="#" onclick="getTable('<?php echo $link['route'] ?>', '{{ $key }}')">
                {{ $link['name'] }}
                <div id="icon-link"></div>
            </a> <br/>
            @endforeach
        </div>

        <div id="adminTable-block">
            <table id="adminTable">
            </table>
            <div id='inputs-container'>
            </div>

            <div class="admin-btn" id="admin-btn">
                <a  href="#" id="create" onclick="onCreateRecord()">Добавить</a>
                <a href="#" id="change" onclick="onChangeRecord()">Изменить</a>
                <a href="#" id="delete" onclick="onDeleteRecord()">Удалить</a>
            </div>
        </div>

        
    </div>
</div>

<input id="admin-btn-edit" type="button" value="Редактор" onclick="openAdminPanel('{{ json_encode($routes,TRUE) }} ')">
