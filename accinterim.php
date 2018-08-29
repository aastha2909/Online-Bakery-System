<?php
include('header.php');
echo "<br>Account created successfully<br>";
echo "Redirecting....";
header("refresh:3, url= login.php");
?>