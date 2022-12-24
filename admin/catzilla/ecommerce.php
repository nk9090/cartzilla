<?php
 include 'admin/inc/connect.php';
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
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            
            
            <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 d-flex  form-check justify-content-between">
              <div>
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>
              <div>

              <a class="fs-sm text-danger text-decoration-none" href="#">Forgot password?</a>
            </div>
          </div>
            <button type="submit" class=" w-100 btn btn-danger">Sign in</button>
          </form>
        
        </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

          <form class="user" method="POST" action="register.php">
                  <div class="form-group row" method="post">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="exampleFirstName"
                        placeholder="First Name"
                        name="firstname"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="exampleLastName"
                        placeholder="Last Name"
                        name="lastname"
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
                        name="cpassword"
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

    <!-- 3rd sec -->

    <!-- <4thsection -->
    <div
      id="carouselExampleDark"
      class="carousel carousel-dark slide"
      data-bs-ride=""
    >
      
      <div class=" text-start carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
         
         <div class="row flex-wrap skyclr">
          
           <div class="col-md-6 my-auto order-md-1 order-2">
            <button
            class=" d-none d-sm-block carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="prev"
          >
          <i class="circle border arrow1 rounded-circle p-2 fa fa-angle-left" aria-hidden="true"></i>

            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class=" d-none d-sm-block carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="next"
          >
          <i class=" circle border arrow2 rounded-circle p-2 fa fa-angle-right" aria-hidden="true"></i>

          <span class="visually-hidden">Next</span>
          </button>
              <div class="text-lg-start text-md-start py-3 text-center ps-md-5 ps-lg-5 ms-md-5 ms-lg-5carousel-caption start-0 end-0 position-relative mx-auto ">
                <h4 class="display-6 text-light ">Has Just Arrived </h4 >
                <h4 class="display-5 text-light fw-bold">Huge Summer Collection </h4 >
                <p class="text-light">Swimwear,Top,Shorts,Sunglasses & Muchmore..</p>
                <button class="rounded bg-danger rounded border-0 text-light">Show now</button>
              </div>
          </div>
          <div class="col-md-6 order-md-2 order-1">
            <img src="images/01.jpg" class=" d-block w-100" alt="..." />
          </div>
          </div>
        </div>
        
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row brclr">
                  <div class="col-md-6 my-auto order-md-1 order-2">
                    <button
                    class=" carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev"
                  >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                    class=" carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleDark"
                    data-bs-slide="next"
                  >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                              <div class="text-lg-start text-md-start text-center ps-md-5 ps-lg-5 ms-md-5 ms-lg-5carousel-caption start-0 end-0 position-relative mx-auto ">
                                <h6 class="display-4 fw-bold" >Second slide label</h6 >
                                <p>Some representative placeholder content for the second slide.</p>
                              </div>
                 </div>
              <div class="col-md-6 p-0  order-md-2 order-1">
                <img src="images/02.jpg" class="d-block w-100" alt="..." />
              </div>

        </div>
        </div>
        <div class="carousel-item">
          <div class="row pinkclr">
          
          <div class="col-6 my-auto order-md-1 order-2">
            <button
            class=" d-none d-sm-block carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class=" d-none d-sm-block carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="text-lg-start text-md-start text-center ps-md-5 ps-lg-5 ms-md-5 ms-lg-5carousel-caption start-0 end-0 position-relative mx-auto ">
            <h6 class="display-4 fw-bold">Third slide label</h6 >
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        <div class="col-md-6  order-md-2 order-1">
          <img src="images/03.jpg" class="d-block w-100" alt="..." />

        </div>
      </div>
        </div>
      </div>
      </div>
    
    </div>
    <!-- <4thsection -->

      <!-- 5thsection -->
<div class="container">
  <div class="row mt-5">

    <div class=" col-md-5 bg-light ">
        <div class="p-3 d-flex justify-content-between">
          <div class="w-50">
        <h3 class="mb-1">For Women</h3>
        <a  class="text-danger fw-bold text-decoration-none">Shop For Women
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
      </div>


        <div class=" d-flex position-relative " style="width: 30%;">
          <button class="carousel-control-prev  position-absolute start-50 end-0 " style="right: 36px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="bg-dark  position-relative  carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class=" bg-dark carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
        <div class="mt-5 overflow=hidden">
          <a class="d-none d-md-block overflow-hidden mt-auto">
        <img src="images/cat-2.jpg" >
      </a>
      </div>
    </div>
