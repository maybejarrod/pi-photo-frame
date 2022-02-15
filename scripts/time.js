//The function that shows the time on the screen

function startTime() {
    var timeadd = 'AM';
    var today = new Date();
    var h = today.getHours();
    if(h > 12){
      h = h - 12;
      timeadd = 'PM';
    }
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    var t = setTimeout(startTime, 500);

    document.getElementById('count').innerHTML = formatAMPM();
    console.log(formatAMPM());
    function formatAMPM() {
      var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? ' PM' : ' AM',
    months = ['January','February','March','April','May','June','July','August','September','October','November','December'],
    days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    if(d.getHours() > 12){
      hours = hours - 12;
    }
    return days[d.getDay()]+' '+d.getDate()+' '+months[d.getMonth()]+' | '+hours+':'+minutes+ampm;
}
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
