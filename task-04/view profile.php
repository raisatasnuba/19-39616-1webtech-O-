<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="stylist.css">
  <title></title>
</head>

<body>
  
  <?php
  session_start();
      $name = $email = $dob = $gender =  "";
      
      $data = file_get_contents("data.json");
      $data = json_decode($data, true);
       $flag = 0;


       foreach ($data as $row) {
        if ($row["username"] == $_SESSION["username"]) {
           $name = $row["name"];
           $email = $row["email"];
           $gender = $row["gender"];
           $dob = $row["date"];

          

          break;
        } 
         else {
           $flag = 1;
         }
      }
      ?>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php 
          require'headpage.php';
        if (isset($_SESSION['username'])) {
         echo" <div style='border:1px solid black;height:310px;'>
      <table style='height:200px;width:650px;'><tr><td style='text-align:left;width:200px;'><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a></td>
        <td style='text-align:left;'>


      <fieldset><legend><h2>View Profile</h2></legend>
        Name: $name <br><hr>
          Email: $email<br><hr> 
          Gender: $gender<br><hr>
          Date Of Birth: $dob<br><hr>


      <a href='edit profile.php'>Edit Profile</a>

  
  
  
  
  </fieldset>
</td>
</tr>
</table>
</div>";
}
   
?>
<?php require'footer.php';?>
  
      
     





  </form>

</body>
</html>     
