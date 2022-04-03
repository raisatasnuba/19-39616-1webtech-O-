<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="stylist.css">
  <title></title>
</head>

<body>
  
  <?php
  session_start();
  require'headpage.php';
      $name = $email = $dob = $gender =  "";
      
      if(isset($_SESSION['uname']))
{
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM cusreg WHERE username='".$_SESSION['uname']."' AND password='".$_SESSION['pass']."'";
$result= $conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
  $name = $row["name"];
           $email = $row["email"];
           $gender = $row["gender"];
           $dob = $row["date"];
}
}
else
{
  $unamedb="";
  $passdb="";
}



$conn->close();

}

               
      
      ?>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php 
          
        if (isset($_SESSION['uname'])) {
         echo" <div style='border:1px solid black;height:400px;'>
      <table style='height:400px;width:950px;'><tr><td style='text-align:left;width:200px;'class='raisa' ><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayfood.php'>Menu</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../controller/logout.php'>Logout</a></td>
        <td style='text-align:left; background-color:white;'>


      <fieldset><legend style='color:#ff0040;'><h2>View Profile</h2></legend>
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
      
     





  </form>

</body>
</html>     
