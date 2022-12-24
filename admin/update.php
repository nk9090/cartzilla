<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      include 'inc/connect.php';
      if (isset($_POST['edit_btn']))
      {
      $id=$_POST['edit'];
      $query = "SELECT * FROM addproducts WHERE id='$id' ";
      $query_run = mysqli_query($conn, $query);
   
         while($res= mysqli_fetch_array($query_run))
         {
            ?>
            <?php
             include 'inc/header.php';
             include 'inc/sidebar.php';
             include 'inc/topbar.php';
             ?>
            <div class="container">
              <h2>UPDATE DATA</h2>
              <hr>
              <form class="" action="updt.php" method="POST" enctype="multipart/form-data" >

           <input type="hidden" name="edit_id" value="<?php echo $res['id'];?>">

                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Enter Product Name"
                          value="<?php echo $res['pname'];?>"
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
                          value="<?php echo $res['pcatg'];?>"
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
                          value="<?php echo $res['pquant'];?>"
                          name="pquant"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Product Price"
                          value="<?php echo $res['price'];?>"
                          name="price"
                        />
                      </div>        
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Pic</label>
                        <input class="form-control" type="file" id="formFile" name="pic" value=<?php echo $res['pic']?>>
                     </div>
                     <!-- </form> -->
                     <!-- <form action="updt.php" method="POST"> -->                      
                      <button type="submit" name="update" class=" w-100 btn btn-primary">UPDATE DATA</button>
                      </form>
            </div>         
          <?php    
           include 'inc/footer.php';    
        }
      }
    ?>
</body>
</html>
        