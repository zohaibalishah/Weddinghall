<?php
  include("../db.php");

   session_start();
    if(!isset($_SESSION['id'])){
        $_SESSION['error'] = "you must login first";
        header('location:../admin.php');
        
    }
else{
     $userid = $_SESSION['id'];
    $userdata = mysqli_query($conn,"SELECT `id`, `name`, `email`, `password` FROM `admin` WHERE id='$userid'");
    $result = mysqli_fetch_array($userdata);
    
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
      
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>  
  </head>
  <body>
      <div id="wrapper">
      
      
      <!--      Menu -->
         
    <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
        <strong>Admin</strong>
          </a>
        </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav">
            <li><a href="index.php" >Home</a></li>
           
                <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
            

          </ul>
          <ul class="nav navbar-nav navbar-right" >
            
            <li><a href="../logout.php"><i class="fa fa-power-off "></i> Logout</a></li>
            

          </ul>
        </div><!-- /.navbar-collapse -->
          
          
      </div><!-- /.container-fluid -->
 </nav>
<!--     -->   