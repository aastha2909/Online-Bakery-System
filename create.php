<?php
error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db('Project');
if(isset($_POST['submit']))
{
	$a1=$_POST['fn'];
	$a2=$_POST['ln'];
	$a3=$_POST['dob'];
	$a4=$_POST['cn'];
	$a5=$_POST['em'];
	$a6=$_POST['pw'];
	$id=$a5.$a6;
	$query="insert into Register(Email,Password)
	Values('$a5','$a6')";
	mysql_query($query);
	$query2="insert into Profile(First_Name, Last_Name, Dob, Mobile_No, Email, UserId)
	VALUES('$a1','$a2','$a3','$a4','$a5', '$id')";
	if(mysql_query($query2))
	{
		header("Location:accinterim.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<style type="text/css">
	p{
		background-color: black;
		color:silver;
		font-size: 25px;
		padding: 15px;
		}
	.def{
		padding-top: 10px;
		background-color: mistyrose;
		font-family:"Book Antiqua", Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
		color: black;
		size: 25px;
		font-style: bold;
		}
		input {
    	width: 50%;
    	padding: 12px 20px;
   		margin: 8px 0;
    	box-sizing: border-box;
		}
	</style>
</head>
<body>
	<p>Enter:</p>
	<br>
<div class="def">
<form method="post">
	First Name<br>
	<input type="text" name="fn">
	<br>
	Last Name<br>
	<input type="text" name="ln">
	<br>
	Date Of Birth<br>
	<input type="date" name="dob">
	<br>
	Contact No.<br>
	<input type="number" name="cn">
	<br>
	Email Id<br>
	<input type="text" name="em">
	<br>
	Set Password<br>
	<input type="password" name="pw">
	<br>
	<br>
	<span style="cursor:pointer">
	<input type="submit" value="Create Account!" name="submit"></span>
</form>
</div>
</body>
</html>
<?php
	include('footer.php');
?>
