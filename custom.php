<?php
	session_start();
	if(!(isset($_SESSION['role'])))
		include('header.php');
	else
		include('headerprof.php');
?>
<html>
<head>
	<title>Customize</title>
	<style type="text/css">
		.custom{
			background-image:url('Image/wallpaper.jpg');
			background-size: 1350px;
			background-blend-mode: overlay;
		}
		p{
			font-family: "Brush Script MT", cursive;
			font-size: 40px;
		}
		form{
			font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
			font-size: 20px;
		}
		.f{
			margin-top: -4200px;
			margin-left: 400px;
		}

		table {
    		border-collapse: collapse;
    		width: 100%;
		}

		th, td {
    		padding: 8px;
    		text-align: left;
    		
		}
</style>
</head>
<body>
<div class="custom">
<p>To Customize Your Cake:</p>
<br>
<form method="post" action="customcont.php">
	Weight of the Cake
	<select name="size">
			<option value="half">Half Kg</option>
			<option value="one">One Kg</option>
			<option value="onehalf">One and a Half Kg</option>
			<option value="two">Two Kg</option>
	</select>
	<br>
	<br>Describe the Cake<br>
	<textarea name="desc" rows="10" cols="40"></textarea><br><br>
	Contact Number
	<input type="number" name="no"><br><br>
	<span style="cursor:pointer">
	<input type="submit" name="submit" value="Proceed"></span>
</form>

	 </div>
</body>
</html>
<?php
	include('footer.php');
?>