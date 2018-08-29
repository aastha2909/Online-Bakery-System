<?php
	include('headerprof.php');
	mysql_connect('localhost','root','');
	mysql_select_db('Project');
	?>
	<div class="disp">
		<?php
		echo "Your Order: "."<br><br>";
		$total=0;
		$query="SELECT * from Cart";
		$res=mysql_query($query);
		while($row= mysql_fetch_assoc($res))
		{
			echo "NAME: ".$row['Prod_Name']."<br>";
			echo "PRICE: ".$row['Price']."<br>";
			$total=$total+$row['Price'];
			echo "<br> <br> <br>";		
		}
		echo "PAYABLE AMOUNT: ".$total."<br><br><br><br>";
		?>
		<a href="delivery.php"><span style="cursor:pointer">Click Here For Delivery Options</span></a>
		</div>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Final Cart</title>
			<style type="text/css">
				.disp{
					background-image: url('Image/bg4.jpg');
					background-repeat-y: no-repeat;
					margin-top: 20px;
					font-family: Papyrus, fantasy;
					font-size: 25px;
					font-style: bold
					color: maroon;
	}
			</style>
		</head>
		<body>
		
		</body>
		</html>
		<?php
	include('footer.php');
?>