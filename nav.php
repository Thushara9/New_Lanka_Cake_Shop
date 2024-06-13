
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
     <!--boostrap css link-->
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!--font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--CSS Files-->
 <link rel= "stylesheet" href="style.css">
<style>
  .srch{
    margin-top:150px;
  }
  </style>

</head>
<body>

<!--Navbar-->
<div class="container-fluid p-0">
<!--first Child-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <img src= "./images/logo.png"  alt="" class="logo">
      <a class="navbar-brand" href="index.php">New Lanka</a>
      <ul class="navbar-nav mx-5  mb-2 mb-lg-0">
        <li class="nav-item  mx-3">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item  mx-3">
        <a class="nav-link active" aria-current="page" href="catagories.php">All Products</a>
        </li>
        <li class="nav-item  mx-3">
        <a class="nav-link active" aria-current="page" href="about_us.php">About Us</a>
        </li>
        <li class="nav-item  mx-3">
          <a class="nav-link active" aria-current="page" href="contact_us.php">Contact Us</a>
        </li>
      </ul>
      
      <form class="d-flex ms-auto " action="search_product.php" method="POST">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" name="search">
      <input type="submit" value="search" class="btn btn-outline-success" name="search_data_product">
      </form>
      <ul class="navbar-nav mb-lg-0 ms-auto ">
      <li class="nav-item mx-1 ">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg mt-3"></i><sup><?php cart_item_number();?></sup></a>
         
          <?php
 if(!isset($_SESSION['user_name'])){
  echo " <li class='nav-item  mx-1'>
  <a class='nav-link active' aria-current='page' href='index.php'></a>
</li>";
}else{
  echo "<li class='nav-item  '>
  <a class='nav-link active ' aria-current='page' href='./users_area/profile.php'>".$_SESSION['user_name']."</a>
</li>";
}


        if(!isset($_SESSION['user_name'])){
          echo "<li class='nav-item mx-1 '>
          <a class='nav-link' href='./users_area/user_login.php'><button type='button' class='btn btn-dark btn-sm mb-2'>Login</button></a>
        </li>";
        }else{
          echo "<li class='nav-item mx-1 '>
          <a class='nav-link' href='./users_area/user_logout.php'><button type='button' class='btn btn-dark btn-sm mb-2'>Logout</button></a>
        </li>";
        }
        
        
        ?>
      </ul>
      
    </div>
  </div>
</nav>
<!--end-Navbar-->
</div>

 <!--boostrap js link-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
