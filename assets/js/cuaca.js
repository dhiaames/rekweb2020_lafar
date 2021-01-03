
var city ="Bandung";

$.getJSON("http://api.openweathermap.org/data/2.5/weather?q="+ city +"&units=imperial&appid=df0bd897949dca41a4c381794863627f",function(data){
console.log(data);
var icon = "http://api.openweathermap.org/img/w/"+ data.weather[0].icon+".png";
var temp = Math.floor(data.main.temp);
var cuaca = data.weather[0].main;
$('.icon').attr('src',icon);
$('.cuaca').append(cuaca);
$('.temp').append(temp);
});