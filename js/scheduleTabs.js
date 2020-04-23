
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
}
