<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  <?php

  require_once("../javascript/Rscript.js");
   // require_once("../controller/Rcheck.php");

    

    
  include 'headpage.php';    

    

  
  ?>

  <form method="post" action="../controller/Rcheck.php" onclick="return validation();">
    <div style="height: 690px;background-image: url('food4.jpg');background-repeat: no-repeat;">
      <fieldset style="width:350px;height:620px;">
        
    <legend style='color:#ff0040;'><h2>Registration</h2></legend>
   
    <label for="name">Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name" onkeypress="checkName()" onblur="checkName()"><br><span style="color: red;" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];}?></span><br><hr>
     <label for="email">Email:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email" onkeypress="checkEmail()" onblur="checkEmail()"><br><span style="color: red;" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span><br><hr>
     <label for="usname">User Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usname" id="usname" onkeypress="checkUsername(this.value)" onblur="checkUsername(this.value)"><br><span style="color: red;" id="usnameErr"><?php if(!empty($_GET['usnameErr'])){echo $_GET['usnameErr'];}?></span><br><hr>
    <label for="phone">Phone Number:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" id="phone" onkeypress="checkPhone()" onblur="checkPhone()"><br><span style="color: red;" id="phoneErr"><?php if(!empty($_GET['phoneErr'])){echo $_GET['phoneErr'];}?></span><br><hr>
     <label for="pass2">Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass2" id="pass2" onkeypress="checkPassword()" onblur="checkPassword()"><br><span style="color: red;" id="pass2Err"><?php if(!empty($_GET['pass2Err'])){echo $_GET['pass2Err'];}?></span><br><hr>
    <label for="pass3">Confirm Password:</label>
    <input type="Password" name="pass3" id="pass3" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()"><br><span style="color: red;" id="pass3Err"><?php if(!empty($_GET['pass3Err'])){echo $_GET['pass3Err'];}?></span><br><hr>
    <label for="address">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="address" id="address" onkeypress="checkAddress()" onblur="checkAddress()"><br><span style="color: red;" id="addressErr"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span><br><hr>

    <fieldset style="width: 330px;height: 30px;" id="radio" onkeypress="checkGender()" onblur="checkGender()">
      <legend>Gender</legend>
       <input type="radio" name="gender" id="g1" value="Male">
       <label for="g1">Male</label>
        <input type="radio" name="gender" id="g2" value="Female">
        <label for="g2">Female</label>
         <input type="radio" name="gender" id="g3" value="Other">
         <label for="g3">Other</label><br>
         <br><span style="color: red;" id="genderErr"><?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
    </fieldset><br><hr>
    <fieldset style="width: 330px;height: 35px;">
      <legend>Date of Birth</legend>
      <input type="date" name="date" size="3" onkeypress="checkDate()" onblur="checkDate()" placeholder="dd/mm/yyyy">
      <br>
      <span style="color: red;" id="dateErr"><?php if(!empty($_GET['dateErr'])){echo $_GET['dateErr'];}?></span>
       
      
     
     <br> <br>

    </fieldset><br><br>
    <input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br>    
     




  </fieldset>
</div>

  </form>
</body>
</html>