<div class="col-lg-7 col-md-7 col-12 px-5">



  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row  g-5">
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c1.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                
                <h6  class=" fs-sm">Metallic lipstic(Cripsm)</h6 >
                <div class="d-flex border-bottom py2 justify-content-between">
                  <div class="product-rate">
                  <span class="text-accent">$12.<small>99</small>
                  </span>
                </div>
                <div class="star-rating text-warning">
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                  <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                </div>
      
      
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c2.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Texttile platform Sneakers </h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c3.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Polarised sunglasess</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0 ">
              <img src="images/c4.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Leather Platform Sandales</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c5.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Short Chino short</h6 >
                  <div class="d-flex py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c6.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class="card-title fs-sm">T-shirt with Motif</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3 g-5">
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c1.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                
                <h6  class=" fs-sm">Metallic lipstic(Cripsm)</h6 >
                <div class="d-flex border-bottom py2 justify-content-between">
                  <div class="product-rate">
                  <span class="text-accent">$12.<small>99</small>
                  </span>
                </div>
                <div class="star-rating text-warning">
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                  <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                </div>
      
      
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c2.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Texttile platform Sneakers </h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c3.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Polarised sunglasess</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0 ">
              <img src="images/c4.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Leather Platform Sandales</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c5.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Short Chino short</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c6.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class="card-title fs-sm">T-shirt with Motif</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3 g-5">
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c1.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                
                <h6  class=" fs-sm">Metallic lipstic(Cripsm)</h6 >
                <div class="d-flex border-bottom py2 justify-content-between">
                  <div class="product-rate">
                  <span class="text-accent">$12.<small>99</small>
                  </span>
                </div>
                <div class="star-rating text-warning">
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                  <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                  <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                </div>
      
      
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c2.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Texttile platform Sneakers </h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c3.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Polarised sunglasess</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0 ">
              <img src="images/c4.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Leather Platform Sandales</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c5.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class=" fs-sm">Short Chino short</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card border-0">
              <img src="images/c6.jpg" class="card-img-top" alt="...">
              <div class="card-body p-0">
                <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
                <h6  class="card-title fs-sm">T-shirt with Motif</h6 >
                  <div class="d-flex border-bottom py2 justify-content-between">
                    <div class="product-rate">
                    <span class="text-accent">$12.<small>99</small>
                    </span>
                  </div>
                  <div class="star-rating text-warning">
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star" aria-hidden="true"></i>
                    <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
                    <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
                  </div>
        
        
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>




</div>



  </div>
</div>

<!-- 5.2 -->
<div class="container">
  <div class="row mt-5">

    
