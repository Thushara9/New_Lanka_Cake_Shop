<?php
include('includes/connect.php');
include('functions/common_functions.php');
@session_start();
?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Contact us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	

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
 overflow-x: hidden; 
}
    </style>
	<body class="backgrc">

  <?php include ('nav.php') ?>

    
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Us</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Inquiry</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				           
				      		</div>
									<form method="POST" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Name" required="required" >
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" required="required">
												</div>
											</div>
											<div class="col-md-12 mt-4">
												<div class="form-group">
													<input type="text" class="form-control" name="subjects" id="subjects" placeholder="Subject" required="required">
												</div>
											</div>
											<div class="col-md-12  mt-4">
												<div class="form-group">
													<textarea class="form-control" name="user_message" id="user_message" cols="30" rows="7" placeholder="Message" required="required"></textarea>
												</div>
											</div>
											<div class="col-md-12  mt-4  d-flex">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary" name="Send_Message">
													<div class="submitting">

                          </div>
                          
                          
												</div>
                        <a href="index.php" class="btn btn-danger mx-4">Cancel</a>
											</div>
										</div>
									</form>

								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start ">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker mx-3"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p class="text-light"><span>Address:</span>     No:05,Nawala Road,Rajagiriya</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone  mx-3"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p class="text-light"><span>Phone:</span> <a  href="tel://1234567920" class="text-light">0112-123-123</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane  mx-3"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p class="text-light"><span>Email:</span> <a href="mailto:info@yoursite.com" class="text-light">NewLanka@gmail.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe  mx-3"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p class="text-light"><span>Website</span> <a href="#" class="text-light">NewLanka.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


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

<?php


if(isset($_POST['Send_Message'])){
  $user_name=mysqli_real_escape_string($con, $_POST['user_name']);
  $user_email=mysqli_real_escape_string($con, $_POST['user_email']);
  $subjects=mysqli_real_escape_string($con, $_POST['subjects']);
  $user_message=mysqli_real_escape_string($con, $_POST['user_message']);
  
  
  //insert query
  $insert_inquiry = "INSERT INTO `inquiry` (cust_name, user_email, subjects, user_message, date) 
    VALUES ('$user_name', '$user_email', '$subjects', '$user_message', NOW())";
    $result_query = mysqli_query($con, $insert_inquiry);
    if($result_query){
      echo "<script>alert('Successfully inserted the inquiry.')</script>";
    }
  }

  ?>


	</body>
</html>