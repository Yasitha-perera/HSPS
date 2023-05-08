<?php
session_start();
error_reporting(0);
include('conn.php');

if(isset($_POST['submit'])) 
{
  
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

 
  $sid=$_GET['sid'];
  $cid=$_POST['categoryName'];
  $subcid=$_POST['subcategory'];
  $service_date=$_POST['s_date'];
  $service_time=$_POST['ser_time'];
  $remark=$_POST['remark'];

$query=mysqli_query($conn,"insert into booking(userId,serviceId,catid,subid,service_date,service_time,remark) values('".$_SESSION['id']."','$sid','$cid','$subcid','$service_date','$service_time','$remark')");

if ($query) {

echo "<script>alert('Your Service Booking request store successfully')</script>";

}

}
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
}
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
            
            
              <!-- Date -->
              <form method="post">
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="s_date" required="" >
                </div>
                <!-- /.input group -->
              </div>

               <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="ser_time" required="">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>


                <div class="form-group">
                    <label>Any Special Remark</label>

                    <textarea class="form-control" name="remark"></textarea>
                 </div>

                  <?php

                  $sid=$_GET['sid'];

$query=mysqli_query($conn,"select service.*,category.categoryName,subcategory.subcategory from service join category on category.id=service.categoryid join subcategory on subcategory.id=service.subcategoryid where service.id='$sid'");

while($row=mysqli_fetch_array($query))
{
         ?>
                 <div class="form-group">
                               <!-- <label>Service Name</label> -->

                                <input type="hidden" class="form-control" name="categoryName" value="<?php echo $row['categoryid'];?>"<?php echo $row['categoryName'];?>>
                            </div>
                            <div class="form-group">
                             <!--   <label>Service Details</label> -->

                                <input type="hidden" class="form-control" name="subcategory" value="<?php echo $row['subcategoryid'];?>"<?php echo $row['subcategory'];?>>
                            </div>
                          <?php } ?>

                 <input type="submit" name="submit" class="btn btn-danger submit mb-4"value="Book">
                
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


