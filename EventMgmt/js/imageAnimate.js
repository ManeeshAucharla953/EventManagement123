function imageEnlarge() {
 document.getElementById('1').style.height="80%";
 document.getElementById('1').style.width="80%";
 document.getElementById('1').style.position='absolute';
 }
function imageReset() {

 document.getElementById('1').style.height="15";
 document.getElementById('1').style.width="15%";
 document.getElementById('1').style.position='absolute';
 }


//Created by Aucharla

//Global variable declaration


//start function for reloading page

function start() {
	// this function creates event listener for play button
document.getElementById("1").addEventListener("click", animate, false);
}




//event listener for page load

window.addEventListener("load", start, false);
