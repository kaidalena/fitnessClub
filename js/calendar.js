var pole;
var monthA = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
function show(){
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
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value;
    var elem = document.getElementById("days");
    createCalendar(elem, year, month);
}

function createCalendar(elem, year, month) {
      var mon = month;
      var d = new Date(year, mon);

      var table = "<tr><td class=\"weekday\"> Пн </td><td class=\"weekday\"> Вт </td><td class=\"weekday\"> Ср </td><td class=\"weekday\"> Чт </td><td class=\"weekday\"> Пт </td><td class=\"weekday\"> Сб </td><td class=\"weekday\"> Вс </td></tr><tr>";

      
      for (var i = 0; i < getDay(d); i++) {         //прописываем пустые клетки перед началом дат в месяце
        table += "<td></td>";
      }

      while (d.getMonth() == mon) {     //заполняем днями
        table += "<td class='numb' onclick=getDate(this) >" + d.getDate() + "</td>";

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
    var day = date.getDay();
    if (day == 0) day = 7;
    return day - 1;
}

function getDate(tbElem){
    tbElem.className = "selectDay";
    var day = tbElem.innerHTML;
    if (day < 10) day = "0" + day;
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value - 0 ;
    // month += 1;
    // if (month < 10) month = "0" + month;
    // var birth =   month+ "/" + day + "/" + year;
    var string = "<h1>" + monthA[month] + "</h1><h1>" + day + "</h1>";
    if (tbElem.className != "selectDay") string += "<h3 class=\"trainingDate\">Близжайшая планируемая тренировка:</h3>" 
    document.getElementById("infoDate").innerHTML = string;
    changeTD(tbElem, "selectDay");
}

function hide(){
    pole.className = "notFocus";
    var elem = document.getElementById("dataDiv");
    document.getElementById("calendar").removeChild(elem);
}

function writeDate(day){
  console.log(day);
    createCalendar(document.getElementById("days"), day.getFullYear(), day.getMonth());
    document.getElementById("month").options[day.getMonth()].selected = true;
    document.getElementById("year").options[day.getFullYear()-1970].selected = true;
    changeTD(null, "selectDay", day.getDate());
  
}

function changeTD(td, name, day){
  
  if (td !== null) td = td.innerHTML; 
  else td = day;
  // console.log("td: " + td.innerHTML);
  var arr = document.getElementsByTagName('td');
  for (var i=0; i<arr.length; i++){
    // console.log("innerHtml "+arr[i].innerHTML);
    if (arr[i].className != "weekday") arr[i].className = "numb";
    if (arr[i].innerHTML == td) arr[i].className = name;
  }
}