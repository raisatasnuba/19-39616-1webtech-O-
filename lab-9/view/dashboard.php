<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php 
	
session_start();
include'headpage.php';


if (isset($_SESSION['uname'])) {

	echo "<div style='border:1px solid black;height:400px;'><table style='height:400px;width:950px;'><tr><td style='text-align:left;width:200px;'class='raisa'><p style='color:#ff0040;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'style='color:#ff0040;'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayfood.php'style='color:#ff0040;'>Menu</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:#ff0040;'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:#ff0040;'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:#ff0040;'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:#ff0040;'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../controller/logout.php' style='color:#ff0040;'>Logout</a></td><td style='text-align:center;'class='color'>"?><?php require_once'search.php';?>
<?php echo "<h2 style='font-size:60px;color: red;'>Welcome ".$_SESSION['uname']."</h2></td></tr></table></div>";
	

} else {
	header("location:Login.php");
}



 ?>
</form>


</body>
</html>




