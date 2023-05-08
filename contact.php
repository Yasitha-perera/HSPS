
<?php
session_start();
error_reporting(0);
include('conn.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=($_POST['message']);
$query=mysqli_query($conn,"insert into contacts(name,email,mobile,message) values('$name','$email','$contact','$message')");
if($query)
{
	echo "<script>alert('Thank you.! We Will Contact you');</script>";
}
else{
echo "<script>alert('Please Enter Correct Data.Something is worng');</script>";
}
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>HSPS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<style>
        html,
body {
    margin: 0;
    font-size: 100%;
    font-family: 'Dosis', sans-serif;
    background-image:url('https://images5.alphacoders.com/692/692621.jpg');
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
    </style>
</head>


<body>
	<!-- banner-inner -->
    <div id="demo-1" class="page-content">
        <div class="dotts">
            <?php include'header.php'; ?>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
	<ol class="breadcrumb justify-content-left">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact Us</li>
	</ol>
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Get Intouch</span>Contact Us</h3>
				<!---728x90--->
				<div class="container">
						<div class="address row mb-5">
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-map"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Address</h6>
										<p> 
										B26,Kanta,Colombo,Sri Lanka 
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Email</h6>
										<p>Email :
											<a href="mailto:example@email.com"> workguru@gmail.com</a>
										</p>
									</div>
		
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Phone</h6>
										<p>+1 234 567 8901</p>
		
									</div>
								</div>
							</div>
						</div>
					</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9414.45292587978!2d79.85889494187145!3d7.20773595692089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1682529585414!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					</div>
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Send us a message</h4>
							<form  method="post">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Mobile</label>
									<input class="form-control" type="number" name="contact" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" name="message" placeholder=""></textarea>
								</div>
								<div class="input-group1">
									<input class="form-control" type="submit" value="Submit" name="submit">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
	<!---728x90--->
	<!--footer -->
	</body>
	<!-- //footer -->

	 <!--footer -->
    <?php include'footer.php'; ?>
    <!-- //footer -->
	<!-- js -->
	<!--/slider-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--//slider-->
	<!--search jQuery-->
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->

	
	<!-- password-script -->
	
	<!-- //password-script -->
	<!-- //js -->
	<script src="js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
</body>

</html>