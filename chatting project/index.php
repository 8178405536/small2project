<?php
session_start();

include ('config.php');
if(isset($_POST["submit"])) { 
$name =mysqli_real_escape_string($conn,$_POST['first']);
$last =mysqli_real_escape_string($conn,$_POST['last']);
$email =mysqli_real_escape_string($conn,$_POST['email']);
$password =mysqli_real_escape_string($conn,$_POST['password']);
$option =mysqli_real_escape_string($conn,$_POST['option']);
// $sql =mysqli_query($conn,"INSERT INTO user (first,last,email,password) Values('$name','$last','$email','$password')");
// header('location:chat.php');
}


if(!empty($name)&& !empty($last)&& !empty($email)&& !empty($password)){
// lets check user email is valid is not
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){//if email is valid
    // let check that email alredy exitin databadse or not
    $sql =mysqli_query($conn,"SELECT email FROM user WHERE email ='{$email}'");
    if(mysqli_num_rows($sql)>0){//if email aready exit
        echo "$email this email already exist!";
    } else {
        // lets chech photo upload ya niot
        $random_id = rand(time(),10000000);

        
    
    $sql2 =mysqli_query($conn,"INSERT INTO user(uniqueid,first,last,email,password,option) values ('$random_id','$name','$last','$email','$password','$option')");
header('location:login.php');
    if($sql2){
$sql3 = mysqli_query($conn,"SELECT *FROM user WHERE email='{$email}'");
if(mysqli_num_rows($sql3)>0){
    $row =mysqli_fetch_assoc($sql3);
    $_SESSION['uniqueid']=$row['uniqueid'];
    echo"success";
    }}
else
      {
        echo"$email this is not valid";
      }
}}

else{
    echo"All input field are requested"
;}}


?>
