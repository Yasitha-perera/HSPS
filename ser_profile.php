<?php 
session_start();
error_reporting(0);
include('conn.php');
if(strlen($_SESSION['ser_login'])==0)
    {   
header('location:index.php');
}
else{

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

    if(isset($_POST['update']))
    {
        $category=$_POST['category'];
        $subcat=$_POST['subcategory'];
        $exp=$_POST['experience'];
        $rate=$_POST['rate'];
        $location=$_POST['location'];
        $query=mysqli_query($conn,"update service set categoryid='$category',subcategoryid='$subcat',experience='$exp',rate='$rate',location='$location' where id='".$_SESSION['id']."'");
        if($query)
        {
echo "<script>alert('Your info has been updated');</script>";
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
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!-- banner-text -->
    <!-- contact -->
    <section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
        <!---728x90--->
            <h3 class="tittle text-center mb-lg-5 mb-3">
                <span>Got-It Service Provider</span>Your Work Profile</h3>
                <!---728x90---><?php 

$query=mysqli_query($conn,"select service.*,category.categoryName as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as subcatid from service join category on category.id=service.categoryid join subcategory on subcategory.id=service.subcategoryid where service.id='".$_SESSION['id']."'");

while($row=mysqli_fetch_array($query))
{
  


?>
                <div class="container">
                       <div class="login px-4 mx-auto mw-100">
                       
                         <form  method="post"  enctype="multipart/form-data">
                           <div class="form-group">
                                <label>Your Profile Status</label>

                                <input type="text"  class="form-control"  value="<?php if($row['status'] == 1) { ?>
                          Your Profile is approved by Admin.
                        <?php } 
                         if($row['status'] == 0) { ?>
                          Your Profile is under Confirmation.
                          <?php } ?>" readonly> 
                            </div>

                             <div class="form-group">
                                <label>Select You Service Category</label>

                                <select name="category" class="form-control" onChange="getSubcat(this.value);"  required>

<option value="<?php echo htmlentities($row['cid']);?>"><?php echo htmlentities($row['catname']);?></option> 

<?php $query=mysqli_query($conn,"select * from category");
while($rw=mysqli_fetch_array($query))
{
    if($row['catname']==$rw['categoryName'])
    {
        continue;
    }
    else{
    ?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['categoryName'];?></option>
<?php }} ?>
</select>
                            </div>

                             <div class="form-group">
                                <label>Select Services Sub-category</label>
                                <select   name="subcategory"  id="subcategory" class="form-control" required>
                                    <option value="<?php echo htmlentities($row['subcatid']);?>"><?php echo htmlentities($row['subcatname']);?></option>
</select>
                                
                            </div>

                            <div class="form-group">
                                <label>Experience</label>

                                <input type="text" class="form-control" placeholder="" name="experience" required="" value="<?php echo $row['experience']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Service Charge(Rate)</label>

                                <input type="number" class="form-control" placeholder="" name="rate" required="" value="<?php echo $row['rate']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Location(Where you provide your service)</label>

                                <textarea  class="form-control" placeholder="" name="location" required=""> <?php echo $row['location']; ?> </textarea> 
                            </div>

                            <div class="form-group">
                                <label>Your Profile Image</label>

                                <img src="service_providerimages/<?php echo $row['image'];?>" style="height: 150px!important;width: 200px!important;border:1px solid black!important;">
                                <a href="update-image.php?id=<?php echo $row['id'];?>" class="btn btn-primary active" role="button">Update Profile Image</a> 
                            </div>
                          
                            <hr>
                            
                            <input type="submit" name="update" value="Update Profile" class="btn btn-danger submit mb-4">
                            
                        </form>
                    <?php } ?>
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
<?php } ?>