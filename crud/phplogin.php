<?php

include("config.php");

$email =mysqli_real_escape_string($conn,$_POST['email']);
$password =mysqli_real_escape_string($conn,$_POST['password']);


if(!empty($email)&& !empty($password)){
$sql ="SELECT *FROM demo WHERE email ='$email'AND password='$password'";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    // if users credaitail matched
    $row =mysqli_fetch_assoc($query);

echo"success";

header('location:dashboard.php');
}
else{
    echo"email or password is incorreect!";
}
}
else{
    echo"all input fileds arereqiuired";
}


?>