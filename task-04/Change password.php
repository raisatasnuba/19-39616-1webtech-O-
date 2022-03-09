<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  
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
    else if (!strcmp($_SESSION['password'], $_POST["cpass"])==0) {
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
  
 
      
       $data = file_get_contents("data.json");
      $data = json_decode($data, true);
      

        foreach($data as $row){
          if(strcmp($row['password'], $_POST["cpass"])==0)
          {
           
      
          $row['password']=$rpass ;   
     
      
     
       
      
     }
     }
      $final=json_encode($data);
     
      
      file_put_contents('data.json',$final);
      

       
       
     
    }
    
     
      
    require'headpage.php';  
    
    
  

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div style='border:1px solid black;height:310px;'>
      <table style='height:200px;width:650px;'><tr><td style='text-align:left;width:200px;'><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a></td>
        <td style='text-align:left;'>
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
  </td>
</tr>
</table>
   
</div>
<?php require 'footer.php';?>
  </form>
</body>
</html>