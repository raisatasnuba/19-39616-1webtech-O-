<?php

$code=$name=$price=$display="";
if(isset($_POST['submit']))
{
 $code=$_POST['code'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  
  if(empty($_POST['display']))
  {
    $display="NO";
  }
  else
  {
    $display=$_POST['display'];
  }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodmenu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($code!="" and $name!="" and $price!="" and $display!="")
{
$sql = "INSERT INTO food (code,name,price,display)
VALUES ('".$code."','".$name."', '".$price."', '".$display."')";
if ($conn->query($sql) === TRUE) {
  
  echo "New record created successfully";
  echo"<a href='../view/displayfood.php'>Display</a>";
    }
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();


?>