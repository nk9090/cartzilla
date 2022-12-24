<?php
  include 'function/common_functions.php';
include 'admin/inc/connect.php';
  add_to_cart();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css">
    <link
      rel="stylesheet"
      class="text-decoration-none" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/f3a168a203.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CSS -->
    <link
      class="text-decoration-none" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>ecommerce</title>
  </head>
  <body>
    <div class="topbar bg-dark w-100%">
    <div class="container">
     
        <div class="row bg-dark  py-2">
          <div class="col-4 small">
            <i class="fa fa-headphones text-danger" aria-hidden="true"></i>
            <span class="text-muted mr-1 " >support</span>
            <a
              class="small text-light text-decoration-none"
              class="text-decoration-none" href="tel:00331697720"
              >(00) 33 169 7720</a
            >
          </div>
          <div class="col-4 d-md-inline-block d-none p-0 justify-content-between d-flex  my-auto small">
            <i class="text-muted   my-auto fa fa-chevron-left" aria-hidden="true"></i>
            <a class="fw-bold  text-decoration-none fw-light  text-muted">free shipping for order over 200$</a>
            <i class="text-muted  my-auto fa fa-chevron-right" aria-hidden="true"></i>
          </div>
          <div class="col-8 small col-md-4 text-end">
            <a class=" dnone d-none d-md-inline-block text-muted text-decoration-none small"
              ><i
                class="px-1 fa fa-map-marker text-danger"
                aria-hidden="true"
              ></i>Order Tracking</a>
            <a class="text-muted fw-bold px-2 small text-decoration-none" href="#"><img class="imgs me-1" src="images/flag.png" alt="">Eng/$</a>
            <div class="d-inline dropdown small">
              <a
                class="btn-secondary bg-transparent dropdown-toggle py0 lh-1"
                class="text-decoration-none" href="#"
                role="button"
                id="dropdownMenuLink"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="flag flag-us"></i>
              </a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                  <a class="dropdown-item" class="text-decoration-none" href="#"
                    ><div class="dropdown">
                      <a
                        class="btn btn-secondary dropdown-toggle"
                        class="text-decoration-none" href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Dropdown link
                      </a>

                      <ul
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuLink"
                      >
                        <li><a class="dropdown-item" class="text-decoration-none" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" class="text-decoration-none" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" class="text-decoration-none" href="#"
                            >Something else here</a
                          >
                        </li>
                      </ul>
                    </div></a
                  >
                </li>
                <li><a class="dropdown-item" class="text-decoration-none" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" class="text-decoration-none" href="#">Something else here</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- section2nd -->
   


    <nav class="navbar navbar-light py-0 ">
      <div class="container py-3">
        <a class="small d-sm-none"> <img src="images/short2.png" /></a>
        <a class="small d-sm-block d-none"> <img src="images/logo-drk1.png"  /></a>

        <div class="input-group w-50  ">
          <input type="text" class=" d-none d-lg-inline-block form-control" placeholder="Search for products" aria-label="Search" >
          <i class=" d-none d-lg-inline-block fa fa-search position-absolute translate-middle-y top-50 end-0 me-3" aria-hidden="true"></i>
        </div>
        <div class="3icon d-flex">
        <i class=" my-auto  px-2 fs-4 fa fa-heart-o" aria-hidden="true"></i>
        <div class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="flex-shrink-0">
            <i class=" fs-4 fa fa-user-o" aria-hidden="true"></i>
          </div>
          <div class="flex-grow-1 d-none d-lg-inline-block ms-3">
            <div class="small">
              <a class="text-muted text-decoration-none">Hello,Sign in</a>
            </div>
            My Account
          </div>
        </div>
        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class=" text-dark nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-lock" aria-hidden="true"></i>
              Sign in</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class=" text-dark nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-user-o" aria-hidden="true"></i>
              Sign up</button>
          </li>   
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="tab-content" id="pills-tabContent">
  
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

