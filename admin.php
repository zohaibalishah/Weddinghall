<?php
session_start();
include('db.php');
if(isset($_POST['login'])){
    
    $name=$_POST['name'];
    $password=$_POST['pwd'];
        
    $sel = mysqli_query($conn," SELECT `id`, `name`, `email`, `password` FROM `admin` where name='$name' and password='$password'");
    $row = mysqli_num_rows($sel);
    
    if($row>0){
    $fetch_user=mysqli_fetch_array($sel);
        $_SESSION['id'] = $fetch_user['id'];
      
       
        
        header("location:Admin/index.php");
        
    }else{
        
        header("location:admin.php");
        
    }
    
            
   
    
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Town Portal</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/mystyle.css">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<!--    <link href="Admin/css/style.css" rel="stylesheet">-->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>  
  </head>
  <body>    





<div class="container">
     
        <div class="col-md-3" ></div>
        <div class="col-md-6" style="margin-top:50px">
            
    <?php
            
      if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger" style="background-color:maroon;color:white">
  <center><strong>'.$_SESSION['error'].'</strong></center> 
</div>';
      }?>            
    
        
           
            
            
            
<div class="panel panel-danger" >
  <div class="panel-heading" ><h2 class="text-center">Admin Login</h2></div>
  <div class="panel-body">
   
      
                <form role="form" method="post" action="admin.php">
  <div class="form-group">
    <label for="name">User Name:</label>
    <input type="text" class="form-control"  name="name" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" required>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-danger" name="login">Log in</button>
</form>
        
        
                
        
        
        
        
        
      
      
      
     
    
    
    
    </div>
</div>
</div>
        <div class="col-md-3"></div> 
        
       </div>