<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['admin_login'])==0) {
  header('location:logout.php');
  } else{

  ?>
<!DOCTYPE html>
<html>
<head>
 
  <title>HSPS</title>
  <!-- Tell the browser to be responsive to screen width -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
  <?php include_once('includes/header.php');?>

 
<?php include_once('includes/sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Bookings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Service Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
        <?php if(isset($_GET['del']))
{?>
                  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Successfully!</strong>  <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                  </div>
<?php } ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Bookings</h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Client Full Name</th>
                  <th>Client Email</th>
                  <th>Client Address</th>
                  <th>Client Mobile-no</th>
                  <th>Booked Service & Details</th>
                  <th>Service Provider Full Name</th>
                  <th>Service Provider Address</th>
                  <th>Service Provider Email</th>
                  <th>Service Provider Mobine-no</th>
                  <th>Service Provider Images</th>
                  <th>Current Booking Status</th>
                  
                </tr>
                </thead>
                 <?php

$query=mysqli_query($conn,"select booking.*,register.firstname as cname,register.lastname as lname,register.email as cemail,register.mobile as contact,register.address as caddress,service.firstname as providername,service.lastname as providerlname,service.email as provideremail,service.mobile as providercontact,service.address as provideraddress,category.categoryName as providercat,subcategory.subcategory as providersubcat,service.image as providerimg from booking inner join register on booking.userId=register.id inner join service on booking.serviceId=service.id inner join category on booking.catid=category.id inner join subcategory on booking.subid=subcategory.id");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
         ?>
                
                <tr>
                  <td><?php echo $cnt;?></td>
                  <td><?php echo $row['cname'].' '.$row['lname'] ;?></td>
                  <td><?php echo $row['cemail'] ?></td>
                  <td><?php echo $row['caddress']; ?></td>
                  <td><?php echo $row['contact']; ?></td>
                  <td><b><span><?php echo $row['providercat'] ?></span></b> (<?php echo $row['providersubcat'] ?> )</td>
                  <td><?php echo $row['providername'].' '.$row['providerlname'] ?></td>
                  <td><?php echo $row['provideraddress'] ?></td>
                  <td><?php echo $row['provideremail'] ?></td>
                  <td><?php echo $row['providercontact'] ?></td>

                  <td><img src="../service_providerimages/<?php echo $row['providerimg'] ?>" alt="" class="img-fluid" height="100" width="100"></td>

                  <td><?php if($row['bookstatus'] == 1) { ?>
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
                        <?php } ?></td>
                  
                </tr>
                              
                <?php $cnt=$cnt+1;} ?> 
              </table>
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include_once('includes/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
<?php }  ?>