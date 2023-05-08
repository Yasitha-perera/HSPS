<?php
session_start();
error_reporting(0);
include('conn.php');
if(strlen($_SESSION['ser_login'])==0)
    {   
header('location:index.php');
}
else{
	if(isset($_POST['update']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contactno=$_POST['mobile'];
		$address=$_POST['address'];
		$query=mysqli_query($conn,"update service set firstname='$fname',lastname='$lname',email='$email',mobile='$contactno',address='$address' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Your info has been updated');</script>";
		}
	}


date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$sql=mysqli_query($conn,"SELECT password FROM service where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($conn,"update service set password='".md5($_POST['newpass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
echo "<script>alert('Password Changed Successfully !!');</script>";
}
else
{
	echo "<script>alert('Current Password not match !!');</script>";
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
		<li class="breadcrumb-item active">Service Provider Details</li>
	</ol>
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Welcome to Got-It</span>Your Account Details</h3>
				
				<!---728x90--->
				
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Your Account Details</h4>
							<?php
$query=mysqli_query($conn,"select * from service where id ='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>
							<form action="#" method="post">
								<div class="form-group">
									<label class="my-2">First Name</label>
									<input class="form-control" type="text" name="fname" placeholder="" required="" value="<?php echo $row['firstname'];?>">
								</div>
								<div class="form-group">
									<label class="my-2">Last Name</label>
									<input class="form-control" type="text" name="lname" placeholder="" required="" value="<?php echo $row['lastname'];?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" placeholder="" value="<?php echo $row['email'];?>" required="">
								</div>
								<div class="form-group">
									<label>Mobile No</label>
									<input class="form-control" type="number" name="mobile" placeholder="" value="<?php echo $row['mobile'];?>" required="">
								</div>
								<div class="form-group">
									<label>Address</label>
										
									<textarea class="form-control" name="address" required=""><?php echo $row['address'];?></textarea>
								</div>
								
								<div class="input-group1">
									<input class="form-control" type="submit" value="Update " name="update">
								</div>
							</form>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Change Password</h4>
							<form role="form" method="post" name="chngpwd" onSubmit="return valid();">
								<div class="form-group">
									<label class="my-2">Current Password</label>
									<input class="form-control" type="password" id="cpass" name="cpass" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input class="form-control" type="password" id="newpass" name="newpass" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>New Confirm Password</label>
									<input class="form-control" type="password" id="cnfpass" name="cnfpass" placeholder="" required="">
								</div>
								<div class="input-group1">
									<input class="form-control" type="submit" value="Change Password">
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
<?php } ?>