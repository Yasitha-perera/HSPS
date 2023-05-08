<?php
session_start();
error_reporting(0);

  ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>HSPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
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
    background-image:url('https://i.pinimg.com/736x/0e/b9/3a/0eb93adb206142a1edb90e3db0d4b99a.jpg');
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
    </style>
</head>

<body>
    <!-- banner-inner -->
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
        <li class="breadcrumb-item active">How it works</li>
    </ol>
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Some Info About Got It</span>How It works</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    <div class="col-lg-6 work-grid-right">
                        <div class="work-info">
                            <h5>
                                <span class="post-color">Step : 1</span>
                            </h5>
                            <h4 class="post my-3">Register an account</h4>
                            <p>Register to our Website to find your desire service according to your requirements and needs.Also you will Register as Service Provider to find online work.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 work-grid-left">
                        <img src="images/reg.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row my-5">

                    <div class="col-lg-6 work-grid-left">
                        <img src="images/g7.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 work-grid-right">
                        <div class="work-info">
                            <h5>
                                <span class="post-color">Step : 2</span>
                            </h5>
                            <h4 class="post my-3">Specify & Search Your Work</h4>
                            <p>Specify your Service details and get work according to your work profile. </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 work-grid-right">
                        <div class="work-info">
                            <h5>
                                <span class="post-color">Step : 3</span>
                            </h5>
                            <h4 class="post my-3">Online Service Booking</h4>
                            <p>Clients can book their needs service and get online service booking benefits. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 work-grid-left">
                        <img src="images/servicefrom.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//preocess-->
    
    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Online Service Booking</span>Make a Difference to find service providers.</h3>
                    <p></p>
                    <div class="resume">
                        <a href="register.php" data-toggle="modal" data-target="#exampleModalCenter2">
                            <i class="far fa-user"></i> Create Acccount</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    

    <!--footer -->
   <?php include'footer.php'; ?>

    <!--//model-form-->
    <!-- js -->
    <!--/slider-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
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