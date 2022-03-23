
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table,th,td{
			border: 1px solid black;
			width: 420px;
			text-align: center;
			
		}
	</style>
	<title></title>
</head>
<body>
	<?php  
require('../controller/showfoodcheck.php');




?>

<table>
	<tr>
		<th>Food Code</th>
		<th>Food Name</th>
		<th>Price</th>
		
	</tr>
	<tr>
		<td><?php echo $code?></td>
		<td><a href="showfood.php?code=<?php echo $code ?>"><?php echo $name?></a></td>
		<td><?php echo $price?></td>
		
		
	</tr>

</table>


</body>
</html>