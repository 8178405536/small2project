<?php
session_start();
include("config.php");

$email =mysqli_real_escape_string($conn,$_POST['email']);
$password =mysqli_real_escape_string($conn,$_POST['password']);


if(!empty($email)&& !empty($password)){
$sql ="SELECT *FROM user WHERE email ='$email'AND password='$password'";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    // if users credaitail matched
    $row =mysqli_fetch_assoc($query);
$_SESSION['uniqueid']= $row['uniqueid'];
echo"success";

header('location:vendordashboard.php');
}
else{
    echo"email or password is incorreect!";
}
}
else{
    echo"all input fileds are reqiuired";
}
  

?>