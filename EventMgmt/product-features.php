<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Event Management Systems</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
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
 <div class = "font-style">
        <?php require 'utils/header.php'; ?>
        <div class="content">
		<div class="container">
				<h1>Product Features</h1>
		</div>

		<div class="container">
				<hr>
		</div>

		<div class="container">
				<div class="row">
					<div class="column">
						<p>
						<img src="images/online_registration.jpg" alt="online_registration" style="width: 100%">
						</p>
					
							
							<h3>
							 Online registration
							 </h3>
							
							
						
						<p>
							<label>Online registration is at the core of our event management software. We designed our events platform, integrating a full-featured registration and ticketing module</label>
						</p>
					</div>
					<div class="column">
						
						<p>
						<img src="images/check-in.jpg" alt="check-in" style="width: 100%">
						</p>
						
						
							 <h3> 
							 Check-in
							  </h3>
						
						<p>
							<label>By using our check-in mobile app, you’ll finally be able to avoid long waiting lines at the entrance, also effortlessly managing the access flow.</label>
						</p>
					</div>
					<div class="column">
					<p>
						<img src="images/discount_coupons.jpg" alt="coupons" style="width: 100%">
						</p>
					
						
							<h3> 
							 Discounts and coupons
							  </h3>
							
						<p>
							<label>Discounts and coupon codes are the surest way to your audience’s heart. You can offer them as an incentive for those guests who’ll spread the word about your event.</label>
						</p>
					</div>
					<div class="column">
					<p>
						<img src="images/Attendee_tracking.jpg" alt="Attendee_tracking" style="width: 100%">
						</p>
					
						
							<h3> 
							 Attendee tracking
							 </h3>
						
							
						<p>
							<label>We’ve simplified the attendee tracking processes. Know what your guests are doing while attending your event and improve their experience.</label>
						</p>
					</div>
					<div class="column">
					
					<p>
						<img src="images/task_manager.jpg" alt="task_manager" style="width: 100%">
						</p>
					
						
							<h3> 
							 Task manager
							 </h3>
							
						<p>
							<label> enables you to gain full control over the workflow when planning and running events. Having access to a powerful task manager, you’ll be fully equipped to manage better the work of your team.</label>
						</p>
					</div>
				</div>
				
			</div>
		</div>

	</div>
        <?php require 'utils/footer.php'; ?>
     </div>
    </body>
</html>
