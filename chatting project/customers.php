<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>customer dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="index.css">
  <!-- <link rel="stylesheet" href="index.css"> -->
   <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style> 
</head>
<body>





    
    <div class="container-fluid">
    
    


      <div class="cointer-fluids">
        <h4>Home </h4>
        <h2> <span> ALL Clothes/vendors  here</span></h2>
      </div>
      <div class="btn">
    <button type="button" class="btn btn-primary">KIDS CLOTHS</button>
<button type="button" class="btn btn-secondary">MENS CLOTHS</button>
<button type="button" class="btn btn-success">LADIES CLOTHS</button>
<button type="button" class="btn btn-warning">PARTY Wears</button>

<button type="button" class="btn btn-info"> shervani cloth</button>
<button type="button" class="btn btn-danger"> new anoouncement</button>

    </div>
     

<?php

include("config.php");
$sql =mysqli_query($conn,"SELECT *FROM vendor_user");
$output = " ";

if(mysqli_num_rows($sql)==1){
    $output .="no users to available to chat";
}  elseif(mysqli_num_rows($sql)>1){
    while($row =mysqli_fetch_assoc($sql)){
        $output .= '<a href="customers.php">
        
        <div class="container-card">
        <div class="card" style="width: 18rem;">
        <img src=" download circle.jpg" class="card-img-top" alt="..."> 
        <div class="card-body">
          <h5 class="card-title">'. $row['itemname']. '</h5>
          <span>'.$row['shopname'] ." " . $row['image'].'</span>
      
</div> 
          
        </div>
     </a>';
    




    }
}
 echo $output;


?>





     <hr>
<br><br></hr>
     
  </div>
  </div>
      </div>
      
      
   
      
</body>
</html>
