var visits;
var groups;
var pole;
var monthA = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
function show(){
  // console.log("show()");
  // getVisits();
  // pole = p;
  // console.log(p);
  // if (pole.className == "notFocus"){
    // pole.className = "inFocus";
    var d = new Date;
    
    var datapicker = document.createElement('div');
    datapicker.id = "dataDiv"
    datapicker.className = "calendar"
    datapicker.style.display = "table";
    var month = document.createElement('select');
    month.id = "month";
    month.onchange = setMonth;
    for (var i = 0; i < 12; i++){
        var option = document.createElement('option');
        option.text = monthA[i];
        option.value = i;
        month.appendChild(option);
    }
    var year = document.createElement('select');
    year.id = "year";
    year.onchange = setMonth;
    temp = d.getFullYear() - 1970;
    for (var i = 0; i <= temp; i++){
        var option = document.createElement('option');
        option.text = +(i+1970);
        option.value = i+1970;
        year.appendChild(option);
    }
    var days = document.createElement('table');
    days.id = "days";
    days.className = "data";

    
    
    // createCalendar(days, 1970, 0);
    // var cancelBtn = document.createElement('input');
    // cancelBtn.type = "button";
    // cancelBtn.value = "Закрыть";
    // cancelBtn.onclick = hide;
    datapicker.appendChild(month);
    datapicker.appendChild(year);
    datapicker.appendChild(days);
    // datapicker.appendChild(cancelBtn);
    var body = document.getElementById("show");
    body.appendChild(datapicker);
    writeDate(new Date());
  // }
}

function setMonth(){
  // console.log("setMonth()");
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value;
    var elem = document.getElementById("days");
    createCalendar(elem, year, month);
}

function createCalendar(elem, year, month) {
      // console.log("createCalendar()  month=" + month);
      // console.log(month + "  " + year);
      var vis = [];
      var i=0;
      // console.log(visits);
      if (visits != null){
        // console.log("start search visuts");
        visits.forEach(element => {
          if ((new Date(element['created_at']).getMonth() == month)){
            // console.log("found "+ (new Date(element['created_at']).getDay()) );
            vis[i] = [];
            vis[i]['day'] = (new Date(element['created_at']).getDate());
            vis[i]['group'] = element['training_group'];
            i++;
          }
        });
        console.log(vis);
      }
      var mon = month;
      var d = new Date(year, mon);

      var table = "<tr><td class=\"weekday\"> Пн </td><td class=\"weekday\"> Вт </td><td class=\"weekday\"> Ср </td><td class=\"weekday\"> Чт </td><td class=\"weekday\"> Пт </td><td class=\"weekday\"> Сб </td><td class=\"weekday\"> Вс </td></tr><tr>";

      
      for (var i = 0; i < getDay(d); i++) {         //прописываем пустые клетки перед началом дат в месяце
        table += "<td></td>";
      }

      while (d.getMonth() == mon) {     //заполняем днями
        // console.log(d.getDate());
        table += "<td class='numb";
        vis.forEach(el =>{
          if (el['day'] === d.getDate()) {
            table += " trainingDay' id_group='" + el['group'];
            // console.log('found  '+ el['day']);
          }
        });
        
        table += "' onclick=getDate(this) >" + d.getDate() + "</td>";

        if (getDay(d) % 7 == 6) {     //переход на новую неделю
          table += "</tr><tr>";
        }

        d.setDate(d.getDate() + 1);   //следующий день
      }

      if (getDay(d) != 0) {           //прописываем пустые клетки в конце месяца
        for (var i = getDay(d); i < 7; i++) {
          table += "<td></td>";
        }
      }

      table += "</tr>";

      elem.innerHTML = table;
      }

function getDay(date) {     //проиндексируем дни недели по русски
  // console.log("getDay()");
    var day = date.getDay();
    if (day == 0) day = 7;
    return day - 1;
}

function getDate(tbElem){
  // console.log("getDate()");
    // tbElem.className += " selectDay";
    var day = tbElem.innerHTML;
    if (day < 10) day = "0" + day;
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value - 0 ;
    // month += 1;
    // if (month < 10) month = "0" + month;
    // var birth =   month+ "/" + day + "/" + year;
    var string = "<h1>" + monthA[month] + "</h1><h1>" + day + "</h1>";
    if (tbElem.className.indexOf("trainingDay") >=0 ){
      string += "<h3 class=\"trainingDate\">В этот день вы воспользовались услугой:</h3>" ;
      // console.log(tbElem.getAttribute('id_group'));
      var i=0;
      while (i < groups.length){
        if (groups[i]['id'] == tbElem.getAttribute('id_group')){
          string += "<h3 class='servise'>" + groups[i]['name']
          if (groups[i]['id'] > 1) string += " занятия";
          string += "</h3>";
        }
        i++;
      }
    }
    
    document.getElementById("infoDate").innerHTML = string;
    changeTD(tbElem);
}

function hide(){
  // console.log("hide()");
    pole.className = "notFocus";
    var elem = document.getElementById("dataDiv");
    document.getElementById("calendar").removeChild(elem);
}

function writeDate(day){
  // console.log("writeDate()");
  // console.log(day);
    createCalendar(document.getElementById("days"), day.getFullYear(), day.getMonth());
    document.getElementById("month").options[day.getMonth()].selected = true;
    document.getElementById("year").options[day.getFullYear()-1970].selected = true;

    var string = "<h1>" + monthA[day.getMonth()] + "</h1><h1>" + day.getDate() + "</h1>";
    document.getElementById("infoDate").innerHTML = string;

    changeTD(null, day.getDate());
  
}

function changeTD(td, day){
  // console.log("changeTD()");
  if (td !== null) td = td.innerHTML; 
  else td = day;
  console.log("td: " + td);
  var arr = document.getElementsByTagName('td');
  for (var i=0; i<arr.length; i++){
    // console.log("innerHtml "+arr[i].innerHTML);
    var index = arr[i].className.indexOf("selectDay");
    if (index>=0){
      // console.log(i + " before substring  " + arr[i].className);
      arr[i].className = arr[i].className.substring(0, index);
      // console.log(i + " after substring  " + arr[i].className);
    }
    if (arr[i].innerHTML == td){
      // console.log(arr[i].className);
      var icls = arr[i].className;
      arr[i].className = icls.concat(" selectDay");
      // console.log("concat  " + arr[i].className);
    }
  }
}

function start(elem){

  fetch('/visits')
  .then(
    function(respons){
      if(respons.status !== 200){
        console.log('Looks');
        return
      }
      respons.json().then(function(data){
        // console.log(data['visits'][0]['created_at']);
        // console.log(new Date(data['visits'][0]['created_at']).getDay());
        // console.log(new Date(data['visits'][0]['created_at']).getMonth());
        // console.log(new Date(data['visits'][0]['created_at']).getFullYear());
        visits = data['visits'];
        groups = data['groups'];
        console.log(visits);
        show(elem);
      })
    }
  );
}