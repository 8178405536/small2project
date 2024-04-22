<?php
session_start();

include ('config.php');
if(isset($_POST["submit"])) { 
$shopname =mysqli_real_escape_string($conn,$_POST['shopname']);
$gstnumber =mysqli_real_escape_string($conn,$_POST['gstnumber']);
$itemname =mysqli_real_escape_string($conn,$_POST['itemname']);
$price =mysqli_real_escape_string($conn,$_POST['price']);
$image =mysqli_real_escape_string($conn,$_POST['image']);
$quantity =mysqli_real_escape_string($conn,$_POST['quantity']);
$country =mysqli_real_escape_string($conn,$_POST['country']);
$State =mysqli_real_escape_string($conn,$_POST['state']);
$city =mysqli_real_escape_string($conn,$_POST['city']);



 $sql =mysqli_query($conn,"INSERT INTO  vendor_user (shopname,gstnumber,itemname,price,image,quantity) Values('$shopname','$gstnumber','$itemname','$price','$image','$quantity','$country','$State','$city')");
 header('location:vendordashboard.php');
}

