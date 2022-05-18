<?php
include("db.php");
if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $date = $_POST['date'];
        $city1 = $_POST['city1'];
        $city2 = $_POST['city2'];
        $bus=$_POST['bus'];

        $sql = "INSERT into buss(name,phon,email,date,frm,tu,bus) VALUES('$name','$tel','$email','$date','$city1','$city2','$bus')";

        mysqli_query($conn,$sql);

        // if(mysqli_query($conn,$sql)){
        //     header("ooo.php");
        //     echo"";
        // }
        // else{
        //     echo"error";
        // }
			header("location:payment-gateway.php");
    }
     
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/4c68aea23b.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/css/fluid.css">	
    <link rel="stylesheet" type="text/css" href="resources/Css/style.css">
	<title>Book now</title>
</head>
<body>
	<nav class="sticky-nav">
			<a href="#"><img src="resources/image/digisolve-logo.png" alt="Logo" class="logo"></a>
			<ul class="main-nav">
				<li><a href="index.html" target="_blank">Home</a></li>
				<li><a href="contact.php" target="_blank">Contact</a></li>
				<li><a href="aboutus.html" target="_blank">About</a></li>
			</ul>
		</nav>
	<section class="contact-section">
		<div class="row">
			<h2 class="contact-heading">Book now</h2>
		</div>
		<div class="row">
			<form method="post" action="book-now.php" class="contact-form">
				<div class="row">
					<div class="col span_1_of_3">
						<label for="name">Name</label>
					</div>
					<div class="col span_2_of_3">
						<input type="text" name="name" id="name" placeholder="Enter your email here" required>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="tel">Contact number</label>
					</div>
					<div class="col span_2_of_3">
						<input type="tel" name="tel" id="tel" placeholder="Enter your contact number here" pattern="[0-9]{10}" required>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="email">Email</label>
					</div>
					<div class="col span_2_of_3">
						<input type="email" name="email" id="email" placeholder="Your email" required>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="date">Date:</label>
					</div>
					<div class="col span_2_of_3">
						<input type="date" id="date" name="date" required="">
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="city">From:</label>
					</div>
					<div class="col span_2_of_3">
						<select id="city" name="city1">
          					<option class="Select-city" value="select">Select</option>
          					<option value="Delhi">Delhi</option>
          					<option value="Mumbai">Mumbai</option>
          					<option value="Kanpur">Kanpur</option>
          					<option value="Agra">Agra</option>
          					<option value="Uttrakhand">Uttrakhand</option>
        				</select>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="city">To:</label>
					</div>
					<div class="col span_2_of_3">
						<select id="city" name="city2">
          					<option class="Select-city" value="select">Select</option>
          					<option value="Mumbai">Mumbai</option>
          					<option value="Delhi">Delhi</option>
          					<option value="Kanpur">Kanpur</option>
          					<option value="Agra">Agra</option>
          					<option value="Uttrakhand">Uttrakhand</option>
        				</select>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="bus">Bus type:</label>
					</div>
					<div class="col span_2_of_3">
						<select id="bus" name="bus">
          					<option class="Select-bus" value="select">Select</option>
          					<option value="Sleeper">Sleeper</option>
          					<option value="Mini">Mini</option>
          					<option value="AC Sleeper">AC Sleeper</option>
        				</select>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="newsletter">Agree to the T&C?</label>
					</div>
					<div class="col span_2_of_3">
						<input type="checkbox" name="newsletter" id="newsletter" required="" checked>&nbsp;Yes
					</div>
				</div>
				<div>
					&nbsp;
				</div>
				<div class="submit-btn" >
					<input type="submit" name="submit" value="Proceed to payment" > 
				</div>
			</form>
		</div>
	</section>
	<footer>
		<div class="row">
			<div class="col span_1_of_2">
				<ul class="footer-nav">
					<li>
						<a href="aboutus.html" target="_blank">About us</a>
					</li>
					<li>
						<a href="contact.php" target="_blank">Contact us</a>
					</li>
					<li>
						<a href="faqs.html" target="_blank">FAQ's</a>
					</li>
					<li>
						<a href="terms_and_conditions.html" target="_blank">T&C</a>
					</li>
				</ul>
			</div>

			<div class="col span_1_of_2">
				<ul class="social-links">
					<li>
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a href="https://www.google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row copyright">
			<p>The entire babayatra.com Web site is Copyright ©2005-2021 by BABAYATRA & Associates, LLC. All Rights Reserved. The babayatra.com site may not be copied or duplicated in whole or part by any means without express prior agreement in writing or unless specifically noted on the site.</p>
		</div>
	</footer>
</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="resources/js/script.js"></script>	
	</html>

<!-- INSERT INTO `buses` (`S.No.`, `n`, `p`, `em`, `date`, `f`, `t`, `bt`) VALUES ('1', 'masao', '9784587073', 'abc@gmail.com', current_timestamp(), 'nanitaal', 'Sehjnagar', 'wedding bus'); -->