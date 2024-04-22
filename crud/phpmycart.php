<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['Add_to_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems =array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            { header('location.cartpage.php');
                echo "<script>
                alert  ('Item already added');
                window.location('cartpage.php');
                </script>";
                
                
            }
            else{

            }
            $count =count($_SESSION['cart']);
            $_SESSION['cart'][$count] =array('Item_Name' => $_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            header('location.cartpage.php');
            echo "<script>
            alert  ('item checked in list added');
             window.location('cartpage.php');
            </script>";
        
        }
        else{
            $_SESSION['cart'][0] =array('Item_Name' => $_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            
            header('location.cartpage.php');
            echo "<script>
            alert  ('Item added ');
            window.location('cartpage.php');
            </script>";

        }
    }
    if(isset($_POST['remove_item']))
    {
foreach($_SESSION['cart'] as $key =>$value)
{
    if($value['Item_Name']==$_POST['Item_Name'])
    {    unset($_SESSION['cart'][$key]);
        $_SESSION['cart']= array_values($_SESSION['cart']);
      
        echo "<script>
        alert  (' are you sure to remove the itemm');
        window.location('mycart.php');
        </script>";
    }

}
    }

    if(isset($_POST['Mod_Quantity'])){

        foreach($_SESSION['cart'] as $key =>$value)
{
    if($value['Item_Name']==$_POST['Item_Name'])
    {    
        $_SESSION['cart'][$key]['Quantity']= ($_POST['Mod_Quantity']);
    
        echo "<script>
        alert  (' are you sure to remove the itemm');
        window.location.href='mycart.php';
        </script>";
    }

}

    }
}




?>