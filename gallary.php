 
 <?php
    include("header.php");  





    ?>
    <link rel="stylesheet" type="text/css" href="css/gallary_style.css" >
      
             
              <div class=" body-section">
                     <div class="container-fluid">
        <div class="row margin-top " >
            <div class="col-md-9 facilities">
                <h2><span class="our">Our</span> Gallary</h2>
                <div class="col-md-12 facility-nested">
                
             <div class="row"> 
                 
        <?php
                  
        $success=mysqli_query($conn,"SELECT * FROM `gallary`");
            while($row=mysqli_fetch_array($success)){   
                
              
        ?>         
 <div class="col-md-4">
            
           
          
            <div class="panel-body"><a href="Admin/<?php echo $row['img']; ?>" data-lightbox="mygallery" data-title="How to vraete Pagenation How to vraete">
        
            <img src="Admin/<?php echo $row['img']; ?>"></a></div>
            <div class="panel-footer"><?php echo $row['text']?></div>
                       
    </div>
  <?php } ?>
   
            </div></div> 
            </div>
         
            <div class="col-md-3">
            <div class="col-md-12 info" >
                <h2><span class="our">Contact</span> Info</h2>
                <div class="col-md-12 info-nested" >
               <p><i class="fa fa-home"> </i><strong> Address:</strong><br> Ring Road Qazi abad peshawar near Patang chock</p>
               <p><i class="fa fa-phone"> </i><strong> Contact#:</strong><br> <p>+92(0)314-9143061<br>(091)+3345221 </p> 
                <p><i class="fa fa-envelope"> </i><strong> Email Address:</strong><br> <p>zohaibalishah9@gmail.com </p>     
                </div></div><hr>
              <div class="col-md-12 info social" >
                <h2><span class="our">Social</span> Links</h2>
                <div class="col-md-12 info-nested" >
                    <a href="#"><p><i class="fa fa-facebook"></i> facbook</p></a>
                    <a href="#"><p><i class="fa fa-twitter"></i> Twitter</p></a>
                    <a href="#"><p><i class="fa fa-google"></i> Google</p></a>
                    <a href="#"><p><i class="fa fa-instagram"> Instagram</i></p></a>
                </div></div> 
        </div></div>                 

      </div>
  <?php
    include("footer.php");              
    ?>