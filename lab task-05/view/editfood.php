




<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		fieldset{
			width: 350px;
			height: 250px;
			margin: auto;
			border: 1px solid lightsteelblue;
		}
		div{
			border: 1px solid black;
			width: 450px;
			height: 350px;
			margin: auto;
			background-color:lightsteelblue;

		}
	</style>
	
	<title></title>
</head>
<body>
<?php require('../controller/editfoodcheck.php');?>
	<form method="post" action="">

		<br><br><br><br><br><br>
		
         <div>
         	<br><br>
		<fieldset>
			<legend><h2 style="color:blue;">Edit</h2></legend>
			<label>Food Code:</label>
			&nbsp;<input type="text" name="code" value="<?php echo $code; ?> "disabled><br><br>
			<label>Food Name:</label>
			<input type="text" name="name" value="<?php echo $name; ?>"><br><br>
			
			<label>Price:</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" value="<?php echo $price;?>"><br><br>
			<input type="checkbox" name="display" id="display" value="Yes" >
			<label for="display">Display</label><br><br>
			<input type="submit" name="submit" value="Edit">

		</fieldset>
	</div>
	</form>

</body>
</html>

