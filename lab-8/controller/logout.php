<?php 
session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:../view/Login.php");
}
else {
	header("location:../view/Login.php");
}

 ?>