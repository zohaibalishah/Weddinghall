<?php
include("db.php");


 if(isset($_POST['submit'])){
        
        $name=$_POST['date'];
        
       
        $qry="SELECT * FROM `booking` WHERE date_to='2018-05-03'";
        $success=mysqli_query($conn,$qry);
         if($success){
            echo "date alreday exist<br>";
             
         }else{
               echo "date not exist<br>";
             
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
    <link href="../css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css" >
      <link rel="stylesheet" type="text/css" href="css/lightbox.min.css" >
      
<!--    <link href="Admin/css/style.css" rel="stylesheet">-->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 
   
  </head>
  <body>
<!--      Menu -->
          <div id="wrapper" >
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
         Wedding Hall
          </a>
        </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallary.php">Gallary</a></li>
              <li><a href="reservation_form.php">New Booking</a></li>
            <li><a href="#">About Us</a></li>
         
            <li><a href="contactus.php">Contact Us</a></li>
          
            

          </ul>
        </div><!-- /.navbar-collapse -->
          
          
      </div><!-- /.container-fluid -->
 </nav>
              
              
              
              
        
<!--      Menu -->
          <div id="wrapper" >
     <div class="col-md-2"></div>
      <div class="col-md-6 ">
          <h1>Contact us</h1>
          
         <form method="post" action="">
                <div class="form-group">
                    <label for="date"> Date:</label>
                    <input type="date" placeholder=" Name"  class="form-control" name="date">
                </div>
             
             
            
           <input type="submit" value="Send"  class="btn btn-primary " name="submit">
                        
             </form> 
              </div></div>
        <?php include('footer.php'); ?>