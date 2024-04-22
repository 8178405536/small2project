<?php
if(isset($_POST['submit'])){
    $files =$files['image'];

  
    $fileName =$files['name'];
    $fileSize =$files['size'];
    $fileTmpLoc =$files['tmp_name'];
    $fileError =$files['error'];


    $f =explode('.',$fileName);
    $fileExt =strlower($f[1]);
    $allowedExt array('jpg','jpeg','png');
    if(in_array($fileExt,$allowedExt )){
        if($fileSize<200000){
            $fileNewName =uniqid('TEST_',false);
            $dest ='all images/'.$fileNewName.'.'.$fileExt;
            move_uploaded_file($fileTmpLoc,$dest);
        } else{
            echo "file size exceeded";

        }
    }else{
        echo "file type not supported";
    }

}
?>