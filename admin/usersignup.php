<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
include 'inc/connect.php';
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password= $_POST['password'];
$cpasswrd=$_POST['cpasswrd'];
$checkmail="SELECT*FROM user WHERE email='$email'";
$result=mysqli_query($conn,$checkmail);
$num=mysqli_num_rows($result);
if($num>0)
{
  echo "email already exist";
}
else{
  if($password==$cpasswrd)
  {
    $hash=password_hash($password,PASSWORD_DEFAULT);

    $sqll="INSERT INTO user (fullname,email,password) VALUES ('$fullname','$email','$hash')";
    $result=mysqli_query($conn,$sqll);
    if($result)
    {
      echo "record succes";  
      
    }
    else{
      echo "password didint matched";
    }
  }
  else{

    echo "password didny matched";
  }
}


}

?>


