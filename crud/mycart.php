<?php
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cart</title>
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-lg-12 text-center border rounded bg-light mg-5"><h1>cart order</h1></div>
<div class="col-lg-8">
<table class="table">
  <thead>
    <tr>
      <th scope="col">sno </th>
      <th scope="col">item name</th>
      <th scope="col">item price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">remover</th>
    </tr>
  </thead>
  <tbody class="text_center">
    <?php 
    $total=0;
    if(isset($_SESSION['cart'])) 
    {
    foreach($_SESSION['cart'] as $key =>$value)
{
  $sr =$key+1;

    echo"   
    <tr>
      <th >$sr</th>
      <td>$value[Item_Name]</td>

      <td>$value[Price] <input type='hidden' class ='iprice' value='$value[Price]'></td>

     
           <td> <form action='phpmycart.php' method='POST'>   
                 <input class='text-center iquantity'  name ='Mod_Quantity' onchange='this.form.submit();' type='number'  value='$value[Quantity]' min='1' max='10'>
                 <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                 </form>
           </td>
     

      <td class='itotal'></td>
      
      <td> 
               <form action='phpmycart.php' method='POST'>
                  <button  name='remove_item' class='btn btn-outline-danger'>REMOVE </button>
               <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
      </td>

    </tr>
    ";}}?>
   
  </tbody>
</table>

</div>
<div class="col-lg-4">
<div class="border  bg-light rounded p-5">
                <h3>Grand totals:</h3>
                <h5 class="text_right" id="gtotal"></h5>
                
 <form action="purchase.php" method="post">

                <div class="input-group mb-3">
                   <span class="input-group-text" id="basic-addon1">first name</span>
                   <input type="text" class="form-control" name="Username" aria-describedby="basic-addon1" required>
               </div>

               <div class="input-group mb-3">
                   <span class="input-group-text" id="basic-addon1">address</span>
                   <input type="textarea" class="form-control" name="address"  aria-describedby="basic-addon1" required>
               </div>

               <div class="input-group mb-3">
                   <span class="input-group-text" id="basic-addon1">phone number </span>
                   <input type="number" class="form-control" name="phone_number" aria-describedby="basic-addon1" required>
               </div>
     
                 <div class="form-check">
                      <input class="form-check-input" type="radio" 

                        ="paymode" id="flexRadioDefault2" checked>
                     <label class="form-check-label" for="flexRadioDefault2">
                                cash on delivery
                         </label>
                               </div>
                    <button type="button" class="btn btn-primary " name="submit"> Make purchase</button>
     </form>
   
            </div></div>
</div>
</div>



<script>
 var  gt=0;
  var iprice =document.getElementsByClassName('iprice');
  var iquantity =document.getElementsByClassName('iquantity');
  var itotal =document.getElementsByClassName('itotal');
  var gtotal =document.getElementById('gtotal');
  
 
    
 function subtotal()
 {
  gt=0;
  for(i=0;i<iprice.length;i++)
  {
    itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
    gt=gt+(iprice[i].value)*(iquantity[i].value);
  }
  gtotal.innerText=gt;
 }
 subtotal();
 </script>
</body>
</html>