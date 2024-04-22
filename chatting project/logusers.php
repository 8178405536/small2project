<?php
session_start();
if(!isset($_SESSION['uniqueid'])){
    header("location:login.php");
}

?>
<?php
include('header.php');
?>
<link rel="stylesheet" href="index.css">
<body>
    <div class="wrapper">
        <section class="users ">
            <header> 
            <?php
                include('config.php');
                $sql =mysqli_query($conn,"SELECT *FROM user WHERE uniqueid ={$_SESSION['uniqueid']}");

                if(mysqli_num_rows($sql)>0){
                    // if users credaitail matched
                    $row =mysqli_fetch_assoc($sql);
                    
                }
                ?> 






<div class="contents">
    <img src="download (1).jpg" alt="" srcset="">
    <div class="details">
        <span> <?php  echo $row['first'] ." ".$row['last'];?></span>
        <p> active now</p>
    </div>
</div>
<a href="chat.php" class="logout">logout</a>

            </header>

     <br>
           <div class="search">
            <span class="text"></span>
            <input type="text" placeholder="enter name to search" name="search">
            <button>
                <i class="fas fa-search"></i>
            </button>
           </div>

       <div class="users-list">
        
       
       </div>
      
            </section></div>
            <script src=""></script>
       
       
       
      

</body>
</html>