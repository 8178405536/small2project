

<?php
include('config.php');
session_start();


    if(isset($_POST["update"])) { 
        $vendor_id=$_GET['vendor_id'];
    
        $shopname =mysqli_real_escape_string($conn,$_POST['shopname']);
        $gstnumber =mysqli_real_escape_string($conn,$_POST['gstnumber']);
        $itemname =mysqli_real_escape_string($conn,$_POST['itemname']);
        $price =mysqli_real_escape_string($conn,$_POST['price']);
        $image =mysqli_real_escape_string($conn,$_POST['image']);
        $quantity =mysqli_real_escape_string($conn,$_POST['quantity']);
        
   

$sql =mysqli_query($conn,"UPDATE vendor_user SET shopname='$shopname',gstnumber='$gstnumber',itemname='$itemname',price='$price',image='$image',quantity='$quantity'
WHERE vendor_id= '$vendor_id'");
    header("location: vendordashboard.php");
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title> Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  <h1> update data</h1>
<header> 
 <?php
    $vendor_id = $_GET['vendor_id'];
    $sql1= mysqli_query($conn,"SELECT * FROM vendor_user WHERE vendor_id=$vendor_id");
    while($row1=mysqli_fetch_assoc($sql1)){
?>   

   
            </header>

    <br>
    
    
      <div class="row">
      <form  method="POST" action="" >
        <div class="col-sm-3">
        <div class="field input">
                <label> shop name /address</label>
                <input type="textarea" placeholder="Enter your address"name="shopname"value="<?php echo $row1['shopname']; ?>" required>
            </div>
        </div><br>
        <div class="col-sm-3">
        <div class="field input">
                <label> GST Number shop</label>
                <input type="text" placeholder="Enter your gst number"name="gstnumber" value="<?php echo $row1['gstnumber']; ?>" required>
            </div>
        </div><br>
        <div class="col-sm-3">
        <div class="field input">
                <label> Item  name</label>
                <input type="text" placeholder="Enter your  item name"name="itemname"  value="<?php echo $row1['itemname']; ?>"required>
            </div>
        </div><br>
        <div class="col-sm-3">
        <div class="field input">
                <label> Price</label>
                <input type="number" placeholder="Enter your price"name="price" value="<?php echo $row1['price']; ?>" required>
            </div> 
          </div></br>
          <div class="col-sm-3">
        <div class="field input">
                <label> photo/image</label>
                <input type="file" placeholder=" Choose file"name="image"  value="<?php echo $row1['image']; ?>">
            </div>
        </div><br>
        <div class="col-sm-3">
        <div class="field input">
                <label> Quantity</label>
                <input type="text" placeholder="Enter  number of quanrtity of item"name="quantity"  value="<?php echo $row1['quantity']; ?>"required>
            </div>
        </div><br>
        <div class="field button">
            <input type="submit" value="submit" name="update">
            </div>
          </form>
        </div>
      </div>
 
  </div>
  <?php  }  ?>
</body>
</html>
