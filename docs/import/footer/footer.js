//Date 
function renderTime(){
	var date = new Date();
	var year = date.getYear();
	if( year < 1000){
		year+=1900
	}
	var day = date.getDay();
	var month = date.getMonth();
	var daym = date.getDate();
	var dayarray = new Array("Sunday", "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var montharry = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

// Date End

// Time
var currentTime = new Date();
var h = currentTime.getHours();
var m = currentTime.getMinutes();
   if(h ==24){
	   h = 0;
   } else if (h > 12){
	   h = h - 0; 
}   if(h < 10){
	h = "0" + h;
}   if(m < 10){
	m ="0"+ m;
}
var myClock = document.getElementById("clockDisplay");
myClock.textContent = "" +dayarray[day]+ "" +daym+ "" +montharry[month] +year+ "|" +h+ ": " +m;
myClock.innertText = "" +dayarray[day]+ "" +daym+ "" +montharry[month] +year+ "|" +h+ ": " +m;

setTimeout("renderTime()"),1000;
}
renderTime();