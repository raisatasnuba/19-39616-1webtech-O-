<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        td,table,th{
            border:1px solid black;
            width: 420px;
            margin: auto;
        }
    </style>
</head>
<body>



<?php 



if (isset($_POST['search'])) {
	
	$name=$_POST['name'];	

   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodmenu";
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $sql = "SELECT * FROM `food` WHERE name LIKE '%$name%'";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $code = $row["code"];?>
    <table>
        <tr><th>Food code</th>
            <th>Food name</th>
            <th>Price</th></tr>
        <tr>
        <td><?php echo $row["code"]?></td>
        <td><?php echo $row["name"]?></td>
        <td><?php echo $row["price"]?></td></tr></table>
        
 <?php    
  }
} else {
  echo "0 results";
}
$conn->close();

    	

    
}
?>
</body>
</html>
