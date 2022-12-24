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
    
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="row">
                

<H1 class="text-center justify-content-center mx-auto ">MY CART</H1>

<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>

      <th scope="col">image</th>
      <th scope="col">product name</th>
      <th scope="col">price</th>

      <th scope="col">QUANTITY</th>
  
      <th> UPDATE</th>
      <th>REMOVE</th>
      <th scope="col"> Totalprice</th>

    </tr>
    </thead>
  <tbody>
  <?php

   
include 'admin/inc/connect.php';
$selectquery="SELECT * FROM addproducts";
$query=mysqli_query($conn,$selectquery);
$num=mysqli_num_rows($query);
echo $num;
$cartTotal = 0;
$Total=0;
$t=0;
while($res=mysqli_fetch_array($query)){
   
    ?>
   

    <tr>
    <td><?php echo $res['id'];?></a></td>
    <td> <img src="<?php echo  "admin/img/". $res['pic'];?>" width="200px" alt="image"></td>
    <td><?php echo $res['pname'];?></a></td>
    <td><?php echo $res['price'];?></td>
   
    

    
<td><form action="deletecart.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
    <input name="pquant"  type="number"class="text-center quantity" value="<?php echo $res['pquant'];?>" min="1" max="10"></td>
    <td> <button  type="submit" name="update" class="btn btn-primary" >UPDATE</button>
    </form></td>
    
    <td><form action="deletecart.php" method="post">
    <input type="hidden" name="dlt" value="<?php echo $res['id']; ?>">

<button  type="submit" name="remove" class="btn btn-danger" >REMOVE</button>

<!-- <h2 id="cart-total-price">$<?php echo $cartTotal ?></h2> -->
    </form></td>


    
<?php $cartTotal =($res["price"] * $res["pquant"]); ?>



<td><h2 id="cart-total-price">$<?php echo $cartTotal ?></td>

</tr>
<?php $Total += $cartTotal; ?>
<h1>$<?php echo $Total; ?></h1>

eh foreach nal hona
<?php

$total_item=0;
$total = 0;
foreach($res as $res){
?>
<tr>
    <td>
    <?php
   $cartTotal =($res["price"] * $res["pquant"]);
    $total += $cartTotal;
    ?>
    </td>
</tr>
<?php
}
echo ($total);




}
?>


  

</tbody>



</table>

</body>
</html>