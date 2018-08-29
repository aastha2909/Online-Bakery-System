<?php
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login First</title>
	<style type="text/css">
		#ff{
			padding-top: 400px;
			background-image: url('Image/oops.jpg');
			background-position: bottom;
			background-size: 60%;
			background-repeat: no-repeat;
			background-blend-mode: overlay;
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
	
<div id="ff">
	<br>Sorry<br><br>You need to login first
	<a href="login.php"><span style="cursor:pointer">Continue</span></a>
</div>
</body>
</html>