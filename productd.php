<?php
  include 'admin/inc/connect.php';

  $pname=$_GET['proname'];
$selectquery="SELECT * FROM `addproducts` WHERE pname = $pname" ;
// $selectquery="SELECT * FROM `addproducts` where pname=$_POST['pname']";
$query=mysqli_query($conn,$selectquery);
// $num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
      
    ?> 
  <?php echo $res['pname'];?>
    <?php  
}
    ?>