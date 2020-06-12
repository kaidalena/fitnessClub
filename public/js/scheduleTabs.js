var trainersDB = [];
var colors = [];

function checkTabs(elem){
    console.log(trainersDB);

    var buttons = document.getElementsByClassName('input');

    elem.className = "input checked";

    for (var i=0; i<buttons.length; i++){
        if (buttons[i].id != elem.id ) buttons[i].setAttribute("class", "input") ;
    }

    var newClass;
    if (elem.id == 0){
        returnBack();
        return;
    }else{
        newClass = colors[elem.id];
    }

    console.log("new Class=" + newClass);

    var cells = document.getElementsByClassName('cell');
    for (var i=9, q=0; i<cells.length; i++){
        for (j=0; j<7; i++, j++, q++){
            nameClassCell = trainersDB[q];
            if (nameClassCell.indexOf(newClass) < 0 ){
                cells[i].setAttribute("class", 'cell entry');
                cells[i].style = "color: rgb(192, 192, 192);"
            }else{
                cells[i].setAttribute("class", 'cell ' + newClass);
                cells[i].style = "color: black;"
            }
        }
    }
}

function saveDB(array){
    // console.log("saveDB");

    for (let i=0; i<array.length; i++) {
        // console.log(array[i]);
        for(key in array[i]) {
            if (key != "time"){
                trainersDB.push(array[i][key]['color']);
            }
          }
    }
    returnBack();
}

function returnBack(){
    var cells = document.getElementsByClassName('cell');
    for (var i=9, q=0; i<cells.length; i++){
        for (j=0; j<7; i++, j++, q++){
            cells[i].setAttribute("class", 'cell ' + trainersDB[q]);
            cells[i].style = "color: black;"
        }
    }
}

function saveTabs(array){
    for (let i=0; i<array.length; i++) {
        colors[array[i]['id']] = array[i]['color'];
    }
    // console.log(colors);
}