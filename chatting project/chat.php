<?php
session_start();
if(!isset($_SESSION['uniqueid'])){
    header("location:login.php");
}

?>
<?php
include('header.php');
?>
<body>
    <div class="wrapper">
        <section class="chat-area ">
            <header> 
                <?php
                include('config.php');
                $user_id =mysqli_real_escape_string($conn,$_GET['user_id']);
                $sql =mysqli_query($conn,"SELECT *FROM user WHERE uniqueid ={$_SESSION['uniqueid']}");

                if(mysqli_num_rows($sql)>0){
                    // if users credaitail matched
                    $row =mysqli_fetch_assoc($sql);
                }
                ?>
<a href="#" class="back-icon"> <i class="fas fa-arrow-left"></i></a>
    <img src="download (1).jpg" alt="" srcset="">
   
    <div class="details">
        <span> <?php  echo $row['first'] ." ".$row['last'];?></span>
        <p> active now</p>
    </div>

            </header>

            <div class="chat-box">

                
                  <div class="chat incoming" name="incoming">
                        <img src="download (1).jpg" alt="" srcset="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, non?</p>
                    </div>
                </div>
                <div class="chat-outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, non?</p>
                    </div>
                </div>
                  <div class="chat incoming">
                        <img src="download (1).jpg" alt="" srcset="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, non?</p>
                    </div>
                </div>
                
                
                
                
                        
            </div>
            <form action="#" class="typing-area" autocomplete="off">
        
                <input type="text" name="outgoing" value="<?php echo $_SESSION['uniqueid'];?>"  hidden>
                <input type="text" name="incoming" value="<?php echo $user_id ['uniqueid'];?>" >
                
                <input type="text" placeholder="type a message here"  class="input-field" name ="message">
                <button>submit
                    <i class="fab fa-btn"></i>
                </button>
            </form>
</section>
</div>
<script src="chat.js"></script>
</body>
</html>