<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  <?php
    $nameErr=$emailErr=$usnameErr=$pass2Err=$pass3Err=$genderErr=$dateErr=$monthErr=$yearErr="";
    $name=$email=$usname=$pass2=$pass3=$gender=$date=$month=$year=$message="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["name"]))
    {
      $nameErr="Name is required";
    }
    else
    {

      $name=$_POST["name"];
      if(!preg_match("/^[a-zA-Z- ]*$/",$name))
      {
        $nameErr="Must start with a letter. Can contain a-z, A-Z, period, dash only";
        
      }
    }
    if(empty($_POST["email"]))
    {
      $emailErr="Email is required";
    }
    else
    {

      $email=$_POST["email"];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr="Invalid email format";
      }
    }
    if(empty($_POST["usname"]))
    {
      $usnameErr="Username is required";
    }
    else
    {
 
      $usname=$_POST["usname"];
      if(strlen($_POST["usname"])<2)
      {
        $usnameErr="User Name must contain at least two (2) characters";
      }

    }
    if(empty($_POST["pass2"]))
    {
      $pass2Err="Password is required";
    }
    else
    {
 
      $pass2=$_POST["pass2"];
      if(strlen($_POST["pass2"])<8)
      {
        $pass2Err="Password must not be less than eight (8) characters";
        
      }
        else if(!preg_match("/\W/",$pass2))
      {
        $pass2Err="Password must contain at least one of the special characters";
        
      }
      
      
    }
    if(empty($_POST["pass3"]))
    {
      $pass3Err="Confirm Password is required";
    }
    else
    {
 
      $pass3=$_POST["pass3"];
      if($_POST["pass2"]!=$_POST["pass3"])
      {
        $pass3Err="Password and confirm password are not matched";

      }
    }
    if(empty($_POST["gender"]))
    {
      $genderErr="Gender is required";
    }
    else
    {
 
      $gender=$_POST["gender"];
    }
    if(empty($_POST["date"]))
    {
      $dateErr="Date of birth  is required";
    }
    else
    {
       $date=$_POST["date"];
      if(!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
      {
        $dateErr="Must be valid number date:1-31";
          
      }
    }
    if(empty($_POST["month"]))
    {
      $dateErr="Date of birth is required";
    }
    else
    {

         $month=$_POST["month"];
    if(!preg_match("/^(0[1-9]|1[0-2])$/",$month))
    {
      $monthErr="Must be valid number month:1-12";
         
    }

    }
    if(empty($_POST["year"]))
    {
          $dateErr="Date of birth is required";
    }
    else
    {

        
    if($_POST['year']>=1900)
    {
       $year=$_POST["year"];
    }
    else
    {
      $yearErr="Must be valid number year:1953-1998";
      
    }

    }
    if(file_exists('data.json'))
    {
      $current=file_get_contents('data.json');
      $array=json_decode($current,true);
      $new=array(
      'name' => $_POST["name"],
      'email' => $_POST["email"],
      'username' => $_POST["usname"],
      'password' => $_POST["pass2"],
      'gender' => $_POST["gender"],
      'date' => $_POST["date"].$_POST["month"].$_POST["year"] 
     
      );
      $array[]=$new;
      $final=json_encode($array);
      if(file_put_contents('data.json',$final))
      {
        $message="file append successfully";
      }
    }
    else{
      $message="json file not exists";

    }

    

    }
    

    

  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <fieldset style="width:350px;height:570px;">
        
    <legend><h2>Registration</h2></legend>
   
    <label for="name">Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name"><br><span><?php echo $nameErr;?></span><br><hr>
     <label for="email">Email:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email"><br><span><?php echo $emailErr;?></span><br><hr>
     <label for="usname">User Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usname" id="usname"><br><span><?php echo $usnameErr;?></span><br><hr>
     <label for="pass2">Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass2" id="pass2"><br><span><?php echo $pass2Err;?></span><br><hr>
    <label for="pass3">Confirm Password:</label>
    <input type="Password" name="pass3" id="pass3"><br><span><?php echo $pass3Err;?></span><br><hr>
    <fieldset style="width: 330px;height: 30px;">
      <legend>Gender</legend>
       <input type="radio" name="gender" id="g1" value="Male">
       <label for="g1">Male</label>
        <input type="radio" name="gender" id="g2" value="Female">
        <label for="g2">Female</label>
         <input type="radio" name="gender" id="g3" value="Other">
         <label for="g3">Other</label><br>
         <br><span><?php echo $genderErr;?></span>
    </fieldset><br><hr>
    <fieldset style="width: 330px;height: 35px;">
      <legend>Date of Birth</legend>
      <input type="text" name="date" size="3" placeholder="dd">&nbsp;&nbsp;/
      <input type="text" name="month" size="3" placeholder="mm">&nbsp;&nbsp;/
      <input type="text" name="year" size="4" placeholder="yyyy"><br>
      <span><?php echo $dateErr?></span>
       <span><?php echo $monthErr?></span>
        <span><?php echo $yearErr?></span>
      
     
     <br> <br>

    </fieldset><br>
    <input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br><span><?php echo $message?></span>
      &nbsp;&nbsp;<a href="Login.php" style="text-align: right;">Login</a>
     




  </fieldset>
  </form>
</body>
</html>