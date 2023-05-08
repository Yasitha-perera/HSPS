<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');

if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
$admin=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($admin);
if($num>0)
{
$loc="dashboard.php";//
$_SESSION['admin_login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['username'];

header("location:$loc");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$loc="index.php";

header("location:$loc");
exit();
}
}
?>
    
<!DOCTYPE html>
<html>
<head>
 
  <title>Home Service Management</title>
 

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Admin</b> | Home Service Management</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to Manage Home Service Management</p>

      <form  method="post" id="login">
        <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User Name" required="true" name="username"  >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="true" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
        </p>
        <p><a href="../index.php">Back Home!!</a></p>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
