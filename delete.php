<?php
session_start();
if(!(isset($_SESSION['role'])))
	header('location:failed.php');
mysql_connect('localhost','root','');
mysql_select_db('Project');
$id= $_SESSION['role'];
$str= mysql_query("select * from `Profile` where `UserId` like '$id'");
$res= mysql_fetch_array($str);
echo $res[6];
mysql_query("delete from Profile where UserId like '$id'");
mysql_query("delete from Register where Email like '$res[6]'");

unset($_SESSION['role']);
session_destroy();

include('headerprof.php');
echo "<br>Account successfully deleted.";

?>