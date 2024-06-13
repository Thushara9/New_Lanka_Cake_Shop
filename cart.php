<?php
include('includes/connect.php');
include('functions/common_functions.php');
@session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CART</title>
     <!--boostrap css link-->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!--font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--CSS Files-->
 <link rel= "stylesheet" href="homec.css">
 <link rel= "stylesheet" href="style.css">
</head>

<style>
    /*  CSS code here */
    html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  overflow-x: hidden; 
}
.cart_img{
    object-fit:contain;
}
.nj{
	width: 60px;
	height: 60px;
	font-size: 3em;
	line-height: 30px;
	border-radius: 10px;
	outline: none;
	border: none;
	color: #fff;
	cursor: pointer;
	background: transparent;
	box-shadow: inset -2px -2px 2px rgba(255,255,255,.2),
				inset 2px 5px 15px rgba(0,0,0,.5);
}


footer{
    position: relative;
    width: 100%;
    background: #3586ff;
    min-height: 100px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    flex-direction: column;

}
footer .footer_h{
text-align: center;
}

footer .social_icon,
footer .menu{
    position: relative;
    display: flex;
    justify-content:center;
    align-items:center;
    margin: 10px 0;
    flex-wrap: wrap;
}
footer .social_icon li, footer .menu li{
    list-style: none;
    
}



footer .menu li a{
    font-size: 1.2em;
    color: white;
    margin: 0 10px;
    display:inline-block;
    transition: 0.5s;
    text-decoration: none;
    opacity:0.75;

}

