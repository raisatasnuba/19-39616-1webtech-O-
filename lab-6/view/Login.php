<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <?php 

  $unameErr=$passErr="";?>
 
  <?php
  require'headpage.php';
  include '../controller/Lcheck.php';
    
  
?>
  

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div style="height: 400px; background-image: url('food2.jpg');">
    <br><br>
 <fieldset>
    <legend style='color:#ff0040;'><h2>Login</h2></legend>
    <label for="uname" style='color:#ff0040;'>User Name:</label>
    <input type="text" name="uname" id="uname"value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"><br><span style="color: black;"><?php echo $unameErr;?></span><br>
    <label for="pass" style='color:#ff0040;'>Password:</label>
   
    &nbsp;&nbsp;&nbsp;<input type="Password" name="pass" id="pass" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>"><br><span style="color:black;"><?php echo $passErr;?></span><hr>
   <input type="checkbox" name="remember" id="remember">
   <label for="remember" style='color:#ff0040;'>Remember me</label><br><span style="color:black;"><?php if(!empty($_POST['remember'])) {echo $message;}else{echo $error;}?></span><br>
   <input type="submit" name="Lsubmit" value="submit">

   <a href="forgot.php" style='color:#ff0040;'>Forgot Password?</a>
   &nbsp;<a href="Registration.php" style='color:#ff0040;'>Sign Up</a>
   <br><span  style="color:black;"><?php echo $message2?></span>



  </fieldset><br>
</div>


</form>
</body>
</html>