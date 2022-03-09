<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
  <?php
  
    $nameErr=$emailErr=$usnameErr=$pass2Err=$pass3Err=$genderErr=$dateErr=$phoneErr=$addressErr="";
    $name=$email=$usname=$pass2=$pass3=$gender=$date=$message=$phone=$address="";
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
        $name="";
        
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
        $email="";
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
        $usname="";
      }

    }
    if(empty($_POST["phone"]))
    {
      $phoneErr="Phone Number is required";
    }
    else
    {

      $phone=$_POST["phone"];
      
       if(!preg_match("/^[0-9]{11}+$/",$phone))
      {
        $phoneErr="Phone number contain at 11 number and no letter";
        $phone="";
        
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
        $pass2="";
        
      }
        else if(!preg_match("/\W/",$pass2))
      {
        $pass2Err="Password must contain at least one of the special characters";
        $pass2="";
        
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
        $pass3="";

      }
    }
    if(empty($_POST["address"]))
    {
      $addressErr="Address is required";
    }
    else
    {

      $address=$_POST["address"];
      if(!preg_match("/^[a-zA-Z0-9, ]*$/",$address))
      {
        $addressErr="Not found";
        $address="";
        
      }
    }
    if(empty($_POST["gender"]))
    {
      $genderErr="Gender is required";
      $gender="";
    }
    else
    {
 
      $gender=$_POST["gender"];
    }
    if(empty($_POST["date"]))
    {
      $dateErr="Date of birth  is required";
      $data="";
    }
    else
    {
       $date=$_POST["date"];
      
    }
    

    
    if($name!="" and $email!= "" and $usname!="" and $pass2!="" and $gender!="" and $date!="" and $pass3!="" and $phone!="" and $address!="" )
    {
      
      $current=file_get_contents('data.json');
      $array=json_decode($current,true);
      $new=array(
      'name' => $_POST["name"],
      'email' => $_POST["email"],
      'username' => $_POST["usname"],
      'phone' =>$_POST["phone"],
      'password' => $_POST["pass2"],
      'address' => $_POST["address"],
      'gender' => $_POST["gender"],
      'date' => $_POST["date"] 
     
      );
      $array[]=$new;
      $final=json_encode($array);
      if(file_put_contents('data.json',$final))
      {
        header("Location:Login.php");
      }
      
    
  }
    else{
      $message="enter the information";

    }

  }

    

    
  require 'headpage.php';    

    

  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div style="height: 700px;">
      <fieldset style="width:350px;height:620px;">
        
    <legend><h2>Registration</h2></legend>
   
    <label for="name">Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name"><br><span><?php echo $nameErr;?></span><br><hr>
     <label for="email">Email:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email"><br><span><?php echo $emailErr;?></span><br><hr>
     <label for="usname">User Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usname" id="usname"><br><span><?php echo $usnameErr;?></span><br><hr>
    <label for="phone">Phone Number:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" id="phone"><br><span><?php echo $phoneErr;?></span><br><hr>
     <label for="pass2">Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass2" id="pass2"><br><span><?php echo $pass2Err;?></span><br><hr>
    

    <label for="pass3">Confirm Password:</label>
    <input type="Password" name="pass3" id="pass3"><br><span><?php echo $pass3Err;?></span><br><hr>
    <label for="address">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="address" id="address"><br><span><?php echo $addressErr;?></span><br><hr>

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
      <input type="date" name="date" size="3" placeholder="dd/mm/yyyy">
      <br>
      <span><?php echo $dateErr?></span>
       
      
     
     <br> <br>

    </fieldset><br><br>
    <input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br><span><?php echo $message?></span>
      
     




  </fieldset>
</div>
<?php require 'footer.php'?>
  
  </form>
</body>
</html>