<?php


if ($_SERVER['REQUEST_METHOD']=='POST')
{

    include 'inc/connect.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM user WHERE email='$email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{  
  while($row=mysqli_fetch_assoc($result))
          {
            if(password_verify($password,$row['password']))
                    {

                      session_start();
                      $_SESSION['email']=$email;
                      $_SESSION['login']=true;
                      header("location:index.php");
                    }
                    else
                    {
                      echo "inavalid credentials";
                    }
                        }
 }
  else{
    echo "invalid credentials";
  }
}

?>