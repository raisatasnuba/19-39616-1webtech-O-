<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  
  <?php
    require'headpage.php';
  include '../controller/forgotcheck.php';
      
   
    
    
  

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div style="height: 400px;">
    <fieldset>
    <legend style='color:#ff0040;'><h2>Forgot Password</h2></legend>
    
    <label for="npass">New Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="npass" id="npass"><br><span><?php echo $npassErr;?></span><br>
    <label for="rpass">Confirm Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="rpass" id="rpass"><br><span><?php echo $rpassErr;?></span><br>
    <hr>

   <input type="submit" name="submit" value="submit">
   
    


  </fieldset>
</div>
  

  </form>
</body>
</html>