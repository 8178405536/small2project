<?php
session_start();
include_once"config.php";
$name =mysqli_real_escape_string($conn,$_POST['first']);
$last =mysqli_real_escape_string($conn,$_POST['last']);
$email =mysqli_real_escape_string($conn,$_POST['email']);
$password =mysqli_real_escape_string($conn,$_POST['password']);


if(!empty($name)&& !empty($last)&& !empty($email)&& !empty($password)){
// lets check user email is valid is not EMPTY
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){//if email is valid
    // let check that email alredy exitin databadse or not
    $sql =mysqli_query($conn,"SELECT email FROM user WHERE email ='{$email}'");
    if(mysqli_num_rows($sql)>0){//if email aready exit
        echo "$email this email already exist!";
    } else {
        // lets chech photo upload ya niot
        if(isset($_FILES['image'])){// if file upload
            $img_name =$_FILES['image']['name'];
            $image_type =$_FILES['image']['type'];
            $tmp_name =$_FILES['image']['tmp_name']; // used to store temporey file folder
            //lets explode image and extension of imafe
$img_explode = explode('.',$img_name);
$img_ext =end($img_explode);
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    $sql =mysqli_query($conn,"SELECT * FROM users where email ='{$email}'");
    if(mysqli_num_rows($sql)>0){
        echo "$email this is already exitbthis email"
;    }
}

$extensions =['png','jpeg','jpg'];

if(in_array($img_ext,$extensions) === true) {
    $time = time();

$new_img_name = $time.$img_name;

if(move_uploaded_file($tmp_name,"image/".$new_img_name )){

    $status ="Active now";
    $random_id = rand(time(),10000000);

    $sql2 =mysqli_query($conn,"INSERT INTO user(uniqueid,first,last,email,password,image,status) VALUES ({$random_id},'{$name}','{$last}','{$email}','{$password}','{$new_img_name}','{$status}')");

    if($sql2){
$sql3 = mysqli_query($conn,"SELECT *FROM user WHERE email='{$email}'");
if(mysqli_num_rows($sql3)>0){
    $row =mysqli_fetch_assoc($sql3);
    $_SESSION['uniqueid']=$row['uniqueid'];
    echo"success";

}


      
    }else{
        echo"something went wromg";
    }
}
}else{
    echo"plese select file tyupe jpg,png,jpeg";
}

  }
  else   {
        echo "plese select hloimage file";
           }
     }      }
else
          {
        echo"$email this is not valid email";
          }
}

else
{
    echo" $email this email is not correct"
;}


?>

<?php

include ("config.php");
 if(isset($_POST['filter_btn'])){
  $value_filter=$_POST['filter_value'];
 $query="SELECT * FROM user WHERE CONCAT(first,id) LIKE '%$value_filter%' ";
$query_run=mysqli_query($conn,$query);

 if(mysqli_num_rows($query_run)>0){
 while($row6=mysqli_fetch_array($query_run))    
 { ?>
 <a href="dashboard.php?Action=Show&id=<?php echo $row6['id'];?>"><?php echo $row6['first'];?></a>
 <?php
 }
   }
else{
 echo "No Record Found..!";
   }
   }    
   

  ?>    
  