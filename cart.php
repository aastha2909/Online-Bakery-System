<?php
	session_start();
	if(!(isset($_SESSION['role'])))
		header('location:failed1.php');
	include('headerprof.php');
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	$role=$_SESSION['role'];
	if(isset($_POST['curr']))
	{
		header('location: currentcart.php');
	}
	if(isset($_POST['add']))
	{
		$id= $_POST['id'];
		$q= $_POST['quant'];
		if($id!=0)
		{
			$current=mysql_fetch_array(mysql_query("SELECT Current FROM Profile WHERE `UserId` LIKE '$role'"));
			$curr=$current[0];
			if($curr=='cakes')
			{
				$res=mysql_query("SELECT Prod_Id, Prod_Name, Price FROM cakes WHERE `Prod_Id` LIKE '$id'");
			}
			else if($curr=='pastry')
			{
				$res=mysql_query("SELECT Prod_Id, Prod_Name, Price FROM pastry WHERE `Prod_Id` LIKE '$id'");
			}
			else if($curr=='cookies')
			{
				$res=mysql_query("SELECT Prod_Id, Prod_Name, Price FROM cookies WHERE `Prod_Id` LIKE '$id'");
			}
			else if($curr=='breads')
			{
				$res=mysql_query("SELECT Prod_Id, Prod_Name, Price FROM breads WHERE `Prod_Id` LIKE '$id'");
			}
			else if($curr=='snacks')
			{
				$res=mysql_query("SELECT Prod_Id, Prod_Name, Price FROM snacks WHERE `Prod_Id` LIKE '$id'");
			}
			$result1=mysql_fetch_array($res);
			if($result1[0]!=0)
			{
				$price=$result1[2]*$q;
				$name=$result1[1];
				$today = date("Y-m-d");
				$res3= "INSERT INTO cart(Prod_Name,Quantity, Price) VALUES('$name','$q','$price')";
				mysql_query($res3);
				mysql_query("INSERT INTO orders VALUES('$role', '$name', '$q', '$today', '$price')");
				/*mysql_query("UPDATE orders SET Prod_Name='$name', Quantity='$q', Price='$price' WHERE UserId LIKE '$role' AND Dated LIKE '$today'");*/
				header('location: currentcart.php');
			}
			else
			{
				header('location: failed2.php');
			}
		}
	}
	?>
	<div class="cart">
	<form method="post">
		<br>
		<select name="prod">
			<option value="cakes">Cakes</option>
			<option value="pastry">Pastries & Cupcakes</option>
			<option value="cookies">Cookies</option>
			<option value="breads">Breads</option>
			<option value="snacks">Snacks</option>
		</select>
		<span style="cursor:pointer"><input type="submit" name="choice" value="Choose"></span>
		<span style="cursor:pointer"><input type="submit" name="continue" value="Continue Shopping"></span>
		<span style="cursor:pointer"><input type="submit" name="delivery" value="Move to delivery options"></span>
		<span style="cursor:pointer"><input type="submit" name="curr" value="View Cart"></span>
	</form>
	</div>
	<?php
	if(isset($_POST['choice']))
	{
		$a=$_POST['prod'];
		mysql_query("UPDATE profile SET `current`='$a'");
		if($a=='cakes')
		{
			$res=mysql_query("SELECT * FROM `cakes`");
		}
		else if($a=='pastry')
		{
			$res=mysql_query("SELECT * FROM `pastry`");		
		}
		else if($a=='cookies')
		{
			$res=mysql_query("SELECT * FROM `cookies`");		
		}
		else if($a=='breads')
		{
			$res=mysql_query("SELECT * FROM `breads`");		
		}
		else if($a=='snacks')
		{
			$res=mysql_query("SELECT * FROM `snacks`");		
		}
		?>
		<br>
		<form method="post">
			<br>Product Id
			<input type="number" name="id" value="Enter Product Id">
			<br><br>Quantity
			<input type="number" name="quant">
			<span style="cursor:pointer"><input type="submit" name="add" value="Add"></span>
		</form>
		<br>
		<table>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Price</th>
			<?php
			while($row= mysql_fetch_array($res))
			{
				$id=$row['Prod_Id'];
				$name=$row['Prod_Name'];
				$price=$row['Price'];
			?>
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $price; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	<?php
}
	if(isset($_POST['continue']))
	{
		header('location: product.php');
	}

	if(isset($_POST['delivery']))
	{
		header('location: delivery.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<style type="text/css">
	.del{
		background-color: cornsilk;
	}
	input[type=text] 
	{
    	width: 50%;
    	padding: 12px 20px;
    	margin: 8px 0;
    	box-sizing: border-box;
    	border: none;
    	background-color: lightcyan;
    	color: maroon;
	}
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
</body>
</html>
