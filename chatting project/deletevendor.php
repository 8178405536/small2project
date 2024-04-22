<?php
include ("config.php");
$vendor_id=$_GET['vendor_id'];
$sql=mysqli_query($conn,"DELETE FROM vendor_user  WHERE vendor_id =$vendor_id ")

or die(mysqli_error());
header("location:vendordashboard.php");
?>

