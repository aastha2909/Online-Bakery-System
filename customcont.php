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
	<title>Customize</title>
	<style type="text/css">
		.xyz
		{
			background-image: url('Image/bg8.png');
			background-size: 100%; 
			background-position: left top;
			background-repeat: repeat-x;
			height: 510px;
		}
		p{
			font-family:  Georgia, Times, "Times New Roman", serif;
			font-size: 25px;
			padding-top: 20px;
			text-decoration: underline;
		}
		h4{
			font-family:  Georgia, Times, "Times New Roman", serif;
			font-size: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
<div class="xyz">
	<br>
	<?php
	if(isset($_POST['submit'])&&$_POST['no']!=0)
	{
		$no=$_POST['no'];
		?>
		<p>We will contact you at your number <?php echo $no ?> in a short while, with further details.</p>
		<p>Thank You!</p><br><br>
		<h4>To Continue Shopping
		<a href="product.php"><span style="cursor:pointer">Click Here!</span></a></h4>
		<?php
	}
	?>
</div>
</body>
</html>