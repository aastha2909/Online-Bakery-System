<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('Project');
mysql_query("DELETE FROM cart");
$role=$_SESSION['role'];
mysql_query("UPDATE profile SET `Current`='' WHERE `UserId` LIKE '$role'");
unset($_SESSION['role']);
session_destroy();

include('header.php');
echo "<br>You are successfully logged out.";
?>