 

               
    <!DOCTYPE html>
    <html>
    <head>
      <style type="text/css">
        table,th,td{
  border: 1px solid black;
  
  text-align: center;
  width: 1480px;
 
  
}
h2{
  text-align: center;
  color: royalblue;
}
      </style>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
    </head>
    <body>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <h2><u>Menu</u></h2>
        
        <br>
  <table>
         <tr>
           <th> Food Code</th>
           <th> Food Name</th>
           <th>Price</th>
           <th>Action</th>
         </tr>
         
     
           
        <?php 
        

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodmenu";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT code, name, price FROM food";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $temp = $row["code"];
    echo '<tr>
        <td>'.$row["code"].'</td>
        <td><a href="showfood.php?code='.$temp.'">'.$row["name"].'</a></td>
        <td>'.$row["price"].'</td>
        <td><a href="editfood.php?code='.$temp.'">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../controller/deletefoodcheck.php?code='.$temp.'">Delete</a></td></tr>';
         
    
  }
} else {
  echo "0 results";
}
$conn->close();
?>

       
         
  </table>            
</form>
</body>
</html>