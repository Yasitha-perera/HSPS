<?php 
session_start();
error_reporting(0);
include'conn.php'; ?>

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
    background-image:url('https://vip-go.shutterstock.com/blog/wp-content/uploads/sites/5/2020/05/shutterstock_359492192.jpg?w=750');
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
        <li class="breadcrumb-item active">Services</li>
    </ol>
    <!-- banner-text -->
     <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
            <!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Some Info</span>All Service Provider</h3>
                    <!---728x90--->
               </div>
               <div class="row t-in">
                                    <div class="col-lg-12 text-info-sec">
                                        <!--/job1-->
<?php

$query=mysqli_query($conn,"select service.*,category.categoryName,subcategory.subcategory from service join category on category.id=service.categoryid join subcategory on subcategory.id=service.subcategoryid where service.status = '1'");

while($row=mysqli_fetch_array($query))
{
         ?>
                                        <div class="job-post-main row">
                                            <div class="col-lg-10 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <img src="images/ser.png" style="height: 50px;width: 50px;">
                                                </div>
                                                <div class="job-single-sec">
                                                    
                                                    <h4>
                                                        <a href="#"><?php echo $row['categoryName']; ?></a>
                                                    </h4>
                                                    <p class="my-2"><?php echo $row['subcategory']; ?></p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i><?php echo $row['location']; ?></li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> <?php echo $row['address']; ?></li>
                                                        <li>
                                                           ₹ <?php echo $row['rate']; ?>  / Service</li>
                                                    </ul>
                                               
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-2 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Full Time</span>
                                               <a href="book_now.php?pid=<?php echo htmlentities($row['id']);?>" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div><br> <?php } ?>
                                        <!--//job1-->
                                        
                                        
                                    </div>
                                   

                                </div>
           </div>
       </section>
    <!--//preocess-->
    <!--//Register-->
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