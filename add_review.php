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

 
  $rid=$_GET['rid'];
  
  $service_rating=$_POST['service'];
  $service_price=$_POST['price'];
  $service_value=$_POST['value'];
  $review=$_POST['review'];

$query=mysqli_query($conn,"update booking set service_rating='$service_rating',price_rating='$service_price',values_rating='$service_value',review='$review' where id='$rid'");

if ($query) {

echo "<script>alert'Your Service Booking request store successfully'</script>";

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
         
            
              <h3 >Please Add Rating & Review</h3>
            <form role="form"  method="post">

                    
                    <div class="product-add-review">
                      <h4 class="title">Write your own review</h4>
                      <div class="review-table">
                        <div class="table-responsive">
                          <table class="table table-bordered">  
                            <thead>
                              <tr>
                                <th class="cell-label">&nbsp;</th>
                                <th>1 star</th>
                                <th>2 stars</th>
                                <th>3 stars</th>
                                <th>4 stars</th>
                                <th>5 stars</th>
                              </tr>
                            </thead>  
                            <tbody>
                              <tr>
                                <td class="cell-label">Service</td>
                                <td><input type="radio" name="service" class="radio" value="1"></td>
                                <td><input type="radio" name="service" class="radio" value="2"></td>
                                <td><input type="radio" name="service" class="radio" value="3"></td>
                                <td><input type="radio" name="service" class="radio" value="4"></td>
                                <td><input type="radio" name="service" class="radio" value="5"></td>
                              </tr>
                              <tr>
                                <td class="cell-label">Service Price</td>
                                <td><input type="radio" name="price" class="radio" value="1"></td>
                                <td><input type="radio" name="price" class="radio" value="2"></td>
                                <td><input type="radio" name="price" class="radio" value="3"></td>
                                <td><input type="radio" name="price" class="radio" value="4"></td>
                                <td><input type="radio" name="price" class="radio" value="5"></td>
                              </tr>
                              <tr>
                                <td class="cell-label">Service Provider Behaviour</td>
                                <td><input type="radio" name="value" class="radio" value="1"></td>
                                <td><input type="radio" name="value" class="radio" value="2"></td>
                                <td><input type="radio" name="value" class="radio" value="3"></td>
                                <td><input type="radio" name="value" class="radio" value="4"></td>
                                <td><input type="radio" name="value" class="radio" value="5"></td>
                              </tr>
                            </tbody>
                          </table><!-- /.table .table-bordered -->
                        </div><!-- /.table-responsive -->
                      </div><!-- /.review-table -->
                      
                      <div class="review-form">
                        <div class="form-container">
                          
                            
                            <div class="row">
                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputReview">Review <span class="astk">*</span></label>

<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="" name="review" required="required"></textarea>
                                </div><!-- /.form-group -->
                              </div>
                            </div><!-- /.row -->
                            
                  <input type="submit" name="submit" class="btn btn-danger submit mb-4" value="Rating & Review">
                
                <input name="Submit2" type="submit" class="btn btn-defult" value="Close this Window " onClick="return f2();" style="cursor: pointer;"  /></td>
                          </form><!-- /.cnt-form -->
                        </div><!-- /.form-container -->
                      </div><!-- /.review-form -->
               

                

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


</body>
</html>


