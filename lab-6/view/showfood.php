
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
	<title></title>
</head>
<body>
	 
	<?php  
require('../controller/showfoodcheck.php');




?>

<div style="width: 200px;height: 100px;">
	
	<tr>
		
		<td><img width="100px" src="../uploads/<?php echo $image;?>"></td><br><br>
		<td><b>Food Name:</b> <?php echo $name?></td><br><br>
		<td><b>Price:</b> <?php echo $price?></td>
	</tr>
		</div>
		
	


</body>
</html>