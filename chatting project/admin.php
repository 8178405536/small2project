<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>




<body>
<header> 

            </header>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">logout</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
      </ul>
    </div>
  </div>
</nav>

<br><br></hr>
<h1>  Admin page </h1>
      <div class="search-bar">
  <form class="search-form d-flex align-items-right" method="POST" action="">
    <input type="text" name="filter_value" placeholder="Search" title="Enter search keyword">
    <button name="filter_btn" title="Search"><i class="bi bi-search">submit</i></button>
  </form>
  <div class="search">
  <div class="slabel"> Searches</div>
   <div class="lsearches">
<div class="">


<!-- llsearch option here -->
 <?php 
  if(isset($_POST['filter_btn'])){
  $value_filter=$_POST['filter_value'];
   $query="SELECT * FROM vendor_user WHERE CONCAT(itemname,vendor_id) LIKE '%$value_filter%' ";
   $query_run=mysqli_query($conn,$query);

   if(mysqli_num_rows($query_run)>0){
    while($row6=mysqli_fetch_array($query_run))    
     {  ?>
   <a href="vendordashboard.php?Action=Show&vendor_id=<?php echo $row6['vendor_id'];?>"><?php echo $row6['itemname'];?></a>
    <?php
        }
   }
    else{
  echo "No Record Found..!";
  }
          }                                        
  ?>
   </div>
          </div>
 </div>
</div><!-- End Search Bar -->
<!-- <! how to show only users table data one---> 
<?php

include('config.php');
$i=1;

$sql6 = mysqli_query($conn,"SELECT * FROM user order by user_id");
if(mysqli_num_rows($sql6)>0){
  while($row4=mysqli_fetch_assoc($sql6)){ 
   
?>


<table class="table" >

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">shop name /address</th>
      <th scope="col"> GST Number shop</th>
     
       <th scope="col"> Item  name</th>
      <th scope="col">Price</th> 
      <th scope="col">photo/image</th>
      <th scope="col">Quantity</th> 
      <th scope="col">Update</th>
      <th scope="col">Delete</th> 
      <th scope="col">approved by admin</th> 
      

    </tr>

  </thead>
  <tbody>
 


  <?php

include('config.php');
$i=1;
$sql = mysqli_query($conn,"SELECT * FROM vendor_user order by vendor_id");
if(mysqli_num_rows($sql)>0){
  while($row=mysqli_fetch_assoc($sql)){ 

  
?>

    <tr>
      <td scope="row"><?php echo $i++;?></td>

      <td><?php  echo $row['shopname'];?></td>

      <td> <?php  echo $row['gstnumber'];?>
      
    </td>
      <td><?php  echo $row['itemname'];?></td>

      <td> <?php  echo $row['price'];?></td>
      <td><?php  echo $row['image'];?></td>

      <td> <?php  echo $row['quantity'];?></td>




      
            <td>
                <a href="updatevendor.php?vendor_id=<?php echo $row['vendor_id'];?>" class="btn btn-info" name="edit" >change
                
                </a>
               
            </td>
            <td> <a href="deletevendor.php?vendor_id=<?php echo $row['vendor_id'];?>" class="btn btn-warning" name="delete" >Delete  </a> 
                </td>
                <td> <a href="confirm.php?vendor_id=<?php echo $row['vendor_id'];?>" class="btn btn-warning confirm" name="confirm" >confirm  </a> 
                </td>


    <script>
        document.ready.fuction(){

            $(#confirm).onclick function(); 
        }
    </script>
   
    <?php

    $sql =mysqli_query($conn,"SELECT  *FROM  table_data(name,product,price , offer) values('$name','$productname'");
    if($row=mysqli_fetch_array($sql)>0){
      while($)
    }
    ?>

    <?php } }?>
    </tr>
  </tbody>
</table>
<?php }}?>
  </div>
  </div>
      </div>
      
      
   
      
</body>
</html>