<div class="col-lg-7 col-md-7 col-12 px-5">
  <div class="row  g-5">
    <div class="col-lg-4 col-6">
      <div class="card border-0">
        <img src="images/c1.jpg" class="card-img-top" alt="...">
        <div class="card-body p-0">
          <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
          
          <h6  class=" fs-sm">Metallic lipstic(Cripsm)</h6 >
          <div class="d-flex border-bottom py2 justify-content-between">
            <div class="product-rate">
            <span class="text-accent">$12.<small>99</small>
            </span>
          </div>
          <div class="star-rating text-warning">
            <i class=" text-warning fa fa-star" aria-hidden="true"></i>
            <i class=" text-warning fa fa-star" aria-hidden="true"></i>
            <i class=" text-warning fa fa-star" aria-hidden="true"></i>
            <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
            <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
          </div>


          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="card border-0">
        <img src="images/c2.jpg" class="card-img-top" alt="...">
        <div class="card-body p-0">
          <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
          <h6  class=" fs-sm">Texttile platform Sneakers </h6 >
            <div class="d-flex border-bottom py2 justify-content-between">
              <div class="product-rate">
              <span class="text-accent">$12.<small>99</small>
              </span>
            </div>
            <div class="star-rating text-warning">
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
              <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
            </div>
  
  
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="card border-0">
        <img src="images/c3.jpg" class="card-img-top" alt="...">
        <div class="card-body p-0">
          <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
          <h6  class=" fs-sm">Polarised sunglasess</h6 >
            <div class="d-flex border-bottom py2 justify-content-between">
              <div class="product-rate">
              <span class="text-accent">$12.<small>99</small>
              </span>
            </div>
            <div class="star-rating text-warning">
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
              <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
            </div>
  
  
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="card border-0 ">
        <img src="images/c4.jpg" class="card-img-top" alt="...">
        <div class="card-body p-0">
          <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
          <h6  class=" fs-sm">Leather Platform Sandales</h6 >
            <div class="d-flex border-bottom py2 justify-content-between">
              <div class="product-rate">
              <span class="text-accent">$12.<small>99</small>
              </span>
            </div>
            <div class="star-rating text-warning">
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
              <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
            </div>
  
  
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="card border-0">
        <img src="images/c5.jpg" class="card-img-top" alt="...">
        <div class="card-body p-0">
          <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
          <h6  class=" fs-sm">Short Chino short</h6 >
            <div class="d-flex border-bottom py2 justify-content-between">
              <div class="product-rate">
              <span class="text-accent">$12.<small>99</small>
              </span>
            </div>
            <div class="star-rating text-warning">
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
              <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
            </div>
  
  
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-6">
      <div class="card border-0">
        <img src="images/c6.jpg" class="card-img-top" alt="...">
        <div class="card-body p-0">
          <a class="product-meta text-decoration-none small d-block pb-1 text-muted">cosmetic product</a>
          <h6  class="card-title fs-sm">T-shirt with Motif</h6 >
            <div class="d-flex border-bottom py2 justify-content-between">
              <div class="product-rate">
              <span class="text-accent">$12.<small>99</small>
              </span>
            </div>
            <div class="star-rating text-warning">
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star" aria-hidden="true"></i>
              <i class=" text-warning fa fa-star-half-o" aria-hidden="true"></i>
              <i class=" text-muted fa fa-star-o" aria-hidden="true"></i>
            </div>
  
  
            </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class=" col-md-5  bg-light text-end ">
  <div class="p-3">
  <h3 class="mb-1">For Men</h3>
  <a  class="text-danger fw-bold text-decoration-none">Shop For Men
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
  </a>
  </div>
  <div class="mt-5 d-none  overflow-hidden  d-md-block">
  <img src="images/cat-1.jpg" >
</div>
</div>



  </div>
</div>




       <!-- 5thsection -->



       <!-- section6 -->
<div class="container overflo">
  <h2 class="h3 text-center pt-4 pb-4">Shop by brand</h2>
  <div class="row gy-5">
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/01.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/02.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/03.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/04.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/05.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/06.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/07.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/08.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/09.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/10.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/11.png" style="width: 100px;" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py3 pysm-4 mb-grid-gutter" class="text-decoration-none" href="#"><img class="d-block mx-auto py-3" src="images/12.png" style="width: 100px;" alt="Brand"></a></div>
        </div>


