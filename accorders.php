<?php
session_start();
if(!(isset($_SESSION['role'])))
	header('location:failed.php');
include('accheader.php');
mysql_connect('localhost','root','');
mysql_select_db('Project');
$role= $_SESSION['role'];
$res=mysql_query("SELECT Prod_Name, Quantity, Dated, Price FROM orders WHERE UserId LIKE '$role'");
?>
<br><br>
<table>
	<th>Product Name</th>
	<th>Quantity</th>
	<th>Date</th>
	<th>Price</th>
	<div class="ed">
	<?php
		while($row= mysql_fetch_array($res))
		{
			$n=$row['Prod_Name'];
			$q=$row['Quantity'];
			$d=$row['Dated'];
			$p=$row['Price'];
		?>
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $q; ?></td>
			<td><?php echo $d; ?></td>
			<td><?php echo $p; ?></td>
		</tr>
		<?php
			}
		?>
	</div>
</table>
<!DOCTYPE html>
<html>
<head>
	<title>Account Orders</title>
	<style type="text/css">
		table{
    	border: 2px double darkorchid;
    	width: 100%;
	}
	th, td {
    	padding: 8px;
    	border: 2px double mediumorchid;
    	text-align: left;
   	}
   	.ed{
   		background-color: mistyrose;
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