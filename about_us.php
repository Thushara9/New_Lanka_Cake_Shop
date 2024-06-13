<?php
include('includes/connect.php');
include('functions/common_functions.php');
@session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!--boostrap css link-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!--font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
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

<body>
<?php include ('nav.php') ?>
<br><br>
    <!-- Main Content -->
  <div class="container my-4 ">
    <h1 class="head">About Us</h1>
    <div class="row">
      <div class="col-md-6 mt-4">
        <p>We are a team of passionate bakers who believe that every occasion deserves a special cake. Our mission is to create delicious and beautiful cakes that bring joy to our customers.</p>
        <p>Our cakes are made with the highest quality ingredients, and we offer a wide variety of flavors and designs to choose from. Whether you need a birthday cake, wedding cake, or just want to treat yourself, we have something for everyone.</p>
        <p>At Cake Ordering System, we believe in providing exceptional customer service. We will work with you to create the perfect cake for your occasion, and we are always happy to answer any questions you may have.</p>
        <p>Thank you for choosing Cake Ordering System for your cake needs. We look forward to serving you!</p>
      </div>
      <div class="col-md-6 mt-4">
       <img src="images/istockphoto-624925522-612x612.jpg" alt="" class="  rounded-5">
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
<li><a href="#"> Home</a></li>
<li><a href="#"> All Products</a></li>
<li><a href="#"> About Us</a></li>
<li><a href="#"> Contact Us</a></li>
</ul>
<h1 class="f_head">NEW LANKA </h1>
<P> @ Copyrights 2023 || All Rights Reserve</p>

</footer>
</body>
</html>