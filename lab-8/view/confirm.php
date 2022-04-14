            
      <!DOCTYPE html>
    <html>
    <head>
     <style type="text/css">
        table,th,td{
 
  
  text-align: center;
  width: 400px;
 
  
}

      </style>
      
    </head>
    <body>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="hidden" name="uname">
        

        <a href="../controller/logout.php">logout</a>
       <table>
 
         
     
           
        <?php 
        session_start();
        $uname="";
         
        if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $uname=$_GET['uname'];
      
    
  }
        


$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodmenu";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM orderlist WHERE customer_name= '".$_SESSION['uname']."'"
;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

       ?>
        
        
<?php 
      
       echo' <tr><td style="text-align:center;"> '.$row["name"].'</td>
       <td>'.$row["quantity"].'</td>
        <td>'.$row["price"].'</td>
        <td>'.$row["total"].'</td>
        </tr><br>';
         
    
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
