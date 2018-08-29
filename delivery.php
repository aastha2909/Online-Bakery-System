<?php
	session_start();
	if(!(isset($_SESSION['role'])))
		header('location:failed.php');
	include('headerprof.php');
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	$id=$_SESSION['role'];
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
	<style type="text/css">
	form
		{
  	  	padding: 12px 20px;
    	box-sizing: border-box;
    	border: solid darkgreen;
    	position: center;
		}
	
		table{
    	border: 2px double darkgreen;
    	width: 100%;
	}
	th, td {
    	padding: 8px;
    	border: 2px double darkgreen;
    	text-align: left;
   	}
	
	</style>
</head>

<body>

<form method="post" action="deliverycont.php">
Please Enter The Delivery Address<br><br>
<input type="text" name="a">
<br><br>
<input type="submit" name="s" value="Submit">
</form>


</body>
</html>

<?php
	include('footer.php');
?>