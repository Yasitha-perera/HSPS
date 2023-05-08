<?php 
session_start();
error_reporting(0);
include('conn.php');
if(strlen($_SESSION['ser_login'])==0)
    {   
header('location:ser_login.php');
}
else{

$bid=($_GET['bid']);

if(isset($_POST['submit']))
{
$status=$_POST['bookstatus'];



$sql=mysqli_query($conn,"update booking set bookstatus='$status' where id='$bid'");
if($sql)
{
echo "<script>alert('Status updated sucessfully...');</script>";
}
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
        <li class="breadcrumb-item active">Manage Booking</li>
    </ol>
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
            <!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Some Info</span>All Candidates</h3>
                    <!---728x90--->
                <div class="row choose-main mt-5">
                   
                    <div class="col-lg-10 job_info">
                        <!--/ Emply List -->
                        <div class="emply-resume-list row mb-3">
                            <?php 

                            include('conn.php');

                            $bid=intval($_GET['bid']);   

                            $query=mysqli_query($conn,"select booking.*,register.firstname as cname,register.lastname as lname,register.email as cemail,register.mobile as contact,register.address as caddress from booking inner join register on booking.userId=register.id  where booking.id='$bid'");

while($row=mysqli_fetch_array($query))
{
?>
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img src="images/team1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="emply-resume-info">
                                        <a href="#"><?php echo $row['cname'].' '.$row['lname'] ;?></a>
                                    <h4><a href="candidates_single.html"></a></h4>
                                    <h5 class="mt-2"><span><?php echo $row['cemail'] ?></span> </h5>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $row['caddress']; ?> </p>

                                    <ul class="links_bottom_emp mt-2">
                                        <li><a href="candidates_single.html"><i class="fas fa-phone"></i> <span class="icon_text"> <?php echo $row['contact']; ?></span></a></li>


                                    <li><a href="#"><i class="fas fa-eye"></i> <span class="icon_text"><?php echo $row['remark'] ?></span></a></li>
                                    </ul >
                                    <br>

                                    <form  method="post" >
                                    <div class="form-group">
                                        <label class="mb-2">Update Your Booking Status</label>

                                        <select class="form-control jb_1" name="bookstatus">


                                            <option value="<?php echo ($row['bookstatus']);?>" readonly>
                                                <?php if($row['bookstatus'] == 1) { ?>
                          <span style="color: green;">Confirm by Service Provider.</span>
                        <?php } 
                         if($row['bookstatus'] == 2) { ?>
                          <span style="color: orange;">On the way to reach you Location.</span>
                          <?php } 
                         if($row['bookstatus'] == 3) { ?>
                          <span style="color: blue;">Service Done Successfully.</span>
                      <?php }
                      if($row['bookstatus'] == 4) { ?>
                          <span style="color: Gray;">Client Does not available at location</span>
                      <?php }
                      if($row['bookstatus'] == 5) { ?>
                          <span style="color:SlateBlue;">Service Booking Cancel by Service provider for some reason.</span>
                      <?php }
                        if($row['bookstatus'] == 0) { ?>
                          <span style="color: red;">Not Yet Confirm.</span>
                        <?php } ?>
                                            </option> 

                                            <option value="0">Not Yet Confirm.</option>
                                            <option value="1">Confirm by Service Provider.</option>
                                            <option value="2">On the way to reach you Location.</option>
                                            <option value="3">Service Done Successfully.</option>
                                            <option value="4">Client Does not available at location.</option>
                                            <option value="5">Service Booking Cancel by Service provider for some reason.</option>
                                        </select>
                                    </div>
                                    
                                    <input type="submit" value="Update Status" class="btn btn-primary btn-lg" name="submit">
                                </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </div>
                        <?php } ?>
                        <!--// Emply List -->
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//preocess-->
<!---728x90--->
    <!--footer -->
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
<?php } ?>