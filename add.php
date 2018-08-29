<?php
		mysql_connect('localhost','root','');
		mysql_select_db('Project');
		if(isset($_GET['add']))
		{
			$q=$_GET['quantity'];
			$pr=$q*$price;
			echo "$pr";
			$str="insert into Cart(Prod_Name, Quantity, Price) values('$name','$a','$pr')";
			if(mysql_query($str))
				header('location: product.php');
		}
	?>