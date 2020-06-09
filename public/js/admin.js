var dataTable;
let fieldsNames = [];
let inputs = {};
let getUrl
let $selectedRow

<<<<<<< HEAD
$(document).ready(function($) {

    $('#admin-block').click(function(e) {
		if ($(e.target).closest('#admin-block').length == 0) {
			$(this).fadeOut();
		}
	});
})


=======
>>>>>>> 9994a5350091e6671ff6ef112a84df8e0fb84494
function openAdminPanel(){
    $("#admin-block").css("display", "flex");
    $("#admin-btn-edit").css("display", "none");
}

function closeAdminPanel(){
    // $("#admin-block").css("display", "none");
    // $("#admin-btn-edit").css("display", "block");
}

function getTable(url){
    if (!getUrl) getUrl = url

    console.log($container);

    // console.log(myUrl);
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: getUrl,
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
    table.empty();
    table.css("display", "block");

    let $trH = $('<tr>')

    $.each( dataTable['titles'], function( i, val ) {
        let $tr = $('<th>');

        $tr.text(val);
        $trH.append($tr);
    });
    table.append($trH);


    let $trB = $('<tr>')
    $.each( dataTable['data'], function( i, row ) {
        let $trD = $('<tr>')

        $.each( row, function( field, val ) {
            let $td = $('<td>');
<<<<<<< HEAD

            if (field !== 'id') {
              $td.text(val);
              $trD.append($td);
            }

=======
            $td.text(val);
            $trD.append($td);
>>>>>>> 9994a5350091e6671ff6ef112a84df8e0fb84494
            $trD.attr(field, val)
        });

        table.append($trD);
    });

    // console.log("html: " + html);

        $('#adminTable tr').each((index, el) => {
          if(index === 0) return;
          $(el).click(setValues)
        })

    fieldsNames = Object.keys(dataTable['data'][0]);

    mountInputs();
<<<<<<< HEAD
=======

    $('#change').click(() => {
        let body = Object.keys(inputs).reduce((acc, el) => {
          let data = {};
          data[el] = inputs[el].val()
          return acc.concat([data])
        }, [])

      return;
      $.ajax({
          type: 'POST', //THIS NEEDS TO BE GET
          url: myUrl,
          body,
          success: function (data) {
              dataTable = data;
              openTable();
          },
          error: function() {
              console.log(data);
          }
      });
    })
>>>>>>> 9994a5350091e6671ff6ef112a84df8e0fb84494
}

const setValues = (event) => {
  let $el = $(event.currentTarget);
  $selectedRow = $el


  fieldsNames.forEach(el => {
    if (el !== 'id')
      inputs[el].val($el.attr(el))
  })
}
const mountInputs = () => {
  const $container = $('#inputs-container')
  $container.empty();

  fieldsNames.forEach(item => {
    if (item === 'id') return

    const $label = $('<label>');
    const $input = $('<input>', {type: 'text'});

    inputs[item] = $input


    $label.append($label);
    $container.append($input);
  })
}

const onChangeRecord = (url) => {
  let body = Object.keys(inputs).reduce((acc, el) => {
      acc[el] = inputs[el].val()

      return acc
    }, {})
    body['id'] = $selectedRow.attr('id');
  fetch(url, {
      method: 'POST',
      headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
      body: JSON.stringify(body)
  }).then(respons => {
    return respons.json()
  }).then(data => {
    getTable()
  });
}

const onCreateRecord = (url) => {
    let body = Object.keys(inputs).reduce((acc, el) => {
      acc[el] = inputs[el].val()

      return acc
    }, {})
  fetch(url, {
      method: 'POST',
      headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
      body: JSON.stringify(body)
  }).then(respons => {
    return respons.json()
  }).then(data => {
    getTable()
  });
}

const onDeleteRecord = (url) => {
  let body = {
    id: $selectedRow.attr('id')
  };
  fetch(url, {
      method: 'POST',
      headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
      body: JSON.stringify(body)
  }).then(respons => {
    return respons.json()
  }).then(data => {
    getTable()
  });
}
