<?php
  require_once "./config.php";
  

  

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
   <?php include("./includes/header.php") ?>
</head>
  <body>
    <!-- nav bar start -->
  <?php include("./includes/navbar.php") ?>
    <!-- nav bar end -->

    <div class="container mt-5">
  <h1 class="mb-4">Our Products</h1>
  <div class="row">
    <?php
    $show = "SELECT * FROM products";
    if($result=mysqli_query($conn,$show)) {
      if(mysqli_num_rows($result)> 0) {
        $i=1;while($row=mysqli_fetch_array($result)) {?>

    <div class="col-md-4">
      <div class="card product-card">
        <!-- changed image src using php  -->
        <img src="uploads/<?php echo $row['product_image'];?>" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <!-- giving product name using php -->
          <h5 class="card-title"><?php echo $row['product_name'];?></h5>
          <!-- giving product description using php -->
          <p class="card-text"><?php echo $row['description'];?></p>
          <!-- giving product price using php -->
          <p class="card-text"><strong>Price:</strong>Rs. <?php echo $row['price'];?></p>
          <a href="#" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>
    <?php
        }
        mysqli_free_result($result);
      }else{
        echo"No Products";
      }
        }else{
          echo "Failed to fetch";
        }
    ?>
    
    <!-- Add more product cards as needed -->
  </div>
</div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script` -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>