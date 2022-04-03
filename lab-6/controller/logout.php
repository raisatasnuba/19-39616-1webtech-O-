<?php 
session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:../view/Login.php");
}
else {
	header("location:../view/Login.php");
}

 ?>