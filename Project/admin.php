<?php
    session_start();
    if(isset($_POST['admin_login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"buses");
        $query = "select * from admin where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email'] == $_POST['email']){
                if($row['pass'] == $_POST['pass']){
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("Location:./admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
?>

<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/4c68aea23b.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/css/fluid.css">	
    <link rel="stylesheet" type="text/css" href="resources/Css/style.css">
	<title>Book now</title>
</head>
    <nav class="sticky-nav">
			<a href="#"><img src="resources/image/digisolve-logo.png" alt="Logo" class="logo"></a>
			<ul class="main-nav">
				<li><a href="index.html" target="_blank">Home</a></li>
				<li><a href="contact.php" target="_blank">Contact</a></li>
				<li><a href="admin.php" target="_blank">Admin</a></li>
			</ul>
		</nav>
    <section class="contact-section">
		<form method="post" action="admin_dashboard.php" class="">
      <div class="row">
		  	<h2 class="contact-heading">Admin login</h2>
		  </div>
      <div
      <div class="row">
					<div class="col span_1_of_3">
						<label for="email">Email:</label>
					</div>
					<div class="col span_2_of_3">
						<input type="email" name="email" id="email" placeholder="Enter your email here" required>
					</div>
				</div> 
        <div class="row">
					<div class="col span_1_of_3">
						<label for="email">Password:</label>
					</div>
					<div class="col span_2_of_3">
						<input type="password" name="pass" id='pass' required>
					</div>
				</div>

        <div>
					&nbsp;
				</div>
				<div class="submit-btn" >
					<input type="submit" name="admin_login" value="Login" > 
				</div>

    </section>
	</form>

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
