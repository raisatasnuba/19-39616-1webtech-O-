<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
	<title></title>
</head>
<body>
	 <form method="post" action="">
	<?php  
require('../controller/foodcheck.php');




?>

<div style="width: 200px;height: 100px;">
	
	<tr>
		
		<td><img width="100px" src="../uploads/<?php echo $image;?>"></td><br><br>
		<td><b>Food Name:</b> <?php echo $name?></td><br><br>
		<td><b>Price:</b> <?php echo $price?></td><br><br>
		<?php echo '<td><button> <a href="showfood.php?code='.$code.'">Order Now</a></button> </td>';?>
	</tr>
		</div>
		</form>
	


</body>
</html>