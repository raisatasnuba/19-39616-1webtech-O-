<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  <?php
  
    include'../controller/Rcheck.php';

    

    
  include 'headpage.php';    

    

  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div style="height: 690px;background-image: url('food4.jpg');background-repeat: no-repeat;">
      <fieldset style="width:350px;height:620px;">
        
    <legend style='color:#ff0040;'><h2>Registration</h2></legend>
   
    <label for="name">Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name"><br><span style="color: red;"><?php echo $nameErr;?></span><br><hr>
     <label for="email">Email:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email"><br><span style="color: red;"><?php echo $emailErr;?></span><br><hr>
     <label for="usname">User Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usname" id="usname"><br><span style="color: red;"><?php echo $usnameErr;?></span><br><hr>
    <label for="phone">Phone Number:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" id="phone"><br><span style="color: red;"><?php echo $phoneErr;?></span><br><hr>
     <label for="pass2">Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass2" id="pass2"><br><span style="color: red;"><?php echo $pass2Err;?></span><br><hr>
    <label for="pass3">Confirm Password:</label>
    <input type="Password" name="pass3" id="pass3"><br><span style="color: red;"><?php echo $pass3Err;?></span><br><hr>
    <label for="address">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="address" id="address"><br><span style="color: red;"><?php echo $addressErr;?></span><br><hr>

    <fieldset style="width: 330px;height: 30px;">
      <legend>Gender</legend>
       <input type="radio" name="gender" id="g1" value="Male">
       <label for="g1">Male</label>
        <input type="radio" name="gender" id="g2" value="Female">
        <label for="g2">Female</label>
         <input type="radio" name="gender" id="g3" value="Other">
         <label for="g3">Other</label><br>
         <br><span style="color: red;"><?php echo $genderErr;?></span>
    </fieldset><br><hr>
    <fieldset style="width: 330px;height: 35px;">
      <legend>Date of Birth</legend>
      <input type="date" name="date" size="3" placeholder="dd/mm/yyyy">
      <br>
      <span style="color: red;"><?php echo $dateErr?></span>
       
      
     
     <br> <br>

    </fieldset><br><br>
    <input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br><span style="color: red;"><?php echo $message?></span>
      
     




  </fieldset>
</div>

  </form>
</body>
</html>