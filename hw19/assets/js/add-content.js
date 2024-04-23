/*** Adjust Greeting Depending On Time of Day: ***/

var today = new Date();
var hourNow = today.getHours();
var greeting;
var idTag = document.getElementById("greeting-div");

if (hourNow > 18) {
  greeting = "Good evening!";
} else if (hourNow > 12) {
  greeting = "Good afternoon!";
} else if (hourNow > 0) {
  greeting = "Good morning!";
} else {
  greeting = "Welcome!";
}

idTag.innerHTML = "<h3>" + greeting + "</h3>";
