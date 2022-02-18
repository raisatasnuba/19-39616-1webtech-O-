<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  <?php
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
    
  }
?>
  

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
 <fieldset>
    <legend><h2>Login</h2></legend>
    <label for="uname">User Name:</label>
    <input type="text" name="uname" id="uname"><br><span><?php echo $unameErr;?></span><br>
    <label for="pass">Password:</label>
    &nbsp;&nbsp;&nbsp;<input type="Password" name="pass" id="pass"><br><span><?php echo $passErr;?></span><hr>
   <input type="checkbox" name="remember" id="remember">
   <label for="remember">Remember me</label><br><br>
   <input type="submit" name="Lsubmit" value="submit">
   <a href="forgot.php">Forgot Password?</a>
   &nbsp;<a href="Registration.php">Sign Up</a>
    


  </fieldset><br>
  

</form>
</body>
</html>