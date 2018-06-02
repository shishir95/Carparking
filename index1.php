<?php
session_start();
include("includes/db.php");
$nameE=$emailE=$passwordE=$countryE=$cityE=$contactE=$addressE="";
$c_name=$c_email=$c_pass=$c_country=$c_city=$c_contact=$c_address="";
?>


<!DOCTYPE HTML>
<head>
<title>Car Parking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class="wrap">

<?php
if(isset($_POST['login'])) {
	$c_email=$_POST['email'];
	$c_pass=$_POST['pass'];	
	date_default_timezone_set('Asia/Dhaka');
	$t = date("H:i:s a");
	$sel_c="select * from customers where customer_email='$c_email' AND customer_pass='$c_pass'";
	$run_c=mysqli_query($con,$sel_c);
	
	$row_customer=mysqli_fetch_array($run_c);
	$c_id=$row_customer['customer_id'];	
	$check_customer=mysqli_num_rows($run_c);
	$sql = "update customers set parking_time='$t' where customer_id= '$c_id'";
	
	
	$runtime = mysqli_query($con,$sql);
	if($check_customer==0) {
		echo "<script>alert('Your Email or Password is incorrect,please try again!!')</script>";	
		//exit();
	}
	else
	if($check_customer>0) {
		$_SESSION['customer_email']=$c_email;
		echo "<script>alert('You logged in successfully!!')</script>";	
		echo "<script>window.open('park.html','_self')</script>";	
	}
}
?>




<div class="main">
    <div class="content">
    	<div class="login_panel">
        	<h3>Login</h3>
        	<p class="note">please Sign in to your account with the form below.</p>
        	<form action="" method="post" id="member" enctype="multipart/form-data">
                	<input name="email" type="text" value="<?php echo $c_email;?>" placeholder="Username" class="field">
                    <input name="pass" type="password" value="<?php echo $c_pass;?>"  placeholder="Password" class="field">
                 
                 <!--<p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>-->
                    <div class="buttons"><div><button class="grey" name="login"><a href="park.html">Sign out</a></button></div><div>
			</form>
        </div>
		
		
<?php
if(isset($_POST['register'])) {
	$c_name=$_POST['c_name'];	
	$c_email=$_POST['c_email'];
	$c_pass=$_POST['c_pass'];
	$c_country=$_POST['c_country'];	
	$c_city=$_POST['c_city'];	
	$c_contact=$_POST['c_contact'];	
	$c_address=$_POST['c_address'];
	date_default_timezone_set('Asia/Dhaka');
	$d=date("Y/m/d");
	$t = date("H:i:s a");
	$word=str_word_count($c_address);

          if (!preg_match("/^(?=.*[A-Za-z ])[A-Za-z ]{4,}$/",$c_name)) {
			  $nameE = "Name must be at least 4 character EX-Makdia,Foujia";
		  }
		  
		  else{}
		  if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$c_pass)) {
			  $passwordE = "Password minimum 8 characters with 1 letter and 1 number";
		  }
		  else{}
          if (!filter_var($c_email, FILTER_VALIDATE_EMAIL)) {
             $emailE = "Invalid email format Ex-makdia@gmail.com";
              }
		  else{}
	      if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z \d\d\d\d]{15,}$/",$c_country)) {
			  $countryE = "Your vehicle number is wrong Ex-chattaMetro 1234,dhakaMetro 1234";
		  }
		  else{}
		   if (!preg_match("/^(?=.*[A-Za-z])[A-Za-z]{4,}$/",$c_city)) {
			  $cityE = "Your city name is wrong";
		  }
		  else{}
		   if (!preg_match("/^(?=.*\d)[\d]{10,}$/",$c_contact)) {
			  $contactE = "Your contact must be at least 10";
		  }
		  else{}
		  
		 if ($word<3) {
			   $addressE = "Address must be at least 3 words";
		  }
	     else{}

           if ((preg_match("/^(?=.*[A-Za-z ])[A-Za-z ]{4,}$/",$c_name)) && (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$c_pass))&& (filter_var($c_email, FILTER_VALIDATE_EMAIL)) && (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z \d\d\d\d]{15,}$/",$c_country)) && (preg_match("/^(?=.*[A-Za-z])[A-Za-z]{4,}$/",$c_city)) && (preg_match("/^(?=.*\d)[\d]{10,}$/",$c_contact))  && ($word>=3)) {
                   $check_customer_email="select * from customers where customer_email='$c_email'";
                   $run_customer_email=mysqli_query($con,$check_customer_email);
                   $count_customer_email=mysqli_num_rows($run_customer_email);
	                       if($count_customer_email==0) {
                                  $insert_c="insert into customers (customer_name,customer_email,customer_pass,customer_vehicle,customer_city,customer_contact,customer_address,customer_date,parking_time)
                                             values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$d','$t')";
                                  $run_c=mysqli_query($con,$insert_c);

                                  $_SESSION['customer_email']=$c_email;
                                  echo "<script>alert('Account has been created successfully!!')</script>";	
                                  echo "<script>window.open('park.html','_self')</script>";	
		
	                        }
	                       else {
	                              echo "<script>alert('Please Enter Another Email.This Email Already have Another User!!')</script>";	
                                  //echo "<script>window.open('customer_register.php','_self')</script>";		
		
	                        }
            }
    }
?>
		<div class="register_account">
    		<h3>Register New Account</h3>
    		<form action="" method="post"  enctype="multipart/form-data">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text"  name="c_name" value="<?php echo $c_name;?>" placeholder="Name">
							<span class="error"><?php echo $nameE;?></span><br>
							</div>
							
							<div>
							   <input type="text" value="<?php echo $c_email;?>" placeholder="E-Mail" name="c_email">
							   <span class="error"><?php echo $emailE;?></span><br>
							</div>
							
							<div>
								<input type="text" value="<?php echo $c_pass;?>" placeholder="Password" name="c_pass">
								<span class="error"><?php echo $passwordE;?></span><br>
							</div>
							<div>
								<input type="text" value="<?php echo $c_country;?>" placeholder="Vehicle Number" name="c_country">
								<span class="error"><?php echo $countryE;?></span><br>
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" value="<?php echo $c_city;?>" placeholder="City" name="c_city">
							<span class="error"><?php echo $cityE;?></span><br>
						</div>
		    	  <div>
		          <input type="text" value="<?php echo $c_contact;?>" placeholder="Phone" name="c_contact">
				  <span class="error"><?php echo $contactE;?></span><br>
		          </div>
				  <div>
					<input type="text" value="<?php echo $c_address;?>" placeholder="Address" name="c_address">
					<span class="error"><?php echo $addressE;?></span><br>
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey" name="register"><a href="park.html">Create Account</a></button></div></div>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
   <div class="footer">
   	  <div class="wrapper">	
			<div class="copy_right">
				<p>car parking system; All rights Reseverd </p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

