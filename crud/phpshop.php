<?php
function component(){
    $element ="
    <div class=\"col-md-3 col-sm-6 my-md-0">
            <form action=\"phpshop.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="image/cloth2.jpg" alt="image"  class="img-fluid card-img-top"srcset="">
                    </div>
                    <div class="card-body">
                        <h3 class="card_title">product 1</h4>
                        <h5>        
               <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                   <i class="fa fa-star checked"></i>
          <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
              
                        </h5>
                        <h6 class="card-detail">
                        Many of our components require the use of JavaScript to plugins and Popper. Place one of the following nethem.  
                        </h6>
                        <small><s class="text-secondary">RS499</s></small>
                        <p class="price">RS.599</p>
                        <button  type="submit" class="btn btn-warning" name="add">add to cart <i class="fas fa-shopping"></i></button>
                    </div>
                </div>
            </form>
        </div>
    ";
}
?>