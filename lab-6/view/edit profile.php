

<!DOCTYPE html>
<html>
<head>
  
  <title></title>
</head>

<body>
  
  <?php 
 require("../controller/editcheck.php"); 
      require("headpage.php");
      
  ?>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        
      <div style='border:1px solid black;height:400px;'>
      <table style='height:400px;width:950px;'>
        <tr>
          <td style='text-align:left;width:200px;' class='raisa'>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p>
            <hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href='displayfood.php'>Menu</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='../controller/logout.php'>Logout</a>
          </td>
          <td style='text-align:left;'>
            <fieldset>   
              <legend style='color:#ff0040;'><h2>Edit Profile</h2></legend>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                Name: <input type='text' name='name'value='<?php echo $name ?>'> 
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                Email: <input type='text' name='email'value='<?php echo $email ?>'>
                <br><br>
                
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
                Gender: <input type='text' name='gender'value='<?php echo $gender ?>'>
                <br><br>
                Date Of Birth: <input type='text' name='date'value='<?php echo $dob ?>'>
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input type='submit' name='submit' value="Change">
          
            </fieldset>
          </td>
        </tr>
      </table>
   </div>
</form>



</body>
</html>