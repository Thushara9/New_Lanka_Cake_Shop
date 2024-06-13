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
    <title>Products</title>
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


.backg{

  background: rgb(0, 6, 65);
  box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
}

.backgrc{
 
  background-image: linear-gradient(to bottom, rgba(228,255,255,0.9), rgba(228,255,255,0.9)), url('images/background.jpg');

}
  </style>
    </head>
  <body class="backgrc">
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
      
      <form class="d-flex ms-auto" action="search_product.php" method="post">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
  
      </form>
      <ul class="navbar-nav mb-lg-0 ms-auto ">
      <li class="nav-item mx-1 ">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg mt-3"></i><sup><?php cart_item_number();?></sup></a>
        </li>
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

<!--calling cart Function-->
<?php
cart();
?>
</div>

<br>
<br>
<!--carousel-->
<div class="container-fluid p-3">
<!--first Child-->

</div>

<!--third child-->
<div class="div bg-light mt-2 mb-4 border border-success-subtle">
  <h2 class= "text-center">All Products</h2>
</div>

<!--fourth child-->
<div class="row mx-1">
  <div class="col-md-10 order-md-1 order-2">
    <!--products-->
    <div class="row">
      <!--fetching products-->
      <?php
      //Calling function
      view_details();
      //search_product();
     getproducts();
      get_unique_categories();
    
     // $ip = getIPAddress();  
      //echo 'User Real IP Address - '.$ip; 
      ?>
      <!--Row end-->
    </div>
    <!--col end-->
  </div>
  <div class=" col-md-2 backg p-0 order-md-2 order-1 rounded-4">

    <!--side nav-->
    
      <ul class="navbar-nav me-auto text-center ">
        <li class="nav-item bg-dark  rounded-3">
          <a href="#" class="nav-link"><h4 class = "text-light">Categories</h4></a>
        </li>
        <?php
        //Calling function  
        getcategories();
        ?>
      </ul>
    </div>
  </div>
</div>
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
<li><a href="index.php"> Home</a></li>
<li><a href="catagories.php"> All Products</a></li>
<li><a href="about_us.php"> About Us</a></li>
<li><a href="contact_us.php"> Contact Us</a></li>
</ul>
<h1 class="f_head">NEW LANKA </h1>
<P> @ Copyrights 2023 || All Rights Reserve</p>

</footer>



    <!--boostrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>