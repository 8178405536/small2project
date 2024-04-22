<?php
session_start();
incude("config.php");
if(isset($_SESSION['unique_id'])){
    $outgoing = mysqli_real_escape_string($conn,$_POST['outgoing']);
    $incoming = mysqli_real_escape_string($conn,$_POST['incoming']);
    $output ="";

    $sql= "SELECT *FROM messages WHERE(incoming_msg = $incoming AND outgoing_msg =$outgoing ) ORDER BY msg_id DESC";

    $query =mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)> 0){
        while($row =mysqli_fetch_array($query)){
            if($row['outgoing']== $outgoing){
                $output .='<div class="chat-outgoing" name="outgoing">
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, non?</p>
                </div>
            </div>'
            }
        }
    }
} 