 

               
    <!DOCTYPE html>
    <html>
    <head>
     <style>

#leftsidebar {
  
  width:auto;
}
@media screen and (min-width: 680px) {
  #leftsidebar {width: 400px; float: left;margin-right: 50px;margin-top: 5px;}
 
}
h2{
  text-align: center;
  color: blue;
}

</style> 
      
      
    </head>
    <body>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <h2><u>Menu</u></h2>
        
        <br>
 
         
     
           
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

$sql = "SELECT * FROM food";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $temp = $row["code"];
    $image=$row["image"];
    
       ?>
        <div style="border: 1px solid white;height: 100px;" id="leftsidebar"><table style="height: 100px;width:330px;"><tr><td><img width="70px" height="80px" src="../uploads/<?php echo $image;?>"></td>
       
        
<?php 
      
       echo' <td style="text-align:center;"><b>Food Name:</b> <a href="showfood.php?code='.$temp.'">'.$row["name"].'</a><br>
        <b>Price:</b> '.$row["price"].'
        </td></tr></table></div>';
         
    
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