<form class="user" method="POST" action="admin/usersignup.php">
        <div class="form-group row" method="post">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input
              type="text"
              class="form-control form-control-user"
              id="examplefullName"
              placeholder="Full Name"
              name="fullname"
            />
          </div>
         
        </div>
        <div class="form-group">
          <input
            type="email"
            class="form-control form-control-user"
            id="exampleInputEmail"
            placeholder="Email Address"
            name="email"
          />
        </div>
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input
              type="password"
              class="form-control form-control-user"
              id="exampleInputPassword"
              placeholder="Password"
              name="password"
            />
          </div>
          <div class="col-sm-6">
            <input
              type="password"
              class="form-control form-control-user"
              id="exampleRepeatPassword"
              placeholder="Repeat Password"
              name="cpasswrd"
            />
          </div>
        </div>
       
<button type="submit" class=" w-100 btn btn-primary">Submit</button>
      
      </form>


</div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>



      </div>
    </div>
  </div>
</div>

        
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <i class=" p-3 rounded-circle fa fa-shopping-cart position-relative" aria-hidden="true"> 
              <span class="position-absolute top-0 p-2 start-98 badge rounded-circle bg-danger">
                4
    
              </span></i>
          </div>
        
          <div class="flex-grow-1 d-none d-lg-inline-block  ms-3">
            <div class="small">
              <a class="text-muted text-decoration-none">My cart</a>
            </div>
            $254.00
          </div>
        </div>
        </div>
      </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" class="text-decoration-none" href="#">Action</a></li>
            <li><a class="dropdown-item" class="text-decoration-none" href="#">Another action</a></li>
            <li><a class="dropdown-item" class="text-decoration-none" href="#">Something else here</a></li>
          </ul>
      </div>
      
    

    </nav>

    <!-- section2ndend -->

    <!-- 3rd sec -->

    <nav class="navbar p-0 navbar-expand-lg navbar-light">
      <div class="container">
        <div class="collapse navbar-collapse fs-5" id="navbarNavDropdown">
          <div class="dropdown">
            <a
              class="btn-transparent text-muted text-decoration-none dropdown-toggle"
              class="text-decoration-none" href="#"
              role="button"
              id="dropdownMenuLink"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            <i class="fa fa-th-large" aria-hidden="true"></i>
              Departments
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" class="text-decoration-none" href="#">Action</a></li>
              <li><a class="dropdown-item" class="text-decoration-none" href="#">Another action</a></li>
              <li><a class="dropdown-item" class="text-decoration-none" href="#">Something else here</a></li>
            </ul>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" class="text-decoration-none" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="text-decoration-none" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="text-decoration-none" href="#">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="text-decoration-none" href="#">Pages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="text-decoration-none" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="text-decoration-none" href="#">Docs/Component</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
<?php 

//   $ip=getIPAddress();
//   echo 'user real ip address'.$ip; 
// }

include 'admin/inc/connect.php';

// if(isset($_POST['proname']))
$pname=$_GET['proname'];
$selectquery="SELECT * FROM addproducts where pname=$pname";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){   
     $pname = $res['pname'];
    ?> 
<div class="row">
    <div class="col-7"> <img src="<?php echo  "admin/img/". $res['pic'];?>" width="100%" alt="image"></div>
    <div class="col-5"> <div class="star-rating text-warning">
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                  <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
        </div> 
                <div class="product-rate">
                  <span class="text-accent">$<?php echo $res['price'];?><small> <br>price of product</small>
                  </span>
                </div>
                <div class="py-2 form-group">
                        <input
                        label="size"
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="enter your size"
                          name="size"
                        />
                      </div>
               
                      <input name="pquant"  type="number"class="text-center quantity" value="<?php echo $res['pquant'];?>" min="1" max="10">
            <div class="d-flex p-2 content-space-between">

                      <!-- <button class="btn btn-primary btn-shadow d-block w-50" type="submit"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button> -->

                      <a class="btn btn-primary btn-shadow d-block w-50" href="index.php?add_to_cart='<?php echo $pname ; ?>' ">Add to Cart</a>
                      
                      <button class="btn btn-danger btn-shadow d-block w-50" type="submit"><i class="ci-cart fs-lg me-2"></i>buy now</button>
                </div>
                </div>
    <?php
}
// }
    ?>
</div>
</div>