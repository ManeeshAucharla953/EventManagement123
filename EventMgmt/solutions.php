<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Management Systems</title>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src ="js/solutions.js"></script>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 20%;
  padding: 25px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
</style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                    <h1>Solutions</h1>
                   
            </div>
            <div class="row">
					<div class="column">
					<h2>Virtual Platform</h2>
						<input type = "image" src="images/Virtual_multi.jpg" id = "virtualMulti" width = "100%">
					     <p id = "vm"></p>
					   
					  </div>
					<div class="column">
						
						<h2>Hybrid Platform</h2>
						
						<input type = "image" src="images/Hybrid_platform.jpg" id = "hybrid" width = "100%">
						<p id = "hy"></p>
					 </div>
					<div class="column">
						
						<h2>Event Software</h2>
						
						<input type = "image" src="images/event_management_software.jpg" id = "event" width = "100%">
						<p id = "ev"></p>
					 </div>
					<div class="column">
						
						<h2>Networking</h2>
						
						<input type = "image" src="images/Networking.jpg" id = "networking" width = "100%">
						<p id = "nw"></p>
					 </div>
					<div class="column">
						
						<h2>Marketing platform</h2>
						
						<input type = "image" src="images/Event_management_marketing.jpg" id = "marketing" width = "100%">
						<p id = "mp"></p>
					
					</div>
					
			
           
            
            <div class="container">
                
            </div>
			
        </div>

        
        
        <?php require 'utils/footer.php'; ?>
    </div>
    </body> 	 	
</html>
