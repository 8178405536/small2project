<?php
include('header.php');
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>New User</header>
     <form  method="POST" action="index.php" enctype="mulitpart/form-data">
        <div class="error-txt"> </div>

    <div class="name_details">
             <div class="field input">
                 <label> First name</label>
                  <input type="text" placeholder="Enter your name" name="first" required>
            </div>
            <br>
            <div class="field input">
                <label> Last name</label>
                <input type="text" placeholder="Enter your name"name="last" required>
            </div>

            <br> 

            <div class="field input">
                <label>Email </label>
                <input type="text" placeholder=" Enter your Address"name="email" required>
            </div>
            <br>
            <div class="field input">
                <label>Password  </label>
                <input type="text" placeholder=" Enter your name Password"name="password" required>
  
<!-- <br>
            <div class="field Image">
                <label>  Select image</label>
                <input type="file" name="image" required>
            </div> -->

            <div class="field button">
            <input type="submit" value="submit" name="submit">
            </div>
            </form>
            <br>
            <div class="link">Already signed up?<a href="login.php"> Login here</a></div>
</section>
        </div>
       
       <!-- <script src="passicon.js"></script>  -->
        <!-- <script src="sign.js"></script>    -->

</body>
</html>