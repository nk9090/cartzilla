
<?php

session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'inc/connect.php';

    $productname=$_POST['productname'];
    $picture=$_FILES['picture']['name'];
 $tmp_name=$_FILES['picture']['tmp_name']; //proccsessingtimename
 $location="picture/";
 move_uploaded_file($tmp_name,$location.$picture);
 $description=$_POST['description'];
 $categorytype=$_POST['categorytype'];

$sql="INSERT INTO categories (productname,picture,description,categorytype) VALUES('$productname','$picture','$description','$categorytype')";
$result=mysqli_query($conn,$sql);
if($result)
{

    echo "  ADDED SUCCESSFULLY";
    header("location:ctgdisplay.php");
  
}
  else
  {
    echo "SOMETHING WRONG";
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
                    <h1 class="h3 mb-4 text-center text-gray-800">CATOGORY</h1>

               
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 text-center mb-4">Add</h1>
                    </div>
                    <form class="user" method="POST" enctype="multipart/form-data" >
                     
                     <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder=" Enter name of product"
                          name="productname"
                        />
                      </div>
                     
                     <div class="mb-3">
                        <label for="formFile" class="form-label">UPLOAD PICTURE</label>
                        <input class="form-control" type="file" id="formFile" name="picture"    placeholder="upload picture">
                     </div>
                     <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder=" description"
                          name="description"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder=" categorytype"
                          name="categorytype"
                        />
                      </div>
               
                   <button type="submit" class=" w-100 btn btn-primary">Add </button>
                     
                    </form>
          
                  
                  </div>
                </div>

                </div>
      
    
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class=" w-100 copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
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
<?php
 
 include 'inc/connect.php';
 if(isset($_POST['submit'])){
    if(empty($_POST['categorytype'])){
        $message="all feilds reqrd";
    }
    else{ 

    $sqll="SELECT * FROM categories ";
    $resultt=mysqli_query($conn,$sqll);
    if($resultt)
    {
        echo "suceess";

    }
}}

 
?>     