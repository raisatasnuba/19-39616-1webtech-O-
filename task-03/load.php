<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylist.css">
	
	<title></title>
</head>
<body>
	<div>
		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Gender</th>
				<th>Date of Birth</th>
			</tr>
			<?php
			$data=file_get_contents('data.json');
			$data=json_decode($data,true);
			foreach ($data as  $value) {
				echo '<tr>
				<td>'.$value["name"].'</td>
				<td>'.$value["email"].'</td>
				<td>'.$value["username"].'</td>
				<td>'.$value["password"].'</td>
				<td>'.$value["gender"].'</td>
				<td>'.$value["date"].'</td>

				</tr>';

			}?>
		</table>
		
	</div>

</body>
</html>