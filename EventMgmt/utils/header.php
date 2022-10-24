<header class="bgImage">

	<div class="container" id="header">
		<nav class="navi">
			<ul class="navi-list">


				<li><a href="index.php">Home</a></li>
				<li><a href="solutions.php">Solutions</a></li>
				<li><a href="pricing.php">Get Quote</a></li>
				<li><a href="registerEvent.php">Event Registration</a></li>
				<li><a href="product-features.php">Product Features</a></li>
				<li><a href="scheduledEvents.php">Scheduled Events</a></li>
				<li><a href="resources.php">Resource Center</a></li>
				<li><a href="about.php">About Us</a></li>


			</ul>
		</nav>
	</div>

		<div class="container">
			<div class="jumbotron">
				<h1>Event Management</h1>
				<p>Lets Party. Book any event with us. We organize birthday party,
					cocktail party, celebratory function, wedding or dining event.</p>
				<p id="dateAndTime">
					<script type="text/javascript">
                
                myTimer();
                setInterval(function(){ myTimer() }, 1000);
                function myTimer()
                {
                    var y = new Date();
                    var time = y.toLocaleTimeString();
                    var year = y.getFullYear();
                    var month = y.getMonth() + 1;
                    var day = y.getDate();
                    document.getElementById("dateAndTime").innerHTML = "" + day + "/" + month + "/" + year + " " + time + " (GMT + 0)";
                }

				</script>
				</p>
			</div>
	</div>
</header>