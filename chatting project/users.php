<?php
session_start();
include("config.php");
$sql =mysqli_query($conn,"SELECT *FROM user");
$output = " ";

if(mysqli_num_rows($sql)==1){
    $output .="no users to available to chat";
}  elseif(mysqli_num_rows($sql)>1){
    while($row =mysqli_fetch_assoc($sql)){
        $output .= '<a href="chat.php">
        <div class="content">
            <img src="" alt="" srcset="">
        <div class="datails">
            <span>'.$row['first'] ." " . $row['last'].'</span>
     <p> this is test message <p>
        </div>
        </div>
     </a>';
    }
}
 echo $output;




?>