</div>

         <!-- section6 -->
         <!-- section-7 -->
         <div class="container pt-md-3 pb-4 mb-lg-2">
          <div class="row mt-5">
            <div class="col-lg-4 col-md-6 p-3">
              <h3>Bestsellers</h3>
              <div class="pb-2 d-flex border-bottom py-3 ">
                <img src="images/o1.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>women colorback Sneakers</h6>
                <div >
                  <span class="me-2">150$<small>.00</small></span>
                </div>
              </div>
                
              </div>


              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o2.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>TH Jeans City Backpack</h6>
                <div >
                  <span class="me-2">150$<small>.00</small></span>
                </div>
              </div>
                
              </div>


              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o3.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>
                  3-Color Sun Stash Hat</h6>
                <div >
                  <span class="me-2">150$<small>.00</small></span>
                </div>
              </div>
                
              </div>


              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o4.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>Cotton Polo Regular Fit</h6>
                <div >
                  <span class="me-2">150$<small>.00</small></span>
                </div>
              </div>
              
                
              </div><a  class="text-danger fw-bold text-decoration-none">read more
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>



            </div>
            <div class="col-lg-4 col-md-6 p-3">
              <h3>New-Arrivalls</h3>
              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o5.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>
                  Cap with Appliqué</h6>
                <div >
                  <span class="me-2">88$<small>.00</small></span>
                </div>
              </div>
                
              </div>


              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o6.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>Girl's T-shirt with Motif</h6>
                <div >
                  <span class="me-2">150$<small>.00</small></span>
                </div>
              </div>
                
              </div>


              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o7.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>Leather Platform Sandals</h6>
                <div >
                  <span class="me-2">78$<small>.00</small></span>
                </div>
              </div>
                
              </div>


              <div class="pb-2 d-flex border-bottom py-3">
                <img src="images/o8.jpg" alt="">
              
              <div class="ps-2 ">
                <h6>Regular Fit Cotton Shirt</h6>
                <div >
                  <span class="me-2">15$<small>.00</small></span>
                </div>
              </div>
              
              </div>
              <a  class="text-danger fw-bold text-decoration-none">read more.
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
                



            </div>
 
            <div class="col-md-6 d-none d-lg-block  overflow-hidden col-lg-4">
              <img src="images/v-banner.jpg" alt="">
            </div> 
        

            </div>



          </div>


         </div>


                 <!-- section-7 -->

                 <!-- section8 -->
<div class="container-fluid px-0">
<div class="row mx-0">
  <div class="col-12 col-sm-6 lightpink py-4">
    <a class="text-decoration-none "><div class=" card-body text-center"><i class=" h3 text-danger fa fa-pencil-square-o" aria-hidden="true"></i>
      <h3 class="h5 text-dark mb-1">Read the blog</h3>
      <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
    </div></a>
  </div>
  <div class="col-12 col-sm-6 bg-light py-4">
    <a class="text-decoration-none "><div class=" card-body text-center"><i class=" h3 text-danger fa fa-instagram" aria-hidden="true"></i>
      <h3 class="h5 text-dark mb-1">Follow on instagram</h3>
      <p class="text-muted fs-sm overflow-hidden">#showwithcartzilla</p>
    </div></a>
  </div>
  <div class="col-6"></div>
</div>

</div>


 <!-- section8 -->

 <!-- section9 -->
 <footer class="bg-dark pt-5">
  <div class="container">
    <div class="row pb-2">
<div class="col-md-4 col-sm-6">
  <div class="pb-2 mb-4">
    <h3 class=" text-light">Shop departments</h3>
    <ul class="fw-bold lh-lg list-unstyled text-light">
      <li><a   class="text-decoration-none text-muted" href="#">Sneakers & Athletic</a></li>
      <li><a   class="text-decoration-none text-muted" href="#">Athletic Apparel</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Sandales</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Jeans</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">shirt&Top</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Shorts</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">T-shirts</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Swimmwear</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Clog-Mules</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Bags&wallet</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Acessories</a></li>
        <li><a  class="text-decoration-none text-muted" href="#">Sunglasses&Eyewear</a></li>
    </ul>
  </div>
</div>
<div class="col-md-4 col-sm-6">
  <div class="">
    <h3 class=" text-light">Account&Shippinginfo</h3>
    <ul class="fw-bold  list-unstyled text-light">
      <li><a   class="text-decoration-none text-muted" href="#">Your Account</a></li>
      <li><a   class="text-decoration-none text-muted" href="#">Shipping rate and policies</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Refund and replacement</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Order-Tracking</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Delivery-info</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">taxes &Fees</a></li>
    </ul>
  </div>

  <div class="">
    <h3 class=" text-light">About Us</h3>
    <ul class="fw-bold  list-unstyled text-light">
      <li><a   class="text-decoration-none text-muted" href="#">About Company</a></li>
      <li><a   class="text-decoration-none text-muted" href="#">Our Team</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Career</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">News</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">Delivery-info</a></li>
      <li><a  class="text-decoration-none text-muted" href="#">taxes &Fees</a></li>
    </ul>
  </div>
