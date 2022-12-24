<?php
session_start();
include 'inc/connect.php';

if(isset($_POST['delete']))
{$id=$_POST['dlt'];
    $pname = $_POST['pname'];
    $pcatg = $_POST['pcatg'];
    $pquant=$_POST['pquant'];
    $price= $_POST['price'];
    $name_file=$_FILES['pic']['name'];
    
    $del_query="DELETE FROM addproducts WHERE id='$id' ";
    $exe=mysqli_query($conn,$del_query);

    if($exe)
    {
        echo "delted";
        header("location:display.php");
    }
    else
    {
        echo "somthin went wrong";
    }
}

?>