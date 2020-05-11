function editData(){
    var div = document.getElementById('formEditData');
    div.style.display = 'block';
    var myData = document.getElementById('infoAboutMe');
    myData.style.display = 'none';
}

function saveData(){
    var div = document.getElementById('formEditData');
    div.style.display = 'none';
    var myData = document.getElementById('infoAboutMe');
    myData.style.display = 'block';
}