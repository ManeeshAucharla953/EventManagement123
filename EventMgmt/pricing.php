<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Management Systems</title>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src="js/pricing.js"></script>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "containerHeading">
                    <h1>Get Your Quote</h1>
            </div>
			
            <div class="container">
            <hr>
            </div>
            
         
            <p id="formResult">
			
			</p>
            
            <div class= "containerForm">
            	 <form action="" method="POST">
            	 	 
			<p>
				<label for="nameTextBox">Please Enter Your Name</label>
				<input type= "text" name="nameTextBox" id="nameTextBox">
			</p>
			<p>
				<label for="Select">Select Event:</label> 
				<select name = "eventType" id = "eventSelect" required>
				    <option value="">Select Option</option>
					<option value="WEDDING">Wedding</option>
					<option value="COCKTAIL">Cocktail</option>					
					<option value="BIRTHDAY">Birthday </option>
					<option value="DINING">Dining</option>
					<option value="Special Event">Special Event</option>
					
					
					
				</select>	
			</p>
			<p>
				<label for="categorySelect">Select Category:</label> <br>
				<input type="radio" id="normal" name="classRadio" value="Standard" checked>
				<label for="normalEvent">Standard</label> 
				<br> 
				<input type="radio" id="VIP" name="classRadio" value="VIP">
				<label for="celebrityEvent">VIP</label>
				<br>
				
			</p> 
			<p>
				<label>Number of People Attending: </label>
				<input type= "number" name= "peopleTextBox" min = "1" max= "500" required>
			</p>
			<p>
				<input type= "submit" value="Get Quote" name="submitButton">
				<input type="reset" value = "Reset" name = "resetButton">
			</p>


			
		</form>
            </div>
			
        </div>
       
        <?php 
        
        define ("FC_MULTIPLIER", 2.5);
        
        if (isset($_POST["submitButton"])) {
            require_once ('classes/SelectEvent.php');
            
            $username = $_POST["nameTextBox"];
            $eventType = $_POST["eventType"];
            $category = $_POST["classRadio"];
            $attendees = $_POST["peopleTextBox"];
            $finalPrice = 0;
            $response = "";
            
            
            $result =  getPricePerEventFromDB($eventType,$category);
            //insertEventIntoDB($username, $eventType, $category,$attendees );
            
            
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                    $finalPrice = $row["price"];
                    if ($category == "VIP") {
                        $finalPrice *= FC_MULTIPLIER;
                    }
                    $response = " 
                             <div class='rowHome'>
                                    <br><br>
                                            HELLO $username!"."<p>The total Price for " .$attendees." attendees is: ".$finalPrice."</p>
                                     <p> <a href = 'registerEvent.php'> Click here to register event </a> </p>
                             </div>";
                    
                    echo  $response;                    
                }
            } else {
                echo 'Get price failed.<br />';
            }
            
          }        
          require 'utils/footer.php';
        ?>
        
    <script>
    
    
         var onSubmitBtn =  document.querySelector('.'
    
    </script>
        
        
    </body>
</html>
