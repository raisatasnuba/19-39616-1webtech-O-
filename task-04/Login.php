<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  <?php
 session_start();
    $unameErr=$passErr="";
    $uname=$pass="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["uname"]))
    {
      $unameErr="Username is required";
    }
    else
    {
      $uname=$_POST["uname"];
      if(strlen($_POST["uname"])<2)
      {
        $unameErr="User Name must contain at least two (2) characters";
      }
    }
    if(empty($_POST["pass"]))
    {
      $passErr="Password is required";

    }
    else
    {
      $pass=$_POST["pass"];
       if(strlen($_POST["pass"])<8)
      {
        $passErr="Password must not be less than eight (8) characters";
        
      }
        else if(!preg_match("/\W/",$pass))
      {
        $passErr="Password must contain at least one of the special characters";
        
      }
    }
    
    if (!empty($_POST['remember'])) {
  setcookie("uname", $_POST['uname'], time()+10);
  setcookie("pass", $_POST['pass'], time()+10);
  echo "cookie setup successfully!";
}else{
  setcookie("uname", "");
  setcookie("pass", "");
  echo "cookie removed successfully!";
}
    $data = file_get_contents("data.json");
  $data = json_decode($data, true);
  $flag=0;


  foreach ($data as $row) {
    if ( $uname==$row["username"]  and   $pass ==$row["password"]) {
      
     $_SESSION["username"] = $uname;
      $_SESSION["password"] = $pass;
       

    
      header("Location:dashboard.php");
       $flag = 0;
      break;
    } else {
      $flag = 1;
    }
  }


  if ($flag == 1) {
    echo "Wrong Info";
  }
}
 require 'headpage.php';   
  
?>
  

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div style="height: 320px;">
 <fieldset>
    <legend><h2>Login</h2></legend>
    <label for="uname">User Name:</label>
    <input type="text" name="uname" id="uname"value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"><br><span><?php echo $unameErr;?></span><br>
    <label for="pass">Password:</label>
    &nbsp;&nbsp;&nbsp;<input type="Password" name="pass" id="pass" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>"><br><span><?php echo $passErr;?></span><hr>
   <input type="checkbox" name="remember" id="remember">
   <label for="remember">Remember me</label><br><br>
   <input type="submit" name="Lsubmit" value="submit">
   <a href="forgot.php">Forgot Password?</a>
   &nbsp;<a href="Registration.php">Sign Up</a>



  </fieldset><br>
</div>
<?php require 'footer.php'?>
  

</form>
</body>
</html>