var dataTable;
let fieldsNames = [];
let inputs = {};
let getUrl
let $selectedRow
let keyTable;
let routes;
let titles = {}

function saveRoutes(array) {
    routes = array;
}

function openAdminPanel(array) {
    if (array != null) routes = JSON.parse(array);
    $("#admin-block").css("display", "flex");
    $("#admin-btn-edit").css("display", "none");
}

function closeAdminPanel() {
    $("#admin-block").css("display", "none");
    $("#admin-btn-edit").css("display", "block");
}

function getTable(myUrl, key) {
    if (key != null) keyTable = key;
    if (myUrl != null) getUrl = myUrl;

    console.log("getTable url=" + getUrl + "  key=" + keyTable);
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: getUrl,
        success: function(data) {
            dataTable = data;
            openTable();
        },
        error: function() {
            console.log(data);
        }
    });
}

function openTable() {
    // console.log( dataTable);
    $("#admin-links").css("display", "none");
    // $("#admin-btn").css("display", "block");
    var divWithTable = $("#adminTable-block");
    var table = $("#adminTable");
    table.empty();
    divWithTable.css("display", "block");

    let $trH = $('<tr>')

    $.each(dataTable['titles'], function(i, val) {
        let $tr = $('<th>');

        $tr.text(val);
        $trH.append($tr);
    });
    table.append($trH);


    let $trB = $('<tr>')
    $.each(dataTable['data'], function(i, row) {

        let $trD = $('<tr>')

        $.each(row, function(field, val) {
            let $td = $('<td>');
            if (field !== 'id') {
                $td.text(val);
                $trD.append($td);
            }
            $trD.attr(field, val)
        });

        table.append($trD);
    });

    // console.log("html: " + html);

    $('#adminTable tr').each((index, el) => {
        if (index === 0) return;
        $(el).click(setValues)
    })

    fieldsNames = Object.keys(dataTable['data'][0]);

    mountInputs();
}

function closeTable() {
    $("#admin-links").css("display", "block");
    // $("#admin-btn").css("display", "none");
    $("#adminTable-block").css("display", "none");
}

const setValues = (event) => {
    let $el = $(event.currentTarget);
    $selectedRow = $el;
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

        const $label = $('<label>', {
            for: `input-${item}`,
            text: item
        });
        const $input = $('<input>', {
            type: 'text',
            id: `input-${item}`
        });
        inputs[item] = $input

        $container.append($label);
        $container.append($input);
    })
}

const onChangeRecord = () => {
    let url = routes[keyTable]['change'];
    console.log("onChange  url=" + url);
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

const onCreateRecord = () => {
    let url = routes[keyTable]['create'];
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

const onDeleteRecord = () => {
    let url = routes[keyTable]['delete'];
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
