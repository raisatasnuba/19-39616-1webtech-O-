<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylist.css">
	
	<title></title>
</head>
<body>
	
		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Phone Number</th>
				
				<th>Password</th>
				<th>Address</th>

				<th>Gender</th>
				<th>Date of Birth</th>
			</tr>
			<?php
			$data=file_get_contents('data.json');
			$data=json_decode($data,true);
			foreach ($data as  $row) {
				echo '<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["phone"].'</td>

				<td>'.$row["password"].'</td>
				<td>'.$row["address"].'</td>

				<td>'.$row["gender"].'</td>
				<td>'.$row["date"].'</td>

				</tr>';

			}?>
		</table>
		
	

</body>
</html>