<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <?php 
  $unameErr=$passErr=$message2="";
  $uname=$pass=$error=$message="";
  include"headpage.php";
  require_once("../javascript/Lscript.php");
  require_once("../controller/Lcheck.php");
  ?>
  

<form method="post" action="" onsubmit="return validation()">
  <div style="height: 400px; background-image: url('food2.jpg');">
    <br><br>
 <fieldset>
    <legend style='color:#ff0040;'><h2>Login</h2></legend>
    <label for="uname" style='color:#ff0040;'>User Name:</label>
    <input type="text" name="uname" id="uname"value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"onkeydown="checkUsername()" onblur="checkUsername ()"><br><span style="color: black;" id="unameErr"><?php if(!empty($_GET['unameErr'])){echo $_GET['unameErr'];} ?></span><br>
    <label for="pass" style='color:#ff0040;'>Password:</label>
   
    &nbsp;&nbsp;&nbsp;<input type="Password" name="pass" id="pass" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>" onkeydown="checkPassword()" onblur="checkPassword()"><br><span style="color:black;" id="passErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?>
      
    </span>
    <input type="hidden" name="phone">
        <input type="hidden" name="address">
    <hr>
   <input type="checkbox" name="remember" id="remember">
   <label for="remember" style='color:#ff0040;'>Remember me</label><br><span style="color:black;"><?php if(!empty($_POST['remember'])) {echo $message;}else{echo $error;}?></span><br>
   <input type="submit" name="Lsubmit" value="submit">

   <a href="forgot.php" style='color:#ff0040;'>Forgot Password?</a>
   &nbsp;<a href="Registration.php" style='color:#ff0040;'>Sign Up</a>
   <br><span><?php echo $message2;?></span>



  </fieldset><br>
</div>


</form>
</body>
</html>