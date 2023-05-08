<?php 
session_start();
error_reporting(0);
include'conn.php';
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
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
<style>
        html,
body {
    margin: 0;
    font-size: 100%;
    font-family: 'Dosis', sans-serif;
    background-image:url('https://media.istockphoto.com/id/1226232663/photo/cement-floor-and-black-wall-backgrounds-empty-room-interior-use-for-display-products.jpg?b=1&s=612x612&w=0&k=20&c=II9Fx7ATlxfNVDrXRXrrmkpQaBJiiRzYTW71sEPkozk=');
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
                <span>Join Us</span>Register Now</h3>
                <!---728x90--->
                <div class="container">
                       <div class="login px-4 mx-auto mw-100">
                       
                         <form action="ser_pro.php" method="post"  name="register" onSubmit="return valid();" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control"  name="fname" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control"  placeholder="" 
                                name="lname" required="">
                            </div>

                            
                            <div class="form-group">
                                <label>Email ID</label>

                                <input type="email" class="form-control"  placeholder="" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>Mobile No</label>

                                <input type="text" class="form-control" placeholder="" name="mobile" maxlength="10" required="">
                            </div>
                            <div class="form-group">
                                <label>Address</label>

                                <textarea type="text" class="form-control"  placeholder="" name="address" required=""></textarea>
                            </div>

                             <div class="form-group">
                                <label>Select You Service Category</label>

                                <select name="category" class="form-control" onChange="getSubcat(this.value);"  required>
<option value="">Select Category</option> 
<?php $query=mysqli_query($conn,"select * from category");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
                            </div>

                             <div class="form-group">
                                <label>Select Services Sub-category</label>
                                <select   name="subcategory"  id="subcategory" class="form-control" required>
</select>
                                
                            </div>

                            <div class="form-group">
                                <label>Experience</label>

                                <input type="text" class="form-control" placeholder="" name="experience" required="">
                            </div>
                            <div class="form-group">
                                <label>Service Charge(Rate)</label>

                                <input type="number" class="form-control" placeholder="" name="rate" required="">
                            </div>
                            <div class="form-group">
                                <label>Location(Where you provide your service)</label>

                                <textarea class="form-control" placeholder="Bharuch,Ankleshwar etc." name="location" required=""></textarea> 
                            </div>

                            <div class="form-group">
                                <label>Upload Image(Passport Size)</label>

                                <input type="file" class="form-control" placeholder="" name="img" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" name="password" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required="">
                            </div>

                            
                            <input type="submit" name="submit" value="Register" class="btn btn-danger submit mb-4">
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                    </div>
            
        </div>
    </section>
    <!-- //contact -->
    <!---728x90--->
    <!--footer -->
    <?php include'footer.php';?>
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
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
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