
function checkTabs(elem){
    var buttons = document.getElementsByClassName('input');
    // console.log("buttons: " + buttons[0].id + " " + buttons[1].id + " " + buttons[2].id + " " + buttons[3].id);
    elem.className = "input checked";
    // console.log("elemID= " + elem.id);
    // console.log("buttons: " + buttons[0].id + " " + buttons[1].id + " " + buttons[2].id + " " + buttons[3].id);
    
    for (var i=0; i<buttons.length; i++){
        if (buttons[i].id != elem.id ) buttons[i].setAttribute("class", "input") ;
        // console.log("i=" + i + " id=" + buttons[i].getAttribute('id'));
    }

    var newClass;
    switch(elem.id){
        case "0":
            newClass = " red";
            break;
        case "1":
            newClass = " blue";
            break;
        case "2":
            newClass = " yellow";
            break;
        case "3":
            newClass = " green";
            break;
    }

    console.log("new Class=" + newClass);

    var cells = document.getElementsByClassName('cell');
    var nameClassCell;
    for (j=0; j<cells.length; j++){
    
        nameClassCell = cells[j].getAttribute("class");
        console.log("nameClassCell=" + nameClassCell);

        if (nameClassCell.indexOf('entry') < 0){
            nameClassCell = "cell " + newClass;
        }else{
            nameClassCell = "cell entry " + newClass;
        }
        
        console.log("new nameClassCell=" + nameClassCell);
        cells[j].setAttribute("class", nameClassCell) ;
    }
}
