
<?php

session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{

    include 'inc/connect.php';

$pname=$_POST['pname'];
$pcatg=$_POST['pcatg'];
$pquant=$_POST['pquant'];
$price= $_POST['price'];


// $pic= $_POST['pic'];

$name_file=$_FILES['pic']['name'];
 $tmp_name=$_FILES['pic']['tmp_name'];  //proccsessingtimename
$location="img/";
move_uploaded_file($tmp_name,$location.$name_file);
$category=$_POST['category'];
$Category_id=$_POST['Category_id']; 




$checkname="SELECT * FROM addproducts WHERE pname='$pname'";
$resulta=mysqli_query($conn,$checkname);
$num=mysqli_num_rows($resulta);
if ($num>0)
{
  echo "product already exist";
}
else{ 
$sql="INSERT INTO addproducts (pname,pcatg,pquant,price,pic,category,Category_id) VALUES('$pname','$pcatg','$pquant','$price','$name_file','$category','$Category_id')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo " PRODUCTS ADDED SUCCESSFULLY";
}
  else
  {
    echo "SOMETHING WRONG";
  }
}
}

?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Add product</title> -->

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top"> -->

    <!-- Page Wrapper -->
    <!-- <div id="wrapper"> -->

        <!-- Sidebar -->
        <?php
 include 'inc/header.php';
 include 'inc/sidebar.php';
?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <!-- <div id="content-wrapper" class="d-flex flex-column"> -->

            <!-- Main Content -->
            <!-- <div id="content"> -->

                <!-- Topbar -->
                <?php
 include 'inc/topbar.php';
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-center text-gray-800">ADD PRODUCTS</h1>

                    <div class="row">
                </div>
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                
                    </div>
                    <form class="user" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Enter Product Name"
                          name="pname"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Enter Product Category"
                          name="pcatg"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder=" Product Quantity"
                          name="pquant"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder=" Product Price"
                          name="price"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="id"
                          name="Category_id"
                        />
                      </div>
                    
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Pic</label>
                        <input class="form-control" type="file" id="formFile" name="pic">
                     </div>
                     <?php
 
 include 'inc/connect.php'; 
      ?>
      <select name="category" id="">
<?php
    $sqll="SELECT * FROM categories";
    $resultt=mysqli_query($conn,$sqll);
    while($res=mysqli_fetch_array($resultt)){


?>
      

    <option value="<?php echo $res['categorytype'];?>"><?php echo $res['categorytype'];?></option>
  

    <?php


    }


 
?>  
</select>


   
  
                      <button type="submit" class=" w-100 btn btn-primary">Add Product</button>
                     
                    </form>
                  
                  </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            </div></div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

       
        <!-- End of Content Wrapper -->

   
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>