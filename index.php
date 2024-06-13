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
    <title>New Lanka</title>
     <!--font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--boostrap css link-->
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!--font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--CSS Files-->
 <link rel= "stylesheet" href="homec.css">
 <link rel= "stylesheet" href="style.css">
</head>


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

.backgrc{
 
  background-image: linear-gradient(to bottom, rgba(228,255,255,0.9), rgba(228,255,255,0.9)), url('images/background.jpg');
}
    </style>
  <body class="backgrc">
    
<?php include ('nav.php') ?>

<!--carousel-->
<div class="container-fluid p-3">
<!--first Child-->
<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="https://wallpaperaccess.com/full/1986105.jpg" class="d-block w-100 c-img" alt="slide 1">
      <div class="carousel-caption top-0 mt-5 ">
        <h1 class="h-item">Discover the Perfect Cake<br> for Any Occasion</h1>
        <div class="btn btn-primary mt-2">Order Now</div>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="https://images5.alphacoders.com/427/427149.jpg" class="d-block w-100 c-img" alt="slide 2">
      <div class="carousel-caption  top-0 mt-5 ">
      <h1 class="h-item">Customize <br>Your Dream Cake Today</h1>
        <div class="btn btn-primary mt-2 ">Order Now</div>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="https://a-static.besthdwallpaper.com/chocolate-cake-wallpaper-1600x900-3144_47.jpg" class="d-block w-100 c-img" alt="slide 3">
      <div class="carousel-caption top-0 mt-5 ">
        <h1 class="h-item">The Ultimate<br> Cake Experience</h1>
        <div class="btn btn-primary mt-2 ">Order Now</div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--end-carousel-->
</div>

<!--third child-->
<div class="div bg-light mt-3">
  <h2 class= "text-center">Popular Items</h2>
</div>



<!--secend carousal p-items-->
<div class="container-fluid p-5 ">
  <!--first Child-->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
      
        <div class="row">
            <div class= "col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/c1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate Cake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
            </div>
            <div class= "col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/c2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Banana Cake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
            </div>
            <div class= "col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/c3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate Coconut Cake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
            </div>
          </div>
      </div>
      <div class="carousel-item">
      <div class="row">
            <div class= "col-md-4 ">
            <div class="card " style="width: 18rem;">
  <img src="./images/Chocolate mud cupcakes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate mud Cupcakes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Carte</a>
  </div>
</div>
            </div>
            <div class= "col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/Lemon yoghurt cake with syrup.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lemon Yoghurt Cake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
            </div>
            <div class= "col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/Carrot and walnut cake.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Carrot and Walnut Cake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
            </div>
          </div>
    </div>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
 <!--end secend carousal p-items-->

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
    
  </body>
</html>