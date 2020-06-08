var dataTable;

function openAdminPanel(){
    $container = document.getElementById("container");
    $container.style.display = "block";
    document.getElementById("admin-block").style.background = "#5f5f5f67";
    document.getElementById("admin-btn-edit").style.display = "none";
}

function getTable(myUrl){
    // console.log(myUrl);
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: myUrl,
        success: function (data) {
            dataTable = data;
            openTable();
        },
        error: function() { 
            console.log(data);
        }
    });
}

function openTable(){
    // console.log( dataTable);
    var table = $("#adminTable");
    table.css("display", "block");

    var html = "<tr>";
    $.each( dataTable['titles'], function( i, val ) {
        html += "<th>" + val + "</th>";
    });
    html += "</tr>";

    $.each( dataTable['data'], function( i, row ) {
        html += "<tr>";
        $.each( row, function( field, val ) {
            html += "<td>" + val + "</td>";
        });
        html += "</tr>";
    });
    
    // console.log("html: " + html);
    table.append(html);
}