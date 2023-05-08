<?php
session_start();
error_reporting(0);
include('conn.php');
$find="%{$_POST['category']}%";
$find2="%{$_POST['subcategory']}%";
if(isset($_GET['action'])){
    $id=intval($_GET['id']);
    }
  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>HSPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Got-It" />
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
        <li class="breadcrumb-item active">Candidate List</li>
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
                <div class="row choose-main mt-5">
                    
                    <div class="col-lg-12 job_info_left">
                        <!--/ Emply List -->
                        <?php

                       

        $query=mysqli_query($conn,"select service.*,category.categoryName as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as subcatid from service join category on category.id=service.categoryid join subcategory on subcategory.id=service.subcategoryid where service.categoryid like '$find' and service.subcategoryid like '$find2'");

while($row=mysqli_fetch_array($query))
{
  


?>
                        <div class="emply-resume-list row mb-3">
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img src="service_providerimages/<?php echo $row['image'] ?>" class="img-fluid" alt="">
                                </div>
                                <div class="emply-resume-info">
                                    <h4><a href="candidates_single.html"><?php echo $row['firstname'].' '.$row['lastname'] ?></a></h4>
                                    <h5 class="mt-2"><span><?php echo $row['catname'] ; ?></span> ( <?php echo $row['subcatname'] ; ?> )</h5>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $row['location'] ; ?></p>
                                    <ul class="links_bottom_emp mt-2">
                                        <li><a href="candidates_single.html"><i class="far fa-envelope"></i> <span class="icon_text"> <?php echo $row['email'] ; ?></span></a></li>
                                        <li><a href="#"><i class="fas fa-eye"></i> <span class="icon_text"> <?php echo $row['experience'] ?></span>Year</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3 emp_btn text-right">
                               <a href="book_now.php?pid=<?php echo htmlentities($row['id']);?>" class="aply-btn ">Book Now</a>
                            </div>
                        </div>
                        <!--// Emply List -->
                       <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//preocess-->
<!---728x90--->
    <!--footer -->
    <?php include'footer.php;' ?>
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