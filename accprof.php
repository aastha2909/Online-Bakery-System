<?php
session_start();
error_reporting(0);
if(!(isset($_SESSION['role'])))
	header('location:failed.php');
include('accheader.php');
mysql_connect('localhost','root','');
mysql_select_db('Project');
$id= $_SESSION['role'];

if(isset($_POST['edit']))
{
	$a1=$_POST['fname'];
	$a2=$_POST['lname'];
	$a3=$_POST['dob'];
	$a4=$_POST['gen'];
	$image=$_FILES['prof']['name'];
	$target= "Image/".basename($image);
	$a5=$_POST['mobno'];
	$a6=$_POST['addr'];
	$str3="update Profile set First_Name='$a1', Last_Name='$a2', Dob='$a3', Gender='$a4', Prof_Photo='$target', Mobile_No='$a5', Address='$a6' where UserId like '$id'";
	mysql_query($str3);
	if(move_uploaded_file($_FILES['prof']['name'], $target))
		echo "uploaded";
}



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
<div class="pr">
<?php
echo "<br><br>First Name: ".$fname."<br><br>";
echo "Last Name: ".$lname."<br><br>";
echo "Date Of Birth: ".$dob."<br><br>";
echo "Gender: ".$gen."<br><br>";
echo "Profile Photo:<br>";
echo '<img src="'.$profphoto.'" style="width:40px;height:40px">';
echo "<br><br>Mobile Number: ".$mobno."<br><br>";
echo "Email Id: ".$em."<br><br>";
echo "Address: ".$addr."<br><br>";
echo "User Id: ".$userId."<br><br>";
?>
</div>
<a href="accedit.php">Edit</a>
<?php echo "|"; ?>
<a href="delete.php">Delete</a> 

<!DOCTYPE html>
<html>
<head>
	<title>Account Profile</title>
	<style type="text/css">
		.pr
		{
			background-color: mistyrose ;
			margin-top: 55px;
		}
	</style>
</head>
<body>
</body>
</html>
<?php
	include('footer.php');
?>