footer .menu li a:hover{
    opacity: 1;
    }

    footer p{
        color: white;
    }

    footer .waves{
        position: absolute;
        top: -50px;
        left: 0;
        width: 100%;
        height: 100px;
        background: url('images/wave.png');
        background-size: 1000px 100px;
    }

    footer .waves#wave1{
        z-index: 1000;
        opacity:1;
        bottom: 0;
        animation: animatewave 4s linear infinite;

    }
    footer .waves#wave2{
        z-index: 999;
        opacity:0.5;
        bottom: 10px;
        animation: animatewave_02 4s linear infinite;

    }

    footer .waves#wave3{
        z-index: 1000;
        opacity:0.2;
        bottom: 15px;
        animation: animatewave 3s linear infinite;

    }
    footer .waves#wave4{
        z-index: 999;
        opacity:0.7;
        bottom: 20px;
        animation: animatewave_02 3s linear infinite;

    }
    @keyframes animatewave
    {
        0%
        {
            background-position-x: 1000px;
        }
        100%
        {
        background-position-x:0px;
    }
}
@keyframes animatewave_02
    {
        0%
        {
            background-position-x: 0px;
        }
        100%
        {
        background-position-x:1000px;
    }
}
.backgrc{
 
 background-image: linear-gradient(to bottom, rgba(228,255,255,0.9), rgba(228,255,255,0.9)), url('images/background.jpg');

}
  </style>
    </head>
  <body class ="backgrc">
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
      
      
      <ul class="navbar-nav mb-lg-0 ms-auto ">
      <li class="nav-item mx-1 ">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg mt-3"></i><sup><?php cart_item_number();?></sup></a>
        </li>
        <?php
        if(!isset($_SESSION['user_email'])){
          echo "<li class='nav-item mx-1 '>
          <a class='nav-link' href='./users_area/user_login.php'><button type='button' class='btn btn-dark btn-sm mb-2 '>Login</button></a>
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

<!--calling cart Function-->
<?php
cart();
?>
</div>
<br>
<br>
<div class="container-fluid p-3">
  <!--first Child-->
  <div class="div bg-light mt-2 mb-2 border border-success-subtle">
    <h2>MY CART</h2>
  </div>
  <!--second child Child-->
  <div class="container">
    <div class="row">
      <form action="" method="POST">
        <table class="table table-bordered text-center">
          <thead>
    
    
    <!--php code to display data-->
    <?php

$ip=getIPAddress();
$total_price=0;
$cart_query= "SELECT * FROM `cart_details` WHERE ip_address='$ip'";
$result=mysqli_query($con,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){

echo"<tr>
<th>Product Title</th>
<th>Product Image</th>
<th>Qty</th>
<th>Total Price</th>
<th>Remove</th>
<th colspan='2'>Action</th>
</tr>
</thead>
<tbody>";


while($row=mysqli_fetch_array($result)){
  $product_id=$row['product_id'];
  $select_products="SELECT * FROM `products` WHERE product_id='$product_id'";
  $result_products=mysqli_query($con,$select_products);
  while($row_product_price=mysqli_fetch_array($result_products)){
    $product_price=array($row_product_price['product_price']);
    $price_table=$row_product_price['product_price'];
    $product_title=$row_product_price['product_title'];
    $product_image=$row_product_price['product_image'];
    $product_values=array_sum($product_price);
    $total_price+=$product_values;  
    
    ?>

    <tr>
      
      <td><?php echo $product_title?></td>
      <td><img src="./admin_area/product_images/<?php echo $product_image?>" alt= "" class="cart_img" style='width: 9rem; height: 8rem;' ></td>
      <td><input type="text" value="1"  name="qty"  class="form-input w-25"></td>

      
      <?php
$ip=getIPAddress();
if(isset($_POST['update_cart'])){
  
  $quantities=$_POST['qty'];
  $update_cart=" UPDATE `cart_details` SET quantity=$quantities WHERE
ip_address='$ip'";
$result_products_quantity=mysqli_query($con,$update_cart);
$total_price=$total_price*$quantities;

}


?>

<td> <?php echo $price_table?></td>
<td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"></td>
      <td>
        
        <input type="submit" value="Update" class="bg-primary mt-2 border-0 px-2" name="update_cart">
        <!--<button class="bg-primary mt-2 border-0 px-2">Update</button>-->
        <!--<button class="bg-danger mt-2 border-0 px-2">Remove</button>-->
        <input type="submit" value="Remove" class="bg-danger mt-2 border-0 px-2" name="remove_cart">
        
      </td>
    </tr>
    
    <?php }}}
    
    else{
      echo "<h2 class='text-center text-danger'>Your cart is currently empty.</h2>";
    }
    
    ?>
   
  </tbody>
</table>
    <!--Subtotal-->
    <div class="d-flex mb-4">
      
      <?php
$ip=getIPAddress();

$cart_query= "SELECT * FROM `cart_details` WHERE ip_address='$ip'";
$result=mysqli_query($con,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){

echo "<h4 class='px 3'><strong>SUB TOTAL:Rs.$total_price.00</strong></h4>
<input type='submit' value='Return to Shop' class='bg-primary mx-3 border-0 px-2' name='Return_to_Shop'>
       <button class='bg-secondary mx-3 border-0 px-2'> <a href='./users_area/checkout.php'class='text-light text-decoration-none'>Proceed to Checkout</a></button>";
}else{
  echo"<input type='submit' value='Return to Shop' class='bg-primary mx-3 border-0 px-2' name='Return_to_Shop'>";
}
if(isset($_POST['Return_to_Shop'])){
  echo"<script>window.open('catagories.php','_self')</script>";
}


      ?>
      
    </div>

    </div>
</div>
</form>
 <!--Function to remove cart items-->

 <?php
function remove_cart_item() {
  global $con;
  if (isset($_POST['remove_cart'])) {
    foreach ($_POST['removeitem'] as $remove_id) {
      echo $remove_id;
      $delete_query = "DELETE FROM `cart_details` WHERE product_id = $remove_id";
      $run_delete = mysqli_query($con, $delete_query);
      if ($run_delete) {
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
}

remove_cart_item();
?>

<br>
<br>
<br>
<br>
<br>
<br>
 <footer>

<div class="waves">
    <div class="waves" id="wave1"></div>
    <div class="waves" id="wave2"></div>
    <div class="waves" id="wave3"></div>
    <div class="waves" id="wave4"></div>
</div>




<ul class="menu">
<li><a href="#"> Home</a></li>
<li><a href="#"> All Products</a></li>
<li><a href="#"> About Us</a></li>
<li><a href="#"> Contact Us</a></li>
</ul>
<h1 class="f_head">NEW LANKA </h1>
<P> @ Copyrights 2023 || All Rights Reserve</p>

</footer>

    <!--boostrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>