</div>
<div class="col-md-4 col-sm-6">
  <div class="">
    <h3 class=" text-light">Stay Informed</h3>
   <div class="mt-4 input-group">
    <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required="">
    <button class="btn btn-danger" type="submit" name="subscribe">Subscribe*</button>
   </div>
   <div class="form-text text-muted opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
  </div>

  <div class="co">
    <h3 class=" text-light my-4">Download our app</h3>
    <div class="container p-0 ">

      <div class="d-flex ">

          <button class="btn btn-dark border rounded app-button mb-3 me-2 d-flex flex-row">
            
            <i class="h3 my-auto fa fa-apple"></i>
            <div class="d-flex flex-column">

              <span class="small">Download the app</span>
              <h6 class="mb-0 h6">App Store</h6>
              
            </div>


          </button>

          <button class="btn btn-dark border  rounded app-button mb-3 d-flex flex-row">
            
            <i class=" fs-4 my-auto fa fa-play"></i>
            <div class="d-flex flex-column">

              <span class="small">Download the app</span>
              <h6 class="mb-0 h6">Google Store</h6>
              
            </div>


          </button>
        
      </div>
      
    </div>
                      

   
</div>

    </div>
  </div>

 </footer>
 <!-- section9 -->
 <!-- section10 -->
 <div class="bg-dark">
 <div class="container">
  <div class="row">
      <div class="col-md-3 col-sm-6">
          <div class="d-flex">
          <i class="my-auto fs-1 fa fa-rocket text-danger" aria-hidden="true"></i>
              <div class="ps-3">
              <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
              <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="d-flex">


        <i class="my-auto fs-1 fa fa-usd text-danger" aria-hidden="true"></i>
            <div class="ps-3">
            <h6 class="fs-base text-light mb-1">Money Back Gaurantee</h6>
            <p class="mb-0 fs-ms text-light opacity-50">We return money within 30days</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="d-flex">
        <i class="fa fa-" aria-hidden="true"></i>

      <i class=" my-auto fs-1 fa fa-headphones text-danger" aria-hidden="true"></i>
          <div class="ps-3">
          <h6 class="fs-base text-light mb-1">24/7 Customer support</h6>
          <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 Customer support </p>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="d-flex">
    <i class="my-auto fs-1 fa fa-credit-card text-danger" aria-hidden="true"></i>
        <div class="ps-3">
        <h6 class="fs-base text-light mb-1">Secure online payment</h6>
        <p class="mb-0 fs-ms text-light opacity-50">We provide SSL/Secure certificate</p>
        </div>
    </div>
</div>
  
  
 </div>


 <div class="row py-5 border-top mt-4">
  <div class="col-sm-6 my-auto py  ">


<div class="input-group  justify-content-sm-start justify-content-center d-flex">
  <a class="bg-dark"><img src="images/logo0.png " width="117px" alt=""></a>

  <button class="btn btn-outline-secondary  py-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img class="imgs my-1" src="images/flag.png" alt="">
    Eng/$</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
 

</div>

<div class="mt-2 w-100 text-sm-start justify-content-center">
  <ul class=" flex-wrap justify-content-center justify-content-sm-start d-flex list-unstyled">
    <li class="text-muted me-4 fw-bold">Outlets</li>
 
    <li class="text-muted me-4 fw-bold">Affiliats</li>
    <li class="text-muted me-4 fw-bold">support</li>
    <li class="text-muted me-4 fw-bold">Privacy</li>
    <li class="text-muted  me-4 fw-bold">Terms and Use</li>
  </ul>
</div>
   
    </div>
    <div class="col-sm-6 iconsec ">
      
      <ul class=" d-flex list-unstyled justify-content-center justify-content-sm-end text-white mb-3 ">
        <li><a ><i class="p-2 me-1 rounded fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a><i class=" p-2 me-1 rounded fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a><i class="p-2 me-1 rounded fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a><i class="p-2 me-1 rounded fa fa-pinterest" aria-hidden="true"></i></a></li>
       <li> <a><i class="p-2  me-1 rounded fa fa-youtube-play" aria-hidden="true"></i><a></li>
        
      </ul>
    
   <div class="text-center text-sm-end">
      
        <img width="187" src="images/cards-alt.png" alt="">
       
      </div>
    </div>
   
    
    <div class="text-center text-sm-start"><a class=" fs-md xs text-muted small text-decoration-none">© All rights reserved. Made by Createx Studio</a></div>
   
    
  </div>
  
 

 </div>
</div>
</div>






  <!-- section10 -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
