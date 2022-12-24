<?php
session_start();
include 'inc/connect.php';

if(isset($_POST['delete']))
{$id=$_POST['ctgdlt'];
    $productname=$_POST['productname'];
    $picture=$_FILES['picture']['name'];
 $tmp_name=$_FILES['picture']['tmp_name']; //proccsessingtimename
 $location="picture/";
 move_uploaded_file($tmp_name,$location.$picture);
 $description=$_POST['description'];

    
    $del_query="DELETE FROM categories WHERE id='$id' ";
    $exe=mysqli_query($conn,$del_query);

    if($exe)
    {
        echo "delted";
        header("location:ctgdisplay.php");
    }
    else
    {
        echo "somthin went wrong";
    }
}

?>