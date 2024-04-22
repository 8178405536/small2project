<?php
session_start();

if(isset($_SESSION['unique_id'])){
    incude("config.php");
    $outgoing = mysqli_real_escape_string($conn,$_POST['outgoing']);
    $incoming = mysqli_real_escape_string($conn,$_POST['incoming']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    if(!empty($message)){
        $sql =mysqli_query($conn,"INSERT INTO  meaasge (incoming_msg,outgoing_msg,msg) values('$outgoing','$incoming',' $message ')") or die();
       
    }
} else{
    header("login.php");
}



?>