



<?php
include ("config.php");
$vendor_id=$_GET['table_id'];
$sql=mysqli_query($conn,"DELETE FROM table_data  WHERE table_id ='$vendor_id' ");
header("location:dashboard.php");
?>
