<?php
include("db.php");


function make_query($conn){
    
    $success=mysqli_query($conn,"SELECT * FROM `slider_img` ORDER BY id ASC  ");
    return $success;
}


function make_slider_indicator($conn){
    
    $output = '';
    $count=0;
    $success = make_query($conn);
    while($row=mysqli_fetch_array($success)){
        
        if($count == 0){
            
            $output .='
              <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>';
        }else{
              $output.='
              <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>';
            
        }
        $count=$count+1;
    }
    return $output ;
}

function make_slides($conn){
    
    $output = '';
    $count = 0;
    $success = make_query($conn);
    while($row = mysqli_fetch_array($success)){
            if($count == 0){
            
            $output .='<div class="item active" >';
                
        }
        else{
              $output .='<div class="item" >';
            
        }
         $output .='
         <img src="Admin/'.$row["img"].'" alt="'.$row["title"].'" />
         <div class="carousel-caption" >
        <h3>'.$row["title"].'</h3>
        <p>'.$row["text"].'</p>
        <a class="btn btn-warning" href="'.$row["btn_link"].'" style="color:black"><strong>Read More</strong></a>
      </div>
      </div>
         ';
        $count = $count + 1;
    }
      return $output ;
}












?>
<!--Carasoul slider-->
   
                 
       
         <div class=" body-section">
      <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
<!--
  <ol class="carousel-indicators">
      
      <?php echo make_slider_indicator($conn); ?>
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
      
      <?php echo make_slides($conn); ?>
      
<!--
    <div class="item active">
      <img src="images/s1.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/s22.PNG" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>
-->

   
  </div>
    

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#dynamic_slide_show" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#dynamic_slide_show" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
             
             
    