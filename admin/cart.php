<?php
if ($_SERVER['REQUEST_METHOD']=='GET')
{
    include 'inc/connect.php';
    $pdname=$_GET['pdname'];
    $ip_address=$_GET['ip_address'];
    $quantity=$_GET['quantity'];

$sql="INSERT INTO cart(pdname,ip_address,quantity) VALUES('$pdname','$ip_address','$qauntity')";
$result=mysqli_query($conn,$sql);
if($result)
{
 
}
  else
  {
    echo "SOMETHING WRONG";
  }
}


?>