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
    html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  overflow-x: hidden; 
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
  </style>
    </head>
  <body>
    
<?php include ('nav.php') ?>
<br>
<br>
<!--carousel-->
<div class="container-fluid p-3">
<!--first Child-->

</div>

<!--third child-->
<div class="div bg-light mt-2 mb-2 border border-success-subtle">
  <h2 class= "text-center">All Products</h2>
</div>

<!--fourth child-->
<div class="row mx-1">
  <div class="col-md-10 order-md-1 order-2">
    <!--products-->
    <div class="row">

      <!--fetching products-->
      <?php
      //Calling functions
      get_unique_categories();
      view_details();
      ?>
      <!--Row end-->
    </div>
    <!--col end-->
  </div>
  <div class="col-md-2 bg-secondary p-0 order-md-2 order-1">

    <!--side nav-->
    
      <ul class="navbar-nav me-auto text-center ">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link"><h4>Categories</h4></a>
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
    
  </body>
</html>