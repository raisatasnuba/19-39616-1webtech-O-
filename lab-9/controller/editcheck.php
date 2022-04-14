<?php 
session_start();

$name=$email=$username=$gender=$date="";
$flag=1;
if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["name"]))
    {
      $nameErr="Name is required";
      $flag=0;
    }
    else
    {

      $name=$_POST["name"];
      if(!preg_match("/^[a-zA-Z- ]*$/",$name))
      {
        $nameErr="Must start with a letter. Can contain a-z, A-Z, period, dash only";
        $name="";
        $flag=0;
        
      }
    }
    if(empty($_POST["email"]))
    {
      $emailErr="Email is required";
      $flag=0;
    }
    else
    {

      $email=$_POST["email"];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr="Invalid email format";
        $email="";
        $flag=0;
      }
    }
    if(empty($_POST["gender"]))
    {
      $genderErr="Gender is required";
      $gender="";
      $flag=0;
    }
    else
    {
 
      $gender=$_POST["gender"];
    }
    if(empty($_POST["date"]))
    {
      $dateErr="Date of birth  is required";
      $date="";
      $flag=0;
    }
    else
    {
       $date=$_POST["date"];
      
    }
  

if($flag==1 )
    {
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


$sql = "UPDATE cusreg SET name='".$name."',email='".$email."',gender='".$gender."',date='".$date."' WHERE username='".$_SESSION['uname']."' AND password='".$_SESSION['pass']."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $sql."<br>" .$conn->error;
}



$conn->close();
}
}


if(isset($_SESSION['uname']))
{
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


$sql="SELECT * FROM cusreg WHERE username='".$_SESSION['uname']."' AND password='".$_SESSION['pass']."'";
$result= $conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
  $name = $row["name"];
           $email = $row["email"];
           $gender = $row["gender"];
           $date = $row["date"];
}
}
else
{
  $unamedb="";
  $passdb="";
}




$conn->close();

}




?>
















