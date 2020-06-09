var dataTable;

$(document).ready(function($) {

    $('#admin-block').click(function(e) {
		if ($(e.target).closest('#admin-block').length == 0) {
			$(this).fadeOut();					
		}
	});
})

function openAdminPanel(){
    // $container = document.getElementById("container");
    // $container.style.display = "block";
    $("#admin-block").css("display", "flex");
    $("#admin-btn-edit").css("display", "none");
}

function closeAdminPanel(){
    $("#admin-block").css("display", "none");
    $("#admin-btn-edit").css("display", "block");
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