<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Management Systems</title>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "containerHeading">
                    <h1>Register Event</h1>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
      
            <div class= "containerForm">
            	 <form action="" method="POST">
            	 
            	 <!-- NAME -->
			<p>
				<label for="nameTextBox">Please Enter Your Name</label>
				<input type= "text" name="nameTextBox" id="nameTextBox" required>
			</p>
			
				<!-- PHONE NUMBER -->
			
			<p>
				<label for="phone">Enter your phone number:</label>
				<input type="tel" name="phoneTextBox" name="phone" pattern="[0-9]{10,11}" required>
			</p>
			
			<p>
				<label for="email">Enter your email:</label>

				<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="60" required>
			</p>
			     <!-- EVENT TYPE -->
			<p>
				<label for="Select">Select Event:</label> 
				<select name = "eventType" id = "eventSelect" required>
				
				
					<option value="">Select Option</option>
					<option value="Wedding">Wedding </option>
					<option value="Cocktail">Cocktail</option>
					<option value="Birthday">Birthday</option>
					<option value="Dining">Dining</option>
					<option value="Special Event">Special Event</option>
					
					
				</select>	
			</p>
			         <!-- ADDRESS  -->
			
			<p>
				<label for="addressTextBox">Please Enter Your Address</label> <br>
				<textarea name= "addressTextBox" rows="5" cols="100" required></textarea>
			</p>
			
			
			<p>
				<label for="categorySelect">Select Category:</label> <br>
				<input type="radio" id="normal" name="category" value="Standard" checked>
				<label for="normalEvent">Standard</label> 
				<br> 
				<input type="radio" id="VIP" name="category" value="VIP">
				<label for="celebrityEvent">VIP</label>
				<br>
				
			</p> 
			<p>
				<label>Number of People Attending: </label>
				<input type= "number" name= "peopleTextBox" min = "1" max= "500" required>
			</p>
				
			
			<p>Event Date:
                <input type="date" name="eventDate" id="eventDate" required>
           </p>
           
           <p>
           		
					<input type= "submit" value="Register Event" name="submitButton">
				
				
					<input type= "reset" value="Reset" name="resetButton">
			
		</p>
			 
		</form>
            </div>
			
        </div>
       
        <?php 
        
        
        if (isset($_POST["submitButton"])) {//checking for round trip
           
            include('classes/InsertEvent.php'); //including insertEvent.php file for DB operations
            
            //validations on user input
            $username = $_POST["nameTextBox"];
            if (strlen(trim($username)) > 0) {//user name validation
              $phone = $_POST["phoneTextBox"];
              if(is_numeric($phone) && strlen(trim($phone)) == 10) {//phone number validation
                  $eventType = $_POST["eventType"];
                  if (strlen(trim($eventType)) > 0) { // event type validation
                      $category = $_POST["category"];
                      if (strlen(trim($category)) > 0) { // category validation
                          $attendees = $_POST["peopleTextBox"];
                          if(is_numeric($attendees) && $attendees > 0) { //number of attendees validation
                              $email = $_POST["email"];
                              if (strlen(trim($email)) > 0) { // email validation
                                  $address = $_POST["addressTextBox"];
                                  if (strlen(trim($address)) > 0) {
                                      $eventDate = $_POST["eventDate"];
                                      $sub = substr($username, 0, 1);
                                      $sub1 = substr($eventType, 0, 3);
                                      $randomNumber = mt_rand(1,10000);
                                      
                                      $regId = $sub.$sub1.$randomNumber;
                                      
                                      $result = insertEventIntoDB($regId,$username, $phone , $email,$eventType, $address , $category,$attendees,$eventDate);
                                       
                                       if ($result == 1) {
                                           
                                           echo "<p> Hey Congratulations!!!! Your event is succesfully created</p>";
                                           echo  "<p> your Registration ID is ".$regId."</p>";
                                           
                                           echo "<p> <a href = 'scheduledEvents.php'> Click here to see Scheduled events </a> </p>";
                                       } else {
                                           echo "Event Registration Failed... Please try again..!!!".$result;
                                       }
                                  } else {
                                      echo "<p>Please enter a valid address</p>";
                                  }
                                  
                              } else {
                                  echo "<p>Please enter valid email address!</p>";
                              }
                              
                          } else {
                              echo "<p>Please enter a valid number</p>";
                          }
                          
                      } else {
                          echo "<p>Please select a category.</p>";
                      }
                      
                  } else {
                      echo "<p>Please select an event type..</p>";
                  }
                  
              }
              else {
                  echo "<p>Please enter valid 10-digit phone number.</p>";
              }

          }  
          else {
              echo "<p> Please enter valid name </p>";
          }
        }
          require 'utils/footer.php';
            
        
        ?>
    </body>
</html>
