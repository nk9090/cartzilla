<?php
 include 'admin/inc/connect.php';

    if(isset($_POST['update'])){
      $id=$_POST['id'];
      $quantity = $_POST['quantity'];
        

        $select="SELECT * FROM cart  ";
            $update="UPDATE `cart` SET `quantity` = '$quantity' WHERE `id`='$id' ";
            $run=mysqli_query($conn,$update);
            if($run){
            echo "updated";
            header('location:mycart.php');
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
            $pdname = $_POST['pdname'];
            $ipaddress = $_POST['ip_address'];
            $quant=$_POST['quantity'];
         
            
            $del_query="DELETE FROM cart WHERE id='$id' ";
            $exe=mysqli_query($conn,$del_query);
        
            if($exe)
            {
                echo "delted";
                header("location:mycart.php");
            }
            else
            {
                echo "somthin went wrong";
            }
        }
        
        ?>

                    
                

              