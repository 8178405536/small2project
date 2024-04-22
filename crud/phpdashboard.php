<?php
include('config.php');

if(isset($_POST['submit'])){
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $phone =mysqli_real_escape_string($conn,$_POST['phone']);
    $address =mysqli_real_escape_string($conn,$_POST['address']);
    $sql =mysqli_query($conn,"INSERT INTO table_data (name,phone,address) values('$name','$phone','$address')");
    
    header('location:dashboard.php');
}


?>