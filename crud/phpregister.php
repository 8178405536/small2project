
<?php
include('config.php');
if(isset($_POST['submit'])){
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $address =mysqli_real_escape_string($conn,$_POST['address']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);


    $sql =mysqli_query($conn,"INSERT INTO demo(name,email,address,password) values('$name','$email','$address','$password')");
    header('location:login.php');
}

?>


