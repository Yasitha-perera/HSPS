<?php

include'conn.php';

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=md5($_POST['password']);

   
$query=mysqli_query($conn,"INSERT INTO register(firstname,lastname,email,mobile,address,password) values ('$fname','$lname','$email','$mobile','$address','$password')");

    if($query)
    {
        echo"succesfull";
        
    }
    header("location: login.php");
}


?>