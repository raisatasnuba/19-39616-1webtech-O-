<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
</head>
<body>
 

  
     <?php 
     session_start();
     require'headpage.php';
     if (isset($_SESSION['username'])) {
         echo" <form action='upload.php' method='post' enctype='multipart/form-data'><div style='border:1px solid black;height:330px;'>
      <table style='height:230px;width:650px;'><tr><td style='text-align:left;width:200px;'><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a></td>
        <td style='text-align:left;'>
  <fieldset>
    <legend><h2>Profile Picture</h2></legend>
    <img src='pic.jpg'><br>
  <input type='file' name='fileToUpload' id='fileToUpload'><br><hr>
  <input type='submit' value='submit' name='submit'>
  </fieldset><br>
  </td>
  </tr>
  </table>
  </div></form>";}
  ?>

<?php require'footer.php';?>


</body>
</html>