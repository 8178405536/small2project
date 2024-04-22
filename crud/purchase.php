<?php
session_start();
include('config.php');



    if(isset($_POST['submit'])){
        $name =$_POST['Username'];
        $phone_number =$_POST['phone_number'];
        $address =$_POST['address'];
      
        $paymode =$_POST['paymode'];

        $sql =mysqli_query($conn,"INSERT INTO payment_detail (name,phone,address,paymode) values('$name','$phone_number','$address','$paymode')");
        header('location:cartpage.php');
    }


?>