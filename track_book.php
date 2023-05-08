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
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HSPS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
</head>
<body>

 

        </div>
        <!-- /.col (left) -->

        <div class="col-md-6" >
         
            
              <h3 >Please Select Your Shedule to Book your service.</h3>
            <?php

include('conn.php');

            $tid=$_GET['tid'];
  

$query=mysqli_query($conn,"select booking.*,service.firstname as providername,service.lastname as providerlname,category.categoryName as providercat,subcategory.subcategory as providersubcat,service.image as providerimg from booking inner join service on booking.serviceid=service.id inner join category on booking.catid=category.id inner join subcategory on booking.subid=subcategory.id where booking.id='$tid'");
while($row=mysqli_fetch_array($query))
{
         ?>
              <!-- Date -->
              <form method="get">
              <div class="form-group">
                <label>Your Service Provider Name</label>
                <input type="text" class="form-control" readonly="" value="<?php echo $row['providername'].' '.$row['providerlname'] ?>">
              </div>
                
              <div class="form-group">
                <label>Your Service Details</label>
                <input type="text" class="form-control" readonly="" value="<?php echo $row['providercat'] ?> / <?php echo $row['providersubcat'] ?>">
              </div>
               
              <div class="form-group">
                <label>Your Booking Status</label>
                <input type="text" class="form-control"  style="font-size:18px; " readonly="" value="
                <?php if($row['bookstatus'] == 1) { ?>
                          Confirm by Service Provider.
                        <?php } 
                         if($row['bookstatus'] == 2) { ?>
                          On the way to reach you Location.
                          <?php } 
                         if($row['bookstatus'] == 3) { ?>
                          Service Done Successfully.
                      <?php }
                      if($row['bookstatus'] == 4) { ?>
                          Client Does not available at location
                      <?php }
                      if($row['bookstatus'] == 5) { ?>
                          Service Booking Cancel by Service provider for some reason.
                      <?php }
                        if($row['bookstatus'] == 0) { ?>
                         Not Yet Confirm.
                        <?php } ?>">
                                                
              </div>

<?php }?>

                
                  
                

                 
                
                <input name="Submit2" type="submit" class="btn btn-defult" value="Close this Window " onClick="return f2();" style="cursor: pointer;"  /></td>

                 </form>
              <!-- /.form group -->

              


          

          
          <!-- /.form-group -->
     
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>


