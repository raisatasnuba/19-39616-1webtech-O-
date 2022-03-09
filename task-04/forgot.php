<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="stylist.css">
	<title></title>
</head>
<body>
	<?php
	$emailErr="";
	$email=$message=$message2="";
  require'headpage.php';
	 if($_SERVER["REQUEST_METHOD"]=="POST")
  {
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
      }
    }
    $data = file_get_contents("data.json");
  $data = json_decode($data, true);
  $flag=0;
   foreach ($data as $row) {
   	if($email==$row["email"])
   	{
   		$flag=0;
   		$message=$row["password"];
   		break;
   	}
   	else
   	{
   		$flag=1;
   	}
}
if($flag==1)
{
	$message2= "Email is not matched";
}
}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div style="height: 320px;">
      <fieldset style="width: 300px;height: 200px;">
        
    <legend><h2>Forgot Password</h2></legend>
     <label for="email">Email:</label>
   &nbsp;&nbsp;<input type="text" name="email" id="email"><span><?php echo $message;?></span><br><span><?php echo $emailErr;?></span><br>
    <input type="submit" name="submit" value="submit">
    <br><span><?php echo $message2;?></span>
   </fieldset>
 </div>
 </form>
 <?php require'footer.php';?>

</body>
</html>