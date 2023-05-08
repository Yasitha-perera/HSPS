<?php
session_start();
error_reporting(0);
include('conn.php');
  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>HSPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <script>
function getSubcat(val) {
    $.ajax({
    type: "POST",
    url: "get_subcat.php",
    data:'cat_id='+val,
    success: function(data){
        $("#subcategory").html(data);
    }
    });
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
</head>
<style>
    html,
    body{
        background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQCtUgCANakYg52oXq-pPxgJ_O_sPA2mVteMYYJl7ITli9el3I_MRrodGKnHWvPCISWyM&usqp=CAU') ;
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
</style>
<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["images/ban1.jpg","images/ban3.jpg", "images/ban4.jpg", "images/plumber1.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            
            <?php include'header.php'; ?>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Find Services You Want</span> .
                    <span>In Your city.</span>
                </h3>
                <p>Your services search starts and ends with us.</p>

                <form action="search_service.php" method="post" class="ban-form row">
                  <!--  <div class="col-md-3 banf">
                        <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                    </div> -->
                    <div class="col-md-4 banf">
                    <select name="category" class="form-control" onChange="getSubcat(this.value);"  required >
                    <option value="">Select Category</option> 
                    <?php $query=mysqli_query($conn,"select * from category");
                    while($row=mysqli_fetch_array($query))
                    {?>

                    <option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
                    <?php } ?>
                    </select>
                    </div>
                    <div class="col-md-4 banf">
                        <select   name="subcategory"  id="subcategory" class="form-control" required>
                        </select>

                    </div>
                    <div class="col-md-4 banf">
                        <button class="btn1" type="submit">FIND SERVICE
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our Main</span>Popular Services Categories</h3>
                <div class="row populor_category_grids mt-5">
                    <div class="col-md-3 category_grid">
                        <div class="view view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-tools"></i>
                                <h3>Plumbers</h3>
                                <p>(Pipe fitting/Water Leakges, Basin & sink etc..)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/plumber.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view1 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-hard-hat"></i>
                                <h3>Electricians</h3>
                                <p>(AC,Refrigerator,Washing Machine,Geyser etc.. )</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/electrician.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 category_grid">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-paint-roller"></i>
                                <h3>Home Painters </h3>
                                <p>(Interior and Exterior,Door Painters etc..)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/painter.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view3 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-user-shield"></i>
                                <h3>Saloan At Home</h3>
                                <p>(Make-Up,Hair-style,Mehndi,Massage etc..)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/salon.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3 category_grid">
                        <div class="view view4 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-certificate"></i>
                                <h3>Home Cleaning </h3>
                                <p>(Full home Deep cleaning etc..)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/home.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view5 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-house-damage"></i>
                                <h3>Construction </h3>
                                <p>(Building Work Repairs,New Construct)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/c.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->
    <!--/process-->
    <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
			
                    <span>Our Services Providers</span>Latest Services At Our Home</h3>
					<!---728x90--->
                <div class="tabs mt-5">
                    <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Our 5 <i class="fas fa-star"></i> Star Profile Service Providers</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->
<?php

$query=mysqli_query($conn,"select service.*,category.categoryName,subcategory.subcategory from service join category on category.id=service.categoryid join subcategory on subcategory.id=service.subcategoryid where service.status = '1'");

while($row=mysqli_fetch_array($query))
{
         ?>
                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <img src="images/ser.png" height="65" width="65">
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
                                                            <?php echo $row['rate']; ?> ₹ / Service</li>
                                                    </ul>
                                               
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Full Time</span>
                                               <a href="book_now.php?pid=<?php echo htmlentities($row['id']);?>" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div><br> <?php } ?>
                                        <!--//job1-->
                                        
                                        
                                    </div>
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/4ser.png" alt=" " class="img-fluid" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/4ser.png" alt=" " class="img-fluid" />
                                    </div>
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->
                                        <?php



$query=mysqli_query($conn,"select booking.*,service.address as provideraddress,service.location as providerloc,service.rate as rate,category.categoryName as providercat,subcategory.subcategory as providersubcat from booking inner join service on booking.serviceid=service.id inner join category on booking.catid=category.id inner join subcategory on booking.subid=subcategory.id where booking.service_rating = 5");

while($row=mysqli_fetch_array($query))
{
         ?>
                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <img src="images/ser.png" height="65" width="65">
                                                </div>
                                                 <div class="job-single-sec">
                                                    
                                                    <h4>
                                                        <a href="#"><?php echo $row['providercat']; ?></a>
                                                    </h4>
                                                    <p class="my-2"><?php echo $row['providersubcat']; ?></p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i><?php echo $row['providerloc']; ?></li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> <?php echo $row['provideraddress']; ?></li>
                                                        <li>
                                                            <?php echo $row['rate']; ?> ₹ / Service</li>
                                                    </ul>
                                               
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Full Time</span>
                                               <a href="book_now.php?pid=<?php echo htmlentities($row['serviceId']);?>" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div><br> <?php } ?>
                                        <!--//job1-->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//preocess-->

    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Got-It Offers</span>Make a Difference with Your Online Service Booking For Your Need And Requirements.</h3>
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
    
    <section class="banner-bottom-wthree bg-dark dotts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle cen text-center mb-lg-5 mb-3">
                    <span>Some Information</span> About Got-IT</h3>
                <div class="stats row mt-5">
                    <div class="col-md-3 stats_left counter_grid text-center">

                        <p class="counter">145</p>
                        <h4>Services Providers</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid1 text-center">

                        <p class="counter">105</p>
                        <h4>Services Provided Successfully</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid2 text-center">

                        <p class="counter">123</p>
                        <h4>Clients</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid3 text-center">

                        <p class="counter">145</p>
                        <h4>Members</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//stats-->

  
   
    <!--clients-->
    <section class="clents-slide py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> What Clients Say?</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Affrin</h6>
                                            <p>Got-it Provide Best Service Providers Acording My Need.</p>
                                            <h5>Thank You</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Anupj Patel</h6>
                                            <p>Best Service Providers Available.</p>
                                            <h5>Nice Work Got-It</h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Hafsha</h6>
                                            <p>Got-it Provide Best Service Providers Acording My Need.</p>
                                            <h5>Nice work</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Ankit Shah</h6>
                                            <p>I have Book Saloan at home and they provide their best service at my home.</p>
                                            <h5>5 Star Services</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Convallis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Daniele</h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Melissa Hoffman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Melissa Hoffman</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Convallis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Daniele </h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Thomas Muller</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-long-arrow-alt-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>

                    </a>

                </div>
            </div>
        </div>
    </section>
    <!--//clients-->
    <!--footer -->
    <?php include'footer.php'; ?>
    <!-- //footer -->

    
    <!-- js -->
    <!--/slider-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.zoomslider.min.js"></script>
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

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

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