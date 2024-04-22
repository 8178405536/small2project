<?php

include('header.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>cart page</title>
</head>
<body>
    <h1> shoping detail</h1>
  
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="phpmycart.php"  method="POST">

            <div class="card" style="width: 18rem;">
              <img src="image/cloth.png" class="card-img-top" alt="...">
               <div class="card-body">
                <h5 class="card-title"> product 1</h5>
                 <p class="card-text"> price: Rs .450</p>
                    <button  type="submit" class="btn btn-info" name="Add_to_Cart"> Add To Cart</button>
                    <input type="hidden" name="Item_Name" value= "bag 1"> 
                  <input type="hidden" name="Price" value= "450"> 
  
     </div>
    </div>


            </form>
        </div>

        <!-- escond -->

        <div class="col-lg-3">
            <form action="phpmycart.php" method="POST">

            <div class="card" style="width: 18rem;">
              <img src="image/cloth2.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                <h5 class="card-title">product 2</h5>
                 <p class="card-text"> price: Rs .750</p>
                    <button  type="submit" class="btn btn-info"name="Add_to_Cart"> Add To Cart</button>
                    <input type="hidden" name="Item_Name" value= "PRODUCT 2"> 
                  <input type="hidden" name="Price" value= "750"> 
  
     </div>
    </div>

            </form>
        </div>
        <!-- thir -->
        <div class="col-lg-3">
            <form action="phpmycart.php" method="POST">

            <div class="card" style="width: 18rem;">
              <img src="image/cloth3).jpg" class="card-img-top" alt="...">
               <div class="card-body">
                <h5 class="card-title">product 3</h5>
                 <p class="card-text"> price: Rs .950</p>
                    <button  type="submit" class="btn btn-info"name="Add_to_Cart"> Add To Cart</button>
                    <input type="hidden" name="Item_Name" value= "PRODUCT 3"> 
                  <input type="hidden" name="Price" value= "950"> 
  
     </div>
    </div>

            </form>
        </div>
        <!-- foryh -->
        <div class="col-lg-3">
            <form action="phpmycart.php" method="POST">

            <div class="card" style="width: 18rem;">
              <img src="image/cloth.png" class="card-img-top" alt="...">
               <div class="card-body">
                <h5 class="card-title">product 4</h5>
                 <p class="card-text"> price: Rs .850</p>
                    <button  type="submit" class="btn btn-info"name="Add_to_Cart"> Add To Cart</button>
                    <input type="hidden" name="Item_Name" value= "product 4"> 
                  <input type="hidden" name="Price" value= "850"> 
  
     </div>
    </div>

            </form>

            <!-- total -->
           




        </div>
    </div>
</div>




</body>
</html>