<!DOCTYPE html>
<html lang="en">
<head>
  <title>crud </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
<h1>table</h1>

<input type="search" name ="searchvalue">
<input type="submit" placeholder="search" name="filter_search">

<?php
include('config.php');
if(isset($_POST['filter_search'])){
  $search =$_POST['searchvalue'];
  $sql =mysqli_query($conn,"SELECT *FROM table_data where CONCAT(table_id,item) = %LIKE% $search ");
}

?>
<br>
<br><hr/>
 <form action="phpdashboard.php" method="post">
            <label for="name"> name:</label>
            <input type="text" name="name" value="" placeholder="enter ypur Name">
            <br><br>
            <label for="name"> phone:</label>
            <input type="number" name="phone"  placeholder="enter ypur phone">
            <br><br>
            <label for="name"> address:</label>
            <input type="textarea" name="address" placeholder="enter your address">
            <br><br>
            
          
            <br><br>
            <input type="submit" placeholder="submit"  name="submit">
        </form>

<!--  set the table data  in table start -->


<table class="table">
  <thead>
    <tr>
      <th scope="col">jj</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>

    </tr>
  </thead>


  <tbody>


  
  <?php

include('config.php');
$i=1;
$sql = mysqli_query($conn,"SELECT * FROM table_data order by table_id");
if(mysqli_num_rows($sql)>0){
  while($row=mysqli_fetch_assoc($sql)){  
  
?>
    <tr>
   
    <td scope="row"><?php echo $i++;?></td>
      <td><?php echo $row['name'];?> </td>
      <td><?php echo$row['phone'];?></td>
      <td><?php echo $row['address'];?></td>

      
       <td>
                <a href="phpdelete.php?table_id=<?php echo $row['table_id'];?>" class="btn btn-info" name="delete" >delete
                
                </a>
               
            </td> -->
            <td>
              <a href="update.php?table_id=<?php echo $row['table_id'];?>" class="btn btn-warning" name="edit"> Edit</a>

            </td>
      <!-- <td> <a href="phpdelete.phpphp echo $row['table_id'];?>"><button class="btn btn-warning delete">delete</button></a></td> -->
 
      </td>
    </tr>
    <?php }}?>
  </tbody>
</table>

<div class="card">
  
</div>
</body>
</html>
