<?php
session_start();
  // error_reporting(0);
 include 'inc/connect.php';
                      if (isset($_POST['update']))
                      {
                        $idd=$_POST['edit_id'];
                        $pname = $_POST['pname'];
                        $pcatg = $_POST['pcatg'];
                        $pquant=$_POST['pquant'];
                        $price= $_POST['price'];
                        $name_file=$_FILES['pic']['name'];
                        $tmp_name=$_FILES['pic']['tmp_name'];  //proccsessingtimename
                        $location="img/";
                        move_uploaded_file($tmp_name,$location.$name_file);

                        $querry = "UPDATE addproducts SET pname='$pname', pcatg='$pcatg', pquant='$pquant', price='$price',pic='$name_file' WHERE id='$idd'";
                        $queryrun = mysqli_query($conn, $querry);
            
  
                     if($queryrun)
                     {
                      
                            echo "Data Updated";
                            header("location:display.php");
                        
                        
                     }
                     else
                     {
                         echo "Data Not Updated";
                     }
                    }

                     ?>