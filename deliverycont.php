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
		.b{
		background-image: url('Image/bg8.png');
		background-size: 100%; 
		background-position: left top;
		background-repeat: repeat-x;
		height: 510px;
		font-family: "Playfair Display" ;
		font-size: 20px;
		margin-top: 20px;
		text-align: center;
		font-style: bold;
	}
	table{
    	border: 2px double maroon;
    	width: 100%;
	}
	th, td {
    	padding: 8px;
    	border: 2px double palevioletred;
    	text-align: left;
   	}
	</style>
</head>
<body>

<div class="b">
<?php
if(isset($_POST['s'])&&$_POST['a']!='')
{
	$addr=$_POST['a'];
	$strr=str_shuffle("123456");
	$str=substr($strr,0,1);
	echo "Your order: ";
	?>
	<table>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<?php
			$res=mysql_query("SELECT * FROM cart");
			while($row= mysql_fetch_array($res))
			{
				$name=$row[0];
				$q=$row[1];
				$price=$row[2];
			?>
			<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $q; ?></td>
			<td><?php echo $price; ?></td>
			</tr>
			<?php
			}
			?>
	</table>
	<?php
	echo "<br><br>will be delivered at $addr in ".$str."hours.";
	}
?>
</div>
</body>
</html>
<?php
	include('footer.php');
?>