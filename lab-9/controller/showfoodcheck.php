
<?php


$uname=$phone=$address="";
	session_start();

        
    
	  define('servername', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'foodmenu');
    
    $conn = mysqli_connect(servername, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); 
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); 

    if(isset($_GET['code']))
        {
            
            $code = $_GET['code'];

           
            $sql = "SELECT * FROM food WHERE code=$code";
            
            $res = mysqli_query($conn, $sql);
            
            $count = mysqli_num_rows($res);
            
            if($count==1)
            {
                
                $row = mysqli_fetch_assoc($res);
                 $code = $row['code'];
                $name = $row['name'];
                $price = $row['price'];
                $image= $row['image'];
            }
            else
            {
               
                header('location:homepage.php');
            }
        }


$sql="SELECT * FROM cusreg WHERE username='".$_SESSION['uname']."'";
$result= $conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
  $uname = $row['username'];
           $phone = $row['phone'];
           $address = $row['address'];
           
}
}

?>
 <?php 
                    
              
                if(isset($_POST['submit']))
                {
                   
                    $code=$_GET['code'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; 

                    $order_date = date("Y-m-d h:i:sa"); 

                    $uname = $_POST['uname'];
                    $phone = $_POST['phone'];
                    
                    $address = $_POST['address'];


                   
                    $sql2 = "INSERT INTO orderlist SET 
                    code=$code,
                        name = '$name',
                        price = $price,
                        quantity = $qty,
                        total = $total,
                        order_date = '$order_date',
                       
                        customer_name = '$uname',
                        address = '$address',
                        phone = '$phone'
                     
                        
                    ";

                   
                    $res2 = mysqli_query($conn, $sql2);

                    if($res2==true)
                    {
                        
                       echo "<div class='success text-center'>Food Ordered Successfully.</div>";
                        header('location:confirm.php');
                    }
                    else
                    {
                        
                        echo "<div class='error text-center'>Failed to Order Food.</div>";
                       // header('location:'.SITEURL);
                    }

                }
            
            ?>   