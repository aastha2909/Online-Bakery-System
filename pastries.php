<?php
	session_start();
	if(!(isset($_SESSION['role'])))
		include('header.php');
	else
		include('headerprof.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pastries and Cupcakes</title>
	<style type="text/css">
		.pastry{
			background-image:url('Image/wallpaper.jpg');
			background-size: 1350px;
		}
		p{
			font-family: "Brush Script MT", cursive;
			font-size: 40px;
		}
		table {
    		border-collapse: collapse;
    		width: 100%;
		}

		th, td {
    		padding: 8px;
    		text-align: left;
    		
		}
	</style>
</head>
<body>
<div class="pastry">
<p>Available Pastries and Cupcakes:</p>
<br>
<?php
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	$query="SELECT * from Pastry";
	$res=mysql_query($query);
	?>
	<table>
		<th>Product Id</th>
		<th>Product Name</th>
		<th>Picture</th>
		<th>Price</th>
		<th>Specifications</th>
	<?php
	while($row= mysql_fetch_assoc($res))
	{
			
		$id=$row['Prod_Id'];
		$name=$row['Prod_Name'];
		$price=$row['Price'];
		$specs=$row['Specification'];
		?>
		<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><img src="<?php echo$row['Photo']; ?>" height="200px" width="290px"></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $specs; ?></td>
		</tr>
	<?php
	 }
	 ?>
	 </table>
	  To Add Items, <a href="cart.php">Go To Cart</a>
	  <br>
	</div>
</body>
</html>
<?php
	include('footer.php');
?>