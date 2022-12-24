<?php
// include 'admin/inc/connect.php';
    function getIPAddress(){  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    //whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 
function add_to_cart(){
  if(isset($_GET['add_to_cart'])){
    global $conn;

$get_ip_address=getIPAddress(); 
$quantity=$_GET['add_to_cart'];
$pdname=$_GET['add_to_cart'];
// $ip_address=$_GET['ip_address']; $quantity=$_GET['quantity'];
$check='SELECT * FROM cart WHERE pdname= $pdname , quantity=$quantity AND ip_address=$get_ip_address ';

// $result=mysqli_query($conn, $check);
// $num=mysqli_num_rows($result);
// // echo $num;
// if($num>0)
// {
//   echo "product already exist";
// }
// else{
    $sql='INSERT INTO cart(pdname ,ip_address,quantity) VALUES ("'.$pdname.'","'.$get_ip_address.'","'.$quantity.'")';
    // echo $sql;
    $resultt=mysqli_query($conn,$sql);
if($resultt)
{
    echo " PRODUCTS ADDED TO CART SUCCESSFULLY";
    // echo " <script>alert('PRODUCTS ADDED TO CART SUCCESSFULLY')</script>";
}
  else
  {
    echo "SOMETHING WRONG";
  }
}
}

// }
?>
