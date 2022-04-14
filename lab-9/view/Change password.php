<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  
  <?php
  include '../controller/changePasscheck.php';
      
    require'headpage.php';  
    
    
  

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div style='border:1px solid black;height:400px;'>
      <table style='height:400px;width:950px;'><tr><td style='text-align:left;width:200px;'class="raisa"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayfood.php'>Menu</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../controller/logout.php'>Logout</a></td>
        <td style='text-align:left;'>
    <fieldset>
    <legend style='color:#ff0040;'><h2>Change Password</h2></legend>
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

  </form>
</body>
</html>