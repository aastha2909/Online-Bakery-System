<?php
	session_start();
	if(!(isset($_SESSION['role'])))
		include('header.php');
	else
		include('headerprof.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	*{
		box-sizing: border-box;
	}
	.h{
		margin-top: 15px;
		font-size: 50px;
		background-color: teal;
		font-family: "Playfair Display";
    	letter-spacing: 5px;
    	font-size: 40px;
		opacity:0.8;
		}
	.column {
    	float: left;
    	padding: 10px;
		}

	.left {
		width: 94%;
		}

	.right {
		width: 6%;
		background-color: lightgoldenrodyellow;
		}
	</style>
</head>
<body>
	<div class="h">Contact Us</div>
	<div class="row">
		<div class="column left">
			<h style="font-size: 30px; color: lightblue;">Lucknow</h>
			
			<h4>Address:</h4>
			<h5></h5>
			<h4>Phone Number:</h4>
			<h5></h5>
			
			<br>
			<h style="font-size: 30px; color: lightblue;">Kanpur</h>	
			
			<h4>Address:</h4>
			<h5></h5>
			<h4>Phone Number:</h4>
			<h5></h5>
			
			<br>
			<h style="font-size: 30px; color: lightblue;">Delhi</h>         
			
			<h4>Address:</h4>
			<h5></h5>
			<h4>Phone Number:</h4>
			<h5></h5>
			
		</div>

		<div class="column right">
			<a href="https://instagram.com/"><img src="Image/insta.png" height="20px" width="20px" style="size: 55px; margin-top: 80px;"></a><br>
			<a href="https://facebook.com/"><img src="Image/fb.png" height="20px" width="20px" style="size: 55px; margin-top: 100px;"></a><br>
			<a href="https://twitter.com"><img src="Image/twitter.png" height="20px" width="20px" style="size: 55px; margin-top: 120px; margin-bottom: 60px;"></a>
		</div>
	</div>

</body>
</html>
