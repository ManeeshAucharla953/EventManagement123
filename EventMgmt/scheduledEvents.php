<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Event Management Systems</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat'
    rel='stylesheet' type='text/css'>
<script src="js/pricing.js"></script>
<script src="js/search.js"></script>
<style type="text/css">
	/*css for table*/
#events {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #f2f2f2;
}

#events td, #events th {
  border: 1px solid #ddd;
  padding: 8px;
}


#events th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #7393B3;
  color: white;
}
#regEventNav{
	vertical-align: right;
    text-align:right;
     display:inline-block;
     width: 62%;
    padding-right: 12px;
}
#btnbtn-primary {
	background-color: #7393B3;	
	color: white;
	 padding: 7px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
#btnbtn-primary:hover {
  background-color: #7383b3;
}
#form-inline {
padding-left: 12px;
}
</style>
</head>
<body>
        <?php require 'utils/header.php'; ?>
        
        <div class="content">
        <div class="container">
                <h1>Scheduled Events</h1>
        </div>
        <div>
            <hr style="border-top: 1px dotted #ccc;" />
                <form method="POST" action="">
                    <div id="form-inline">
                        <label>Event Type:</label> <select class="form-control"
                            name="category"> 
                             <option value="All" selected>All</option>
                            <option value="WEDDING">Wedding</option>
                            <option value="COCKTAIL">Cocktail</option>
                            <option value="BIRTHDAY">Birthday</option>
                            <option value="DINING">Dining</option>
                            <option value="Special Event">Special Event</option>
                        </select>
                        <button id="btnbtn-primary" name="filter">Filter</button>
                        <button id="btnbtn-primary" name="reset">Reset</button>
                        <input type="text" id="myInput" onkeyup="myFunction()"
                            placeholder="Search for names.." title="Type in a name">  
                           <div id="regEventNav">
                           <label id="regEventNav">Wanna register an Event ???   </label>
                			 <a href="registerEvent.php" style="color:#7393B3">Event Registration</a> <br>
                			</div>
                    </div>
                </form>
               
                
               
                 <br /> <br />
                <table id='events' >
                	
                	<tr>
                        <th>Registration ID</th>
                         <th>Name</th>
                         <th>Phone Number</th>
                         <th>Email</th>
                         <th>Event Type</th>
                        <th>Address</th>
                        <th>Category</th>
                        <th>Attendees</th>
                        <th>Event Date</th>
                        <th>Booking Date</th>
                        
                     </tr>
                	
                    <?php include'utils/newEventFilter.php'?>  
                  </table>             
					
					
        </div>


    </div>

</body>
</html>
