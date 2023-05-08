<?php
session_start();
error_reporting(0);
include('conn.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{
    if(isset($_POST['update']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $contactno=$_POST['mobile'];
        $address=$_POST['address'];
        $query=mysqli_query($conn,"update register set firstname='$fname',lastname='$lname',mobile='$contactno',address='$address' where id='".$_SESSION['id']."'");
        if($query)
        {
echo "<script>alert('Your info has been updated');</script>";
        }
    }





if(isset($_POST['submit']))
{
$sql=mysqli_query($conn,"SELECT password FROM register where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($conn,"update register set password='".md5($_POST['newpass'])."' where id='".$_SESSION['id']."'");
echo "<script>alert('Password Changed Successfully !!');</script>";
}
else
{
    echo "<script>alert('Current Password Does not match !!');</script>";
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
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.cpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.cpass.focus();
return false;
}
else if(document.chngpwd.newpass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpass.focus();
return false;
}
else if(document.chngpwd.cnfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cnfpass.focus();
return false;
}
else if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cnfpass.focus();
return false;
}
return true;
}
</script>

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
<style>
        html,
body {
    margin: 0;
    font-size: 100%;
    font-family: 'Dosis', sans-serif;
    background-image:url('https://img.freepik.com/free-photo/abstract-textured-backgound_1258-30452.jpg');
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
    </style

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
        <li class="breadcrumb-item active">Client Profile</li>
    </ol>
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Your Profile</span>All Account Deatails</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                            <h3 class="j-b mb-3">Welcome to WORK GURU</h3>
                            <div class="widget-content">
                                <p>Start your Service with us.!</p>
                                <?php
$query=mysqli_query($conn,"select * from register where id ='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>
                                <form  method="post">
                                    <div class="form-group">
                                        <label class="mb-2">Your Firstname</label>
                                            
                                    <input class="form-control jb_2" type="text" name="fname" placeholder="" required="" value="<?php echo $row['firstname'];?>">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Your Lastname</label>
                                            
                                    <input class="form-control jb_2" type="text" name="lname"  required="" value="<?php echo $row['lastname'];?>">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Your Email-Id</label>
                                            
                                    <input class="form-control jb_2" type="text"   required="" value="<?php echo $row['email'];?>" readonly>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Your Conatct No</label>
                                            
                                    <input class="form-control jb_2" type="text" name="mobile"  required="" value="<?php echo $row['mobile'];?>">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Your Address</label>
                                            
                                    <textarea class="form-control jb_2" type="text" name="address"  required="" ><?php echo $row['address'];?></textarea>
                                        
                                    </div>
                                    
                                    <input type="submit" value="Update Profile" name="update">
                                </form>
                               <?php } ?>
                            </div>
                        </div>
                       <br>
                       <!-- password Charge -->
                <div class="col_3 permit">
                            <h3 class="j-b mb-3">Change Your Profile Password</h3>
                                     <form role="form" method="post" name="chngpwd" onSubmit="return valid();">
                                    <div class="form-group">
                                        <label class="mb-2">Current Password</label>
                                            
                                    <input class="form-control jb_2" type="password" id="cpass" name="cpass" placeholder="" required="">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Enter New Password</label>
                                            
                                    <input class="form-control jb_2" type="password" id="newpass" name="newpass" placeholder="" required="">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Enter new confirm Password</label>
                                            
                                        <input class="form-control jb_2" type="password" id="cnfpass" name="cnfpass" placeholder="" required="">
                                        
                                    </div>
                                    
                                    
                                    <input type="submit" value="Update Profile" class="btn btn-danger">
                                </form>
                               
                        </div>
                        
                        <!-- Pasword chaange /// -->
                        
                        

                    </div>
                    <div class="col-lg-8 job_info_left">
                        <!--/ Emply List -->
                        <?php $query=mysqli_query($conn,"select booking.*,service.firstname as providername,service.lastname as providerlname,service.email as provideremail,service.mobile as providercontact,service.address as provideraddress,category.categoryName as providercat,subcategory.subcategory as providersubcat,service.image as providerimg from booking inner join service on booking.serviceid=service.id inner join category on booking.catid=category.id inner join subcategory on booking.subid=subcategory.id where userId='".$_SESSION['id']."'");

while($row=mysqli_fetch_array($query))
{
?>
                        <div class="emply-resume-list row mb-3">
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img src="service_providerimages/<?php echo $row['providerimg'] ?>" alt="" class="img-fluid">
                                </div>
                                <div class="emply-resume-info">
                                    <h4><a href="#"><?php echo $row['providername'].' '.$row['providerlname'] ?></a></h4>
                                    <h5 class="mt-2"><span><?php echo $row['providercat'] ?></span>/<?php echo $row['providersubcat'] ?> </h5>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $row['provideraddress'] ?></p>
                                    <ul class="links_bottom_emp mt-2">
                                        <li><a href="candidates_single.html"><i class="far fa-envelope"></i> <span class="icon_text"> <?php echo $row['provideremail'] ?></span></a></li>
                                        <li><a href="candidates_single.html"><i class="fas fa-phone"></i> <span class="icon_text"> <?php echo $row['providercontact'] ?></span></a></li>
                                       
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3 emp_btn text-right">
                                <a  href="javascript:void(0);" onClick="popUpWindow('http://localhost/xampp/Home_Service_System/track_book.php?tid=<?php echo htmlentities($row['id']);?>');"> Track Booking </a>
                            </div>
                            <br>
                            <div class="col-md-3 emp_btn text-right">
                                <a  href="javascript:void(0);" onClick="popUpWindow('http://localhost/xampp/Home_Service_System/add_review.php?rid=<?php echo htmlentities($row['id']);?>');"> Add Rating & Review </a>
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