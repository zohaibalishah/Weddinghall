<?php
include("header.php");

    if(isset($_POST['submit'])){
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['mobile'];
        $subject=$_POST['subject'];
        $message=$_POST['msg'];
       
        $qry="INSERT INTO `contastus`(`id`, `name`, `email`, `contact`, `subject`, `message`) VALUES ('','$name','$email','$contact','$subject','$message')";
        
        $success=mysqli_query($conn,$qry);
        
        if($success){
            echo "message send successfullty";
            
        }
    }


?>
   
              <div class=" body-section">
      <div class="container" >
      
      
     <div class="col-md-4">
          
        <div class="row">
         
            <div>
                <h2>Feedback</h2>
                <p>Any feedback or comment plz contact us here
                Any feedback or comment plz contact us hereAny feedback or comment plz contact us hereAny feedback or comment plz contact us hereAny feedback or comment plz contact us here
                
                
                </p>
            </div> 
            <hr>
            <div>
            <img src="facilityimg/cu.PNG">
            
            </div>
               <hr>
         <div >
                <h2>Wedding Hall Information</h2>
                <p><strong><i class="fa fa-home " style="font-size: 22px"></i> Address:</strong> University Road</p>
                <p><strong><i class="fa fa-phone" style="font-size: 22px"></i> Phone No:</strong> (+92)345672</p>
                <p><strong><i class="fa fa fa-envelope" style="font-size: 22px"></i> Email address:</strong> abc@gmail.com</p>
            </div> 
         
        </div>     
          
          
          
          
    </div> 
          <div class="col-md-2"></div>
      <div class="col-md-6 ">
          <h1>Contact us</h1>
          
         <form method="post" action="">
                <div class="form-group">
                    <label for="name"> Name:</label>
                    <input type="text" placeholder=" Name"  class="form-control" name="name">
                </div>
             
             <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Email"  class="form-control" name="email">
            </div>
             <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" placeholder="Mobile No"  class="form-control" name="mobile">
            </div>
             <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" placeholder="Category Name"  class="form-control" name="subject">
            </div>
              <div class="form-group">
                    <label for="message">Message:</label>
                   <textarea class="form-control" rows="5" name="msg"></textarea>
            </div> 
           <input type="submit" value="Send"  class="btn btn-primary btn-block" name="submit">
                        
             </form> 
          
          
          
        </div> 
      
      
            </div>
      
      </div>

 <?php
    include("footer.php");              
    ?>