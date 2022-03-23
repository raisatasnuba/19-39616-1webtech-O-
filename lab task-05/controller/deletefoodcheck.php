<?php

$price=$code=$name=$display="";

$data = Getfood($_GET['code']);

$price = $data['price'];
$name = $data['name'];
$code = $data['code'];
$display = $data['display'];

if($_SERVER['REQUEST_METHOD'] === "POST")
{
	$price = $_POST['price'];
	$name = $_POST['name'];
	$code = $_POST['code'];
	

	if(!empty($price) && !empty($name) && !empty($code))
	{
		if(isset($_POST['display']))
		{
			if($_POST['display'] == true)
				$display = "Yes";
		}
		else
		{
			$display = "No";
		}
		
	}
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodmenu";

function connect()
{
	$conn = new mysqli("localhost", "root", "", "foodmenu");
	if($conn->connect_errno)
	{
		die("failed connection.. ". $conn->connect_errno);
	}
	return $conn;
}

function Getfood($code)
{
	$conn = connect();
	$sql = $conn->prepare("SELECT * FROM food WHERE code = ?");
	$sql->bind_param("i", $code);
	$sql->execute();
	$res = $sql->get_result();
	$res = $res->fetch_assoc();
	return $res;
}

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM `food` WHERE `code` = '".$code."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location:../view/displayfood.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>
