
<?php
session_start();
include('config.php');
$sql =mysqli_query($conn,"SELECT *FROM user");
$output .="";

if(mysqli_num_rows($sql)==1){
    $output . ="no usere available to chat";
}
elseif()
    mysqli_num_rows($sql)>0{
        while($row =mysqli_fetch_assoc($sql)){
            $output .='<a href="">
            <div class="content">
                <img src="download (1).jpg" alt="" srcset="">
                <div class="details">
                <span>'. $row['first'] ." ".$row['last'].'</span>
                    <p> this  is test message</p>
                </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>' ;
        

        function insertion_Sort($my_array)
       {
           for($i=0;$i<count($my_array);$i++){
               $val = $my_array[$i];
               $j = $i-1;
               while($j>=0 && $my_array[$j] > $val){
                   $my_array[$j+1] = $my_array[$j];
                   $j--;
               }
               $my_array[$j+1] = $val;
           }
       return $my_array;
       }
       $test_array = array(3, 0, 2, 5, -1, 4, 1);
       echo "Original Array :\n";
       echo implode(', ',$test_array );
       echo "\nSorted Array :\n";
       print_r(insertion_Sort($test_array));
       
       
        
    
        }}

   echo $output;

//      single array quere in sequence form data

function  data($single){
     for ($)
}
 
 
?>

