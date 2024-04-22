
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up pageh2

    </title>
</head>
<body>
    <h1>register page </h1>
    <div class="container">
        <form action="phpregister.php" method="post">
            <label for="name"> name:</label>
            <input type="text" name="name" placeholder="enter ypur Name">
            <br><br>
            <label for="name"> email:</label>
            <input type="email" name="email" placeholder="enter ypur email">
            <br><br>
            <label for="name"> address:</label>
            <input type="text" name="address" placeholder="enter ypur address">
            <br><br>
            <label for="name"> password:</label>
            <input type="password" name="password" placeholder="enter ypur password">
            <br><br>
            <input type="submit" placeholder="submit"  name="submit">
        </form>
   <h3>already sign up <a href="login.php"> click here</a></h3>
    </div>
</body>
</html>




















<!-- 
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
 <body>
<form action="phpregister.php">
        <label for="name" class="name" >name</label>
        <input type="text" placeholder="enter your name" name="name">
        <br><br>
        <label  >phone</label>
        <input type="number" placeholder="enter your phone" name="phone">
        <label >address</label>
        <input type="textarea" placeholder="enter your email" name="address">
        <br><br>
        

       
      
        <input type="submit"  name="submit">
        <div class="link">not signed up?<a href="login.php"> sign up  here</a></div>
    </form>
</body>
</html> -->
 
<!-- 
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>New User</header>
     <form  method="POST" action="phpregister.php" enctype="mulitpart/form-data">
        <div class="error-txt"> </div>

    <div class="name_details">
             <div class="field input">
                 <label> First name</label>
                  <input type="text" placeholder="Enter your name" name="name" required>
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
            </div> 
          
    
    

            <div class="field button">
            <input type="submit" value="submit" name="submit">
            </div>
            </form>
            <br>
            <div class="link">Already signed up?<a href="login.php"> Login here</a></div>
</section>
        </div>
       

</body>
</html> --> 