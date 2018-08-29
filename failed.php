<?php
session_start();
unset($_SESSION['role']);
session_destroy();
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Failed</title>
	<style type="text/css">
		#ff{
			padding-top: 400px;
			background-image: url('Image/oops.jpg');
			background-position: bottom;
			background-size: 60%;
			background-repeat: no-repeat;
		}
		a:link {
    	color: darkblue;
		}
		a:visited {
    	color: darkblue;
		}
		a:hover {
   		 color: hotpink;
		}
		a:active {
    	color: blue;
		}
	</style>
</head>
<body>
<div id="ff">Login Failed
<p>To start again, <a href="login.php"><span style="cursor:pointer">Click Here</span></a></p></div>
</body>
</html>