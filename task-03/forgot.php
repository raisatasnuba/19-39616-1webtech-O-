<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  
  <?php
  $cpassErr=$npassErr=$rpassErr="";
  $cpass=$npass=$rpass="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["cpass"]))
    {
      $cpassErr="Current Password is required";

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
        
      }
        else if(!preg_match("/\W/",$npass))
      {
        $npassErr="Password must contain at least one of the special characters";
        
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
        $rpassErr="Password and confirm password are not matched";

      }
    }
  }
?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <fieldset>
    <legend><h2>Change Password</h2></legend>
    <label for="cpass">Current Password:</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="cpass" id="cpass"><br><span><?php echo $cpassErr;?></span><br>
    <label for="npass">New Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="npass" id="npass"><br><span><?php echo $npassErr;?></span><br>
    <label for="rpass">Retype new Password:</label>
    <input type="Password" name="rpass" id="rpass"><br><span><?php echo $rpassErr;?></span><br>
    <hr>

   <input type="submit" name="submit" value="submit">
   
    


  </fieldset>
  </form>
</body>
</html>