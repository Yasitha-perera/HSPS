<?php
session_start();
error_reporting(0);
include'conn.php';

if(isset($_POST['submit'])) 
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $qry=mysqli_query($conn,"SELECT * FROM register WHERE email='$email' AND password='$password'");
    $num=mysqli_fetch_array($qry);
if($num>0)
{
$extra="services.php";//
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['firstname'].$num['lastname'];
header("location:$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="login.php";

header("location:$extra");
exit();
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
                <span>Welcome</span>Login Now</h3>
                <!---728x90--->
                <div class="container">
                       <div class="login px-4 mx-auto mw-100">
                        
                        <form  method="post" autocomplete="off">
                            <span style="color:red;" >
<?php
echo htmlentities($_SESSION['errmsg']);
?>
<?php
echo htmlentities($_SESSION['errmsg']="");
?></span>
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="password" required="">
                            </div>
                            <div class="form-check mb-2">
                                
                               <p class="text-center pb-4">
                                <a href="forgot-password.php" >Forgot Your Password?</a>
                            </p>
                            </div>

                            <input type="submit" name="submit" class="btn btn-danger submit mb-4"value="Login">
                            <p class="text-center pb-4">
                                <a href="register.php" > Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                    </div>
            
        </div>
    </section>
    <!-- //contact -->
    <!---728x90--->
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