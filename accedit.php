<?php
error_reporting(0);
session_start();
if(!(isset($_SESSION['role'])))
	header('location:failed.php');
include('accheader.php');
mysql_connect('localhost','root','');
mysql_select_db('Project');
$id= $_SESSION['role'];
$str2="SELECT * FROM `profile` WHERE `UserId` LIKE '$id'";	
$res2=mysql_query($str2);

		
while($row= mysql_fetch_assoc($res2))
{
	$fname= $row['First_Name'];
	$lname= $row['Last_Name'];
	$dob= $row['Dob'];
	$gen= $row['Gender'];
	$profphoto= $row['Prof_Photo'];
	$mobno =$row['Mobile_No'];
	$em= $row['Email'];
	$addr= $row['Address'];
	$userId= $row['UserId'];
}
?>

<form method="post" action="accprof.php" enctype="multipart/form-data">
			<b>First Name: </b>
			<input type="text" value="<?php echo $fname; ?>"; name="fname"><br><br>
			<b>Last Name: </b>
			<input type="text" value="<?php echo $lname; ?>"; name="lname"><br><br>
			<b>Date Of Birth:  </b>
			<input type="date" value="<?php echo $dob; ?>"; name="dob"><br><br>
			<b>Gender:  </b>
			<input type="text" value="<?php echo $gen; ?>"; name="gen"><br><br>
			<b>Profile Photo:  </b>
			<input type="file" name="prof"><br><br>
			<b>Mobile Number:  </b>
			<input type="number" value="<?php echo $mobno; ?>"; name="mobno"><br><br>
			<b>Email Id:  </b>
			<?php echo "$em<br>"; ?><br>
			<b>Address:  </b>
			<input type="text" value="<?php echo $addr; ?>"; name="addr"><br><br>
			<b>User ID:  </b>
			<?php
			echo $userId;
			?>
			<br><br>
			<input type="submit" name="edit" value="Save Changes">
	</form>
<!DOCTYPE html>
<html>
<head>
	<title>Account Edit</title>
	<style type="text/css">
		form{
			padding-top: 90px;
		}
	</style>
</head>
<body>

</body>
</html>