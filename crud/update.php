
        <?php
         include('config.php');
         if(isset($_POST['submit'])){
            $table_id =$_GET['table_id'];
            $name =$_POST['name'];
            $phone =$_POST['phone'];
            $address =$_POST['address'];
            
            $sql =mysqli_query($conn,"UPDATE table_data set name='$name',phone='$phone',address='$address' where table_id=$table_id");
            header('location:dashboard.php');
         }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>
<body>
   

<?php
$table_id =$_GET['table_id'];
$query =mysqli_query($conn,"SELECT * FROM  table_data WHERE table_id='$table_id'");
while($row1=mysqli_fetch_assoc($query)){
?>
   <h1> update page</h1> 

   <form action="" method="post">
            <label for="name"> name:</label>
            <input type="text" name="name" value="<?php echo $row1['name'];?>" placeholder="enter ypur Name">
            <br><br>
            <label for="name"> phone:</label>
            <input type="number" name="phone" value="<?php echo $row1['phone'];?>"  placeholder="enter ypur phone">
            <br><br>
            <label for="name"> address:</label>
            <input type="textarea" name="address"value="<?php echo $row1['address'];?>"  placeholder="enter your address">
            <br><br>
            
          
            <br><br>
            <input type="submit" placeholder="submit"  name="submit">
        </form>

<?php  }?>
</body>
</html>