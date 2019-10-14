<?php
              
include("header.php");              
    

    if(isset($_POST['submit'])){
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $time=$_POST['time'];
        $date_to=$_POST['dateto'];
        $date_from=$_POST['datefrom'];
        $guest=$_POST['guest'];
        $food=$_POST['food'];
        $function=$_POST['function'];
        $status=0;
        
        $select="SELECT * FROM `booking`";
            $suc=mysqli_query($conn,$select);
        $row=mysqli_fetch_array($suc);
        $date=$row['date_to'];
        if($date!=$date_to){
        $qry="INSERT INTO `booking`(`id`, `name`, `contact`, `address`, `email`, `booking_time`, `date_to`, `date_from`, `no_of_guest`, `food`, `function_type`, `status`) VALUES ('','$name','$contact','$address','$email','$time','$date_to','$date_from','$guest','$food','$function','$status')";
        $success=mysqli_query($conn,$qry);
        
        if($success){
            echo "data inserted successfullty";
            
        }
    }
        else{
        echo "This date is already reserve";
        
    }
    }


?>              
              <div class=" body-section">
      <div class="container" >
      
    
          <div class="col-md-3"></div>
      <div class="col-md-6 ">
          <h1>Hall Booking</h1>
          
         <form method="post" action="">
                <div class="form-group">
                    <label for="name"> Name:</label>
                    <input type="text" placeholder=" Name"  class="form-control" name="name" required>
                </div>
             <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Email"  class="form-control" name="email" required>
            </div>
             <div class="form-group">
                    <label for="email">Contact:</label>
                    <input type="text" placeholder="Contact"  class="form-control" name="contact" required>
            </div>
              <div class="form-group">
                    <label for="Address">Address:</label>
                   <textarea class="form-control" rows="5" name="address" required></textarea>
            </div>
             <div class="form-group">
                 <label for="email">Booking Time:</label>
                   <select class="form-control" name="time" required>
                        <option value="morning">Morning</option>
                        <option value="night">Night</option>
                 
                    </select>
            </div>
             <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="subject">Date To:</label>
                    <input type="date" id="date_to"  class="form-control" name="dateto" required>
                     <span id="r"></span>
                </div>
             
             </div> 
             <div class="col-md-6">
                     <div class="form-group">
                            <label for="subject">Date From:</label>
                            <input type="date"  class="form-control" name="datefrom" required>
                    </div>
              </div> 
                  </div>
             
              <div class="form-group">
                    <label for="email">No Of Guest:</label>
                    <input type="text" class="form-control" name="guest" required>
            </div> 
             <div class="form-group">
                 <label for="food">Food:</label>
                   <select class="form-control" name="food" required>
                          <option value="non">-Non-</option>
                        <option value="Vegiterian">Vegiterian</option>
                        <option value="Non-Vegiterian">Non-Vegiterian</option>
                        <option value="Yes">Yes</option>
                     
                 
                    </select>
            </div>
            <div class="form-group">
                 <label for="email">Function Type:</label>
                   <select class="form-control" name="function" required>
                        <option value="Wedding">Wedding</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Engagemnet">Engagemnet</option>
                        <option value="Party">Party</option>
                        <option value="Other">Other</option>
                 
                    </select>
            </div> 
            
           <input type="submit" value="Reserve Booking"  class="btn btn-success " name="submit" >
                        
             </form> 
          
          
          
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
        </div>
            </div>
      
      </div> 

              
 <?php
    include("footer.php");              
    ?>              