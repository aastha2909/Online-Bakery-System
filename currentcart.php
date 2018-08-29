<?php
	session_start();
	if(!(isset($_SESSION['role'])))
		header('location:failed.php');
	include('headerprof.php');
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	echo "Your Current Cart: <br><br>";
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
	<p>To continue shopping, <a href="cart.php"><span style="cursor:pointer">Click here</span></a></p>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
    	border: 2px double darkgreen;
    	width: 50%;
	}
	th, td {
    	padding: 8px;
    	border: 2px double darkgreen;
    	text-align: left;
   	}
	</style>
</head>
<body>

</body>
</html>
<?php
	include('footer.php');
?>