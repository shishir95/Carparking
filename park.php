<?php
   include('includes/db.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD parking Service</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/style.css" rel="stylesheet">	
 
  </head>
  <body>
	<header>
         <nav div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<ul class="social-network">
					<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
					<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
				</ul>
				<ul class="info">
					<li><p><i class="fa fa-phone"></i>+88 01684506504</p></li>
					<li><a href="#"><i class="fa fa-envelope"></i>bdparking@gmail.com</a></li>
				</ul>
			</div>
		</nav>
		
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>BD</span>Parking Service</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="park.html"  class="active">park a car</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
    
	<div class="jumbotron">
		<h2>want to park ?</h2>	
		<a href="index1.php"><button  class="btn-primary"> singn up</button></a><br>
	    <a href="signout.php"><button class="btn-primary">Sign out</button>
		
	</div>
	
	<!-- section works -->
    
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a href="index.html"><h1><span>BD</span>Parking Service</h1></a>
						<p>We maintain any private cars and bike with high security.</p>
						
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Latest Posts</h3>
						<ul>
							<li><a href="#">We are hiring!</a></li>
							<li><a href="#">Some active and passionate employee.</a></li>
							<li><a href="#">volunteers needed.</a></li>
							<li><a href="#">New service is comming!</a></li>
						</ul>
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading">Stay in touch</h3>
						<a href="#"><p><i class="fa fa-envelope"></i> bdparking@gmail.com</p></a>
						<p><i class="fa fa-phone"></i>  +88 01684506504</p>
						<p><i class="fa fa-home"></i> BD parking inc  |  postal code 1212 
							A block road no.2, Basundhora R/A <br>
							Dhaka Bangladesh</p>
					</div>
				</div>
			</div>
		</div>
			
		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						&copy; BD Parking. All Rights Reserved
            
					</div>
					<nav class="foot-nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Park a car</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
			</div>
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
		</div>		
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>
    
</body>
</html>