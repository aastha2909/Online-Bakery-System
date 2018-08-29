<?php
error_reporting(0);
session_start();
if(!(isset($_SESSION['role'])))
		include('header.php');
	else
		include('headerprof.php');
mysql_connect('localhost','root','');
mysql_select_db('Project');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login/Sign Up</title>
	<style type="text/css">
	p{
		background-color: black;
		color:silver;
		font-size: 25px;
		padding: 10px;
		}
	.def{
		padding-top: 8px;
		background-color: mistyrose;
		font-family:"Book Antiqua", Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
		color: black;
		size: 25px;
		font-style: bold;
	}
	input {
    width: 50%;
    padding: 10px 15px;
    margin: 8px 0;
    box-sizing: border-box;
	}
	</style>
</head>
<body>
<br>
<br>
<p>If you already have an account:</p>
<div class="def">
<form method="post" action="interim.php">
<label>Email Id</label><br>
<input type="text" name="em">
<br>
<label>Password</label><br>
<input type="password" name="pw">
<br>
<br>
<button type="submit" name="login" style="vertical-align:middle"><span style="cursor:pointer">Login</span></button>
</form>
<br><br>
<p>To create a new account:</p>
<br>
<a href="create.php"><span style="cursor:pointer">Continue</span></a>
</body>
</html>