function start(){
	document.getElementById('virtualMulti').addEventListener('click',virtualEvent,false);
	document.getElementById('hybrid').addEventListener('click',hybrid,false);
	document.getElementById('event').addEventListener('click',eventSoftware,false);
	document.getElementById('networking').addEventListener('click',networking,false);
	document.getElementById('marketing').addEventListener('click',marketing,false);
}
		
function virtualEvent() {
	var content = document.getElementById('vm');
	if (!content.innerHTML) {
			document.getElementById('vm').innerHTML = "<h3>Creating memorable and measurable events with event Management's virtual event platform</h3><label>Dazzle your attendees with completely branded and highly engaging virtual events that mimic the real thing, no matter where they are.</laabel>";

	} else {
			document.getElementById('vm').innerHTML = "";
	}	
}

function hybrid() {
		var content = document.getElementById('hy');
	if (!content.innerHTML) {
		document.getElementById('hy').innerHTML = "<h3>With a hybrid event platform, you can increase the value of your events</h3><label>Captivate a larger audience for your event by creating interesting experiences that keep people linked, whether they are present or not.</label>";
	}
	else {
			document.getElementById('hy').innerHTML = "";
	}
}

function eventSoftware() {
	var content = document.getElementById('ev');
	if (!content.innerHTML) {
		document.getElementById('ev').innerHTML = "<h3>Event management software for those who work more efficiently.</h3><label>Do you want to avoid breaking a sweat when planning an event? The only tool you'll ever need is our event management software. It's simple to use, simplifies logistics, and allows your team to put on memorable events.</label>";
	}
	else {
			document.getElementById('ev').innerHTML = "";
	}
}
function networking() {
	var content = document.getElementById('nw');
	if (!content.innerHTML) {
		document.getElementById('nw').innerHTML = "<h3>B2B Networking is so much more than ice-breaking games</h3><label>Prevent your guests from wandering aimlessly about the room, hoping to find someone with whom they might strike up a conversation. Try out our B2B matchmaking program and have them develop custom meeting agendas for you.</label>";
	}
	else {
			document.getElementById('nw').innerHTML = "";
	}
}
function marketing() {
	var content = document.getElementById('mp');
	if (!content.innerHTML) {
		document.getElementById('mp').innerHTML = "<h3>Gain exposure and attract high-quality attendees</h3><label> The first step in organizing an event is to plan it. The next step is to publicize it and pique people's interest in it. This is something that our event marketing tools will take care of for you.Promoting your event especially if you aren’t a marketing professional— is hard. However, if you have the correct tools, you can achieve incredible outcomes. Allow our event marketing software to assist you in promoting your event in the most effective way possible.</label>";
	}
	else {
			document.getElementById('mp').innerHTML = "";
	}
}



window.addEventListener('load',start,false);