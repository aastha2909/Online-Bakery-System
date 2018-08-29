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
	<title>Products</title>
	<style type="text/css">
		.ghi{
			background-color: cornsilk;
			background-image: url('Image/bg3.jpg');
			margin-top: 20px;
			height:530px;
			}
		h{
			font-family: "Brush Script MT", cursive;
			font-size: 40px;
		}
		.grid-container {
  			display: grid;
  			grid-template-columns: auto auto auto;
  			background-color: #2196F3;
  			padding: 10px;
  			font-family: Papyrus, fantasy;
		}
		.grid-item {
		background-color: darkorchid;
		color: lavender;
		padding: 80px;
		font-size: 40px;
		text-align: center;
		grid-gap: 30px 100px;
		}
		.grid-container .grid-item:hover:not(active){
			background-color: khaki;
			color: black;
		}
	</style>
</head>
<body>
<div class="ghi">
<h>Choose a Category from our following Offers:</h>
<br>
<br>
<div class="grid-container">
	<div class="grid-item"><a href="cakes.php"><span style="cursor:pointer">Cakes</span></a></div>
	<div class="grid-item"><a href="pastries.php"><span style="cursor:pointer">Pastries & Cupcakes</span></a></div>
	<div class="grid-item"><a href="breads.php"><span style="cursor:pointer">Breads</span></a></div>
	<div class="grid-item"><a href="cookies.php"><span style="cursor:pointer">Cookies</span></a></div>
	<div class="grid-item"><a href="snacks.php"><span style="cursor:pointer">Beverages</span></a></div>
	<div class="grid-item"><a href="custom.php"><span style="cursor:pointer">Customize</span></a></div>
</div>
</div>
</body>
</html>
<?php
	include('footer.php');
?>