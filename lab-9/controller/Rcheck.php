<?php
  
   /* $nameErr=$emailErr=$usnameErr=$pass2Err=$pass3Err=$genderErr=$dateErr=$phoneErr=$addressErr="";
    $name=$email=$usname=$pass2=$pass3=$gender=$date=$message=$phone=$address="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["name"]))
    {
      $nameErr="Name is required";
    }
    else
    {

      $name=$_POST["name"];
      if(!preg_match("/^[a-zA-Z- ]*$/",$name))
      {
        $nameErr="Must start with a letter. Can contain a-z, A-Z, period, dash only";
        $name="";
        
      }
    }
    if(empty($_POST["email"]))
    {
      $emailErr="Email is required";
    }
    else
    {

      $email=$_POST["email"];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr="Invalid email format";
        $email="";
      }
    }
    if(empty($_POST["usname"]))
    {
      $usnameErr="Username is required";
    }
    else
    {
 
      $usname=$_POST["usname"];
      if(strlen($_POST["usname"])<2)
      {
        $usnameErr="User Name must contain at least two (2) characters";
        $usname="";
      }

    }
    if(empty($_POST["phone"]))
    {
      $phoneErr="Phone Number is required";
    }
    else
    {

      $phone=$_POST["phone"];
      
       if(!preg_match("/^[0-9]{11}+$/",$phone))
      {
        $phoneErr="Phone number contain at 11 number and no letter";
        $phone="";
        
      }
    }
    if(empty($_POST["pass2"]))
    {
      $pass2Err="Password is required";
    }
    else
    {
 
      $pass2=$_POST["pass2"];
      if(strlen($_POST["pass2"])<8)
      {
        $pass2Err="Password must not be less than eight (8) characters";
        $pass2="";
        
      }
        else if(!preg_match("/\W/",$pass2))
      {
        $pass2Err="Password must contain at least one of the special characters";
        $pass2="";
        
      }
      
      
    }
    if(empty($_POST["pass3"]))
    {
      $pass3Err="Confirm Password is required";
    }
    else
    {
 
      $pass3=$_POST["pass3"];
      if($_POST["pass2"]!=$_POST["pass3"])
      {
        $pass3Err="Password and confirm password are not matched";
        $pass3="";

      }
    }
     if(empty($_POST["address"]))
    {
      $addressErr="Address is required";
    }
    else
    {

      $address=$_POST["address"];
      if(!preg_match("/^[a-zA-Z0-9, ]*$/",$address))
      {
        $addressErr="Not found";
        $address="";
        
      }
    }
    if(empty($_POST["gender"]))
    {
      $genderErr="Gender is required";
      $gender="";
    }
    else
    {
 
      $gender=$_POST["gender"];
    }
    if(empty($_POST["date"]))
    {
      $dateErr="Date of birth  is required";
      $data="";
    }
    else
    {
       $date=$_POST["date"];
      
    }
     $servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($name!="" and $email!= "" and $usname!="" and $pass2!="" and $gender!="" and $date!="" and $pass3!="" and $phone!="" and $address!="" )
    {
$sql = "INSERT INTO cusreg (name, email, username, phone, password, address, gender, date)
VALUES ('".$name."','".$email."', '".$usname."', '".$phone."','".$pass2."','".$address."','".$gender."','".$date."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:../view/Login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

    

    
    
  }*/
  require_once '../model/model.php';


if (isset($_POST['submit'])) {
  $data['name'] = $_POST['name'];
  $data['email'] = $_POST['email'];
  $data['username'] = $_POST['usname'];
  $data['phone'] = $_POST['phone'];
  $data['password'] = $_POST['pass2'];
  $data['address'] = $_POST['address'];
  $data['gender'] = $_POST['gender'];
  $data['date'] = $_POST['date'];

  


  if (addCus($data)) {
header("location:../view/Login.php");
    echo 'Successfully added!!';

  }

} 
else {
  echo 'You are not allowed to access this page.';
}
 
    ?>