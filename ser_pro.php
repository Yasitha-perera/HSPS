<?php

include'conn.php';

if(isset($_POST['submit']))
{   
    $category=$_POST['category'];
    $subcat=$_POST['subcategory'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $exp=$_POST['experience'];
    $rate=$_POST['rate'];
    $location=$_POST['location'];
    $image=$_FILES["img"]["name"];
    $image1=$_FILES["img"]["tmp_name"];
    $password=md5($_POST['password']);

   $path="service_providerimages/$image";
    // directory creation for product images
    move_uploaded_file($image1,$path);

$query=mysqli_query($conn,"INSERT INTO service(categoryid,subcategoryid,firstname,lastname,email,mobile,address, experience,rate,location,image,password) values ('$category','$subcat','$fname','$lname','$email','$mobile','$address','$exp','$rate','$location','$image','$password')");

    if($query)
    {
        echo"succesfull";
        
    }
    header("location: index.php");
}


?>