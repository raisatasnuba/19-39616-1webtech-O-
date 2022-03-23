
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
		.div{
			border: 1px solid black;
			width: 450px;
			height: 350px;
			
			background-color:lightsteelblue;

		}
	</style>
	
	<title></title>
</head>
<body>
	

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<br><br><br>
		
		<?php

require('../controller/addmenucheck.php');
?><br>


		<li><a href="search.php">Search Food</a></li><br><br>
         <div class="div">
         	<br><br>
		<fieldset>
			<legend><h2 style="color:blue;">Add Food</h2></legend>
			<label>Food Code:</label>
			&nbsp;<input type="text" name="code"><br><br>
			<label>Food Name:</label>
			<input type="text" name="name"><br><br>
			
			<label>Price:</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price"><br><br>
			<input type="checkbox" name="display" id="display" value="Yes" >
			<label for="display">Display</label><br><br>
			<input type="submit" name="submit" value="Create">

		</fieldset>
	</div>
	</form>

</body>
</html>