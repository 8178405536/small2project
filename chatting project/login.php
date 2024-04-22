<?php
include('header.php');
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Welcome</header>
     <form  method="post" action="phplogin.php">
        <div class="error-txt"> This is an error message</div>

    <div class="name_details">
             <div class="field input">
                 <label>  email</label>
                  <input type="email" placeholder="email" name="email" required>
            </div>

            <div class="field input">
                <label> Password </label>
                <input type="password" placeholder="password" name="password" required>
                <i class="fas fa-eye"></i>
            </div>

            

            <div class="field button">
            <input type="submit" value="submit" name="login">
            </div>
            </form>
            <br>
            <div class="link">Not yet signed up?<a href="register.php"> sign up here</a></div>
</section>
        </div>
       
          
       <script src="passicon.js"></script>      

</body>
</html>