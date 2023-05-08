<?php 
session_start();
error_reporting(0);
include('conn.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
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

    
 
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- //Web-Fonts -->
    <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
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
                <span>Service</span>Provider Details</h3>
                <!---728x90--->
                <div class="container">
                       <div class="login px-4 mx-auto mw-100">
                       
                         <form  method="post" action="book.php" enctype="multipart/form-data">
                            <?php
$pid=$_GET['pid'];

$ret=mysqli_query($conn,"select service.*,category.categoryName,subcategory.subcategory from service join category on category.id=service.categoryid join subcategory on subcategory.id=service.subcategoryid where service.id='$pid'");
while ($row=mysqli_fetch_array($ret)) {

?>
                            <div class="form-group">
                                <label>Service Provider Full name</label>

                                <input type="text" class="form-control"  value="<?php echo $row['firstname'].' '.$row['lastname']; ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Email ID</label>

                                <input type="text" class="form-control"  value="<?php echo $row['email']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Mobile No</label>

                                <input type="text" class="form-control" value="<?php echo $row['mobile']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Address</label>

                                <textarea type="text" class="form-control" readonly><?php echo $row['address']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Work Experience</label>

                                <input type="text" class="form-control" value="<?php echo $row['experience']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Service Name</label>

                                <input type="text" class="form-control"  value="<?php echo $row['categoryName']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Service Details</label>

                                <input type="text" class="form-control"  value="<?php echo $row['subcategory']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Service Charge</label>

                                <input type="text" class="form-control" value="<?php echo $row['rate']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Locations Where service can be provides</label>

                                <textarea type="text" class="form-control" readonly><?php echo $row['location']; ?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Service Provider Image</label>

                                <img src="service_providerimages/<?php echo $row['image'] ?>" style="height: 200px!important;width: 250px!important;">
                            </div>

                       <a 
                       href="javascript:void(0);" onClick="popUpWindow('http://localhost/book.php?sid=<?php echo htmlentities($row['id']);?>');" class="btn btn-danger submit mb-4 active"  >Book Service</a>
                            <p class="text-center pb-4">
                                <a href="#">By clicking booking, I agree to your terms</a>
                            </p>
                        <?php } ?>
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