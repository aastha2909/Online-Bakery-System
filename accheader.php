<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.x{
			background-image: url('Image/bg7.jpg');
			width: 100%;
			height: 190px;
		}
		ul{
			list-style-type: none;
			border-color: darkslategrey;
		   	font-family:  "Courier New", Courier, monospace;
		   	margin-top: 10px;
		   	width: 100%;
		}
		li{
			float: left;
			width: 300px;
		}
		li a{
			background-color: mediumseagreen;
			display: block;
			color: black;
			text-align: center;
			padding: 15px 10px;
		}
		li a:hover:not(.active){
			background-color: cornsilk;
			color:black;
		}
		li a.active{
			background-color: violet;
		}
		h3{
			font-family: Palatino, Palatino Linotype, Palatino LT STD, Book Antiqua, Georgia, serif;
			font-size: 35px;
			margin-left: 10px;
			text-decoration: underline;
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
<div class="x">
	<h style="font-family: Monofett, sans-serif; color: black; font-size: 100px;">WHISK
	<c style="font-family: Delius Unicase; font-size: 35px;">The Online Bakery</c></h>
	<br><br>
	<ul>
		<li><a href="accprof.php"><span style="cursor:pointer"><span style="cursor:pointer">Your Profile</span></a></li>
		<li><a href="accorders.php"><span style="cursor:pointer"><span style="cursor:pointer">Your Orders</span></a></li>
		<li><a href="about.php"><span style="cursor:pointer">Shop</span></a></li>
		<li><a href="logout.php"><span style="cursor:pointer">Log Out</span></a></li>
	</ul>
	<br><h3>Welcome To Your Account</h3>

</div>

</body>
</html>