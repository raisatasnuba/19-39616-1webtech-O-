<?php
  
  session_start();
  $cpassErr=$npassErr=$rpassErr="";
  $cpass=$npass=$rpass="";
  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["cpass"]))
    {
      $cpassErr="Current Password is required";

    }
    else if (!strcmp($_SESSION['pass'], $_POST["cpass"])==0) {
      $cpassErr = "Current Password is incorrect";
      $cpass ="";
    } 

    else
    {
      $cpass=$_POST["cpass"];
       

      }
      if(empty($_POST["npass"]))
    {
      $npassErr="New Password is required";

    }
    else
    {
      $npass=$_POST["npass"];
       if(strlen($_POST["npass"])<8)
      {
        $npassErr="Password must not be less than eight (8) characters";
        $npass="";
        
      }
        else if(!preg_match("/\W/",$npass))
      {
        $npassErr="Password must contain at least one of the special characters";
        $npass="";
        
      }
      else if (strcmp($cpass, $npass)==0) {
      $npassErr = "New Password should not be same as the Current Password";
       $npass ="";
    }

    }
    if(empty($_POST["rpass"]))
    {
      $rpassErr="Retype Password is required";

    }
    else
    {
      $rpass=$_POST["rpass"];
      if($_POST["npass"]!=$_POST["rpass"])
      {
        $rpassErr=" New Password and confirm password are not matched";
        $rpass="";

      }
     
  }
  
 
      
       
      

       
       
     
    }
    if(!empty($_POST['rpass'])){
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

if($cpass!="" and $npass!= "" and $rpass!=""  )
    {
$sql = "UPDATE cusreg SET password='".$rpass."' WHERE username='".$_SESSION['uname']."' AND password='".$_SESSION['pass']."'";

if ($conn->query($sql) === TRUE) {
  echo "password change successfully";
  header('location:Login.php');
} else {
  echo "Error updating record: " . $sql."<br>" .$conn->error;
}
}


$conn->close();

}
    
     ?>
