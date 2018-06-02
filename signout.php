<?php
   include('includes/db.php');
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="css/signup.css">
</head>

<body>
<div class="main_wapr main_iframe">
<?php if(isset($_POST['signout'])){
	$s_email =  $_POST['email'];
	$s_pass = $_POST['pass'];
	date_default_timezone_set('Asia/Dhaka');
	$t_out = date('H:i:s a');
	$sel_c="select * from customers where customer_email='$s_email' AND customer_pass='$s_pass'"; 	
	$run_c=mysqli_query($con,$sel_c);
	
	$count_customer_email=mysqli_num_rows($run_c);
	
	$row_customer=mysqli_fetch_array($run_c);
	$c_id=$row_customer['customer_id'];
	$c_name=$row_customer['customer_name'];
	$c_email=$row_customer['customer_email'];
	$c_pass=$row_customer['customer_pass'];
	$c_in=$row_customer['parking_time'];
	$c_out= $t_out;
	$cost = ($c_out - $c_in) * 10;
	
	
	if($count_customer_email>=0){
	 $s_c ="insert into customers_payment_info(customer_id,customer_name,customer_email,cus_pass,time_in,time_out,cost) values('$c_id','$c_name','$c_email','$c_pass','$c_in','$c_out','$cost')";
	 $run_c = mysqli_query($con,$s_c);	
     echo "<script>alert('Congratulations!!you have logged out!!')</script>";
	 echo "<script>window.open('park.html','_self')</script>";		 
	}else{
	echo "<script>alert('You could not log out! Please try again!!')</script>";	}
}
?>
		<div class="form">
		<h2>sign out</h2>
		<form action="" method="post"  enctype="multipart/form-data">
		<p><input name="email" type="text" id="email" placeholder="email" required></p>
        <p><input name="pass" type="password" id="pass" placeholder="password" required></p>
	
		<button class="" name="signout">Sign out</button>
		</form>
	</div>







</body>
</html>
