<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="stylist.css">
  <title></title>
</head>

<body>
 
 
  <?php

  session_start();

      $name = $email = $dob = $gender =$username=  "";
      
      
      $data = file_get_contents("data.json");
      $data = json_decode($data, true);
       $flag = 0;


       foreach ($data as $row) {
        if ($row["username"] == $_SESSION["username"]) {
          
           $name = $row["name"];
           $email = $row["email"];
           $gender = $row["gender"];
           $dob = $row["date"];
           $username=$row["username"];

          

          break;
        
        } 
         else {
           $flag = 1;
         }
      }
      foreach($data as $row)
      {
        if($row["username"]==$data)
        {
          $name=$_POST['name'];
        }
      }
       $final=json_encode($data);
     
      
      file_put_contents('data.json',$final);
      
      ?>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php
           require'headpage.php';
         if (isset($_SESSION['username'])) {

  echo"  <div style='border:1px solid black;height:310px;'>
      <table style='height:200px;width:650px;'><tr><td style='text-align:left;width:200px;'><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a></td>
        <td style='text-align:left;'>
      <fieldset>

        
    <legend><h2>Edit Profile</h2></legend>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name: <input type='text' name='name'value=' $name'> <br><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: <input type='text' name='name'value=' $email'><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Username: <input type='text' name='username'value=' $username'><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Gender: <input type='text' name='name'value=' $gender'><br><br>
          Date Of Birth: <input type='text' name='name'value=' $dob'><br><br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' name='submit'>
  
  
  
  
  </fieldset>
</td>
</tr>
</table>
   
</div>";}
?>
<?php require 'footer.php';?>
</form>
</body>
</html>