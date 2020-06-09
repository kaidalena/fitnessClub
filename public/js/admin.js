var dataTable;
let fieldsNames = [];
let inputs = {};

function openAdminPanel(){
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

            $td.text(val);

            $trD.append($td);

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
}

const setValues = (event) => {
  let $el = $(event.currentTarget);


  fieldsNames.forEach(el => {
    inputs[el].val($el.attr(el))
  })
}

const mountInputs = () => {
  const $container = $('#inputs-container')

  console.log($container)

  fieldsNames.forEach(item => {
    const $label = $('<label>');
    const $input = $('<input>', {type: 'text'});

    inputs[item] = $input


    $label.append($label);
    $container.append($input);
  })
}
