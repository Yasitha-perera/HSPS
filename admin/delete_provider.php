
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['admin_login'])==0) {
  header('location:logout.php');
  } 
  else{
          
    
if(isset($_GET['del']))
      {
            $sql= mysqli_query($conn,"delete from service where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Service Provider deleted !!";
                 

header("location:manage_provider.php");
      }

  }
  ?>