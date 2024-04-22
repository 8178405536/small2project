<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>vendor  result show</title>
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
<?php
                include('config.php');
                $sql =mysqli_query($conn,"SELECT *FROM user WHERE uniqueid ={$_SESSION['uniqueid']}");
             
                if(mysqli_num_rows($sql)>0){
                    // if users credaitail matched
                    $row =mysqli_fetch_assoc($sql);
                     $sql =mysqli_query($conn,"SELECT *FROM  user where id =")
                  
                }
                ?> 

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





<div class="container-fluid"> 

  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2> <span> <?php  echo $row['first'] ." ".$row['last'];?></span></h2>
      <ul class="nav nav-pills nav-stacked">
      
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>vendor name</h4>
        <h2> <span> <?php  echo $row['first'] ." ".$row['last'];?></span></h2>
      </div>
      <div class="row">
      <form  method="POST" action="phpvendordashbord.php" >
        <div class="col-sm-3">
        <div class="field input">
                <label> shop name /address</label>
                <input type="textarea" placeholder="Enter your address"name="shopname" required>
            </div>
        </div><br>

        <div class="col-sm-3">
            <div class="field input">
                <label> GST Number shop</label>
                <input type="text" placeholder="Enter your gst number"name="gstnumber" MaxLength="15" id="txtGSTIN" pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$" title="Invalid GST Number."  class="gst" required>
   
            </div>
        </div><br>
        

       
        
        <div class="col-sm-3">
        <div class="field input">
                <label> Item  name</label>
                <input type="text" placeholder="Enter your  item name"name="itemname" required>
            </div>
        </div><br>
        <div class="col-sm-3">
        <div class="field input">
                <label> Price</label>
                <input type="number" placeholder="Enter your price"name="price" required>
            </div> 
          </div></br>
        
          <div class="col-sm-3">
        <div class="field input">
                <label> photo/image</label>
                <input type="file" placeholder="Choose file" name="image" title="Invalid file  url." accept="image/png, image/jpeg"  required>
            </div>
        </div><br>
        <div class="col-sm-3">
        <div class="field input">






        
                <label> Quantity</label>
                <input type="text" placeholder="Enter  number of quantity of item"name="quantity" required>
            </div>
        </div><br>
        <br><br></br>
        
        <div class="col-sm-3">
                  <label for="inputEmail4" class="form-label">Country</label>
                  <select id="country" name="country" class="form-select">
                      <option >Select Country</option>
                  </select>
                </div>

                <br><br>
     
        
                <div class="col-sm-3">
                  <label for="inputEmail4" class="form-label">State</label>
                  <select id="state" name="state" class="form-select">
                      <option >Select State</option>
                  </select>
                </div>
<br>
                <div class="col-sm-3">                  
                  <label for="inputEmail4" class="form-label">City</label>
                  <select id="city" name="city" class="form-select">
                      <option >Select City</option>
                  </select>
                </div>
      
               <br>
        
        <div class="text-center">
                  <button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
                </div>
          </form>
        </div>
      </div>
      
     <hr>
<br><br></hr>
      <div class="search-bar">
  <form class="search-form d-flex align-items-right" method="POST" action="">
    <input type="text" name="filter_value" placeholder="Search" title="Enter search keyword">
    <button name="filter_btn" title="Search"><i class="bi bi-search">submit</i></button>
  </form>

  <div class="search">
  <div class="slabel"> Searches</div>
   <div class="lsearches">
<div class="">

 <?php 
  if(isset($_POST['filter_btn'])){
  $value_filter=$_POST['filter_value'];
   $query="SELECT * FROM vendor_user WHERE CONCAT(itemname,vendor_id) LIKE '%$value_filter%' ";
   $query_run=mysqli_query($conn,$query);

   if(mysqli_num_rows($query_run)>0){
    while($row6=mysqli_fetch_array($query_run))    
     { ?>
   <a href="vendordashboard.php?Action=Show&vendor_id=<?php echo $row6['vendor_id'];?>"><?php echo $row6['itemname'];?></a>
    <?php
        }
   }
    else{
  echo "No Record Found..!";
  }
          }                                        
  ?>

  <?php

if(isset($_POST['submit'])){

  $valuesearch =$_POST['search_btn']
  $sql = mysqli_query($conn,"SELECT * FROM school_data where CONCAT(itemname,name) %LIKE% ")
;
if(mysqli_num_rows($sql)>0 ){
  $row = mysqli_fetch_assoc()
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
                <td> <a class="btn btn-success" name="delete" >pending  </a> 
                </td>


    
   
    

    <?php } }?>
    </tr>
  </tbody>
</table>
<?php }}?>
  </div>
  </div>
      </div>
      <!-- script file name -->
      
  
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#country').change(function() {
                    loadState($(this).find(':selected').val())
                })
                $('#state').change(function() {
                    loadCity($(this).find(':selected').val())
                })


            });

            function loadCountry() {
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=country"
                }).done(function(result) {


                    $(result).each(function() {
                        $("#country").append($(result));
                    })
                });
            }
            function loadState(countryId) {
                $("#state").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=state&countryId=" + countryId
                }).done(function(result) {

                    $("#state").append($(result));

                });
            }
            function loadCity(stateId) {
                $("#city").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=city&stateId=" + stateId
                }).done(function(result) {

                    $("#city").append($(result));

                });
            }

            // init the countries
            loadCountry();
        </script>
</body>

</html>
      
      
   
 