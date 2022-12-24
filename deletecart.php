<?php
 include 'admin/inc/connect.php';

    if(isset($_POST['update'])){
      $id=$_POST['id'];
      $quantity = $_POST['pquant'];
        

        $select="SELECT * FROM addproducts  ";
            $update="UPDATE `addproducts` SET `pquant` = '$quantity' WHERE `id`='$id' ";
            $run=mysqli_query($conn,$update);
            if($run){
            echo "updated";
            header('location:mycart2.php');
               }

         else
         {
             echo "Data Not Updated";
         }
        }
        ?>
        <?php
    
    include 'admin/inc/connect.php';
        
        if(isset($_POST['remove']))
        {$id=$_POST['dlt'];
            $pdname = $_POST['pic'];
            $pdname = $_POST['pname'];
            $ipaddress = $_POST['price'];
            $quant=$_POST['pquant'];
         
            
            $del_query="DELETE FROM addproducts WHERE id='$id' ";
            $exe=mysqli_query($conn,$del_query);
        
            if($exe)
            {
                echo "delted";
                header("location:mycart2.php");
            }
            else
            {
                echo "somthin went wrong";
            }
        }
        
        ?>

                    
                

              