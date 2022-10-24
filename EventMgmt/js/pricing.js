//Created by Aucharla

//Global variable declaration


//start function for reloading page

function start() {
	// this function creates event listener for play button
document.getElementById("playButton").addEventListener("click", play, false);
}

function play() {

	var nameEntered = document.getElementById("nameTextBox").value;

	if (nameEntered) {
		document.getElementById("formResult").innerHTML = "Hi! Name entered";
	} 
	else {
		document.getElementById("formResult").innerHTML = "Please enter the name and try again";
		//document.getElementById("playButton").disabled = true;
	}


}

//event listener for page load

//window.addEventListener("load", start, false);
