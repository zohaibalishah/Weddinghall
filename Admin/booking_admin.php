<?php
include("header.php");



//delete code
if(isset($_POST['delete'])){
    $d_id=$_POST['deleteid'];
    mysqli_query($conn,"DELETE FROM `booking` WHERE id=' $d_id'");
    
    
}

//update  code
if(isset($_POST['update'])){
    $u_id=$_POST['updateid'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $time=$_POST['time'];
        $date_to=$_POST['date_to'];
        $date_from=$_POST['date_from'];
        $guest=$_POST['guest'];
        $food=$_POST['food'];
        $function=$_POST['function'];
        $status=0;
    $update="UPDATE `booking` SET `name`='$name',`contact`='$contact',`address`='$address',`email`='$email',`booking_time`='$time',`date_to`='$date_to',`date_from`='$date_from',`no_of_guest`='$guest',`food`='$food',`function_type`='$function' WHERE id='$u_id'";
    mysqli_query($conn,$update);
    
    
}

?>
   


   
             <div class="container body-section">
             <ol class="breadcrumb" style="font-size:20px">
                    <li> <i class="fa fa-tachometer"> <a href="index.php">Dashboard</a></i>
                 <li> <i class="fa fa-tachometer"> <a href="index.php">All Reservation</a></i><li> <i class="fa fa-tachometer"> <a href="index.php">Gallary</a></i> <li> <i class="fa fa-tachometer"> <a href="index.php">Facilites</a></i> <li> <i class="fa fa-tachometer"> <a href="index.php">Slider</a></i> <li> <i class="fa fa-tachometer"> <a href="index.php">Social Links</a></i>
                     
                </ol>
            
            <h1><i class="fa fa-folder-open"></i> Booking<small> different Categories</small></h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-tachometer"> <a href="index.php">Dashboard</a></i>
                    <li class="active"> <i class="fa fa-folder-open"></i>
                       Categories</li> 
                </ol>

                
                
                    
                <div class="col-md-12">
                    
                    <!--Category table-->
     
                <table class="table table-hover table-striped table-bordered">
                
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>C Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Time</th>
                            <th>Date To</th>
                            <th>Date From</th>
                            <th>Guest</th>
                            <th>Food</th>
                            <th>Function</th>
                           
                            <th>Accept</th>
                            <th>Edit</th>
                            <th>Delet</th>
                        
                        </tr>
                    
                    </thead>
                    <tbody>
                         <?php
                        $i=0;
        $success=mysqli_query($conn,"SELECT * FROM `booking` ORDER by id DESC");
            while($row=mysqli_fetch_array($success)){   
                $i++;
                
        ?> 
                        <tr>
                           
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['booking_time']; ?></td>
                            <td><?php echo $row['date_to']; ?></td>
                            <td><?php echo $row['date_from']; ?></td>
                            <td><?php echo $row['no_of_guest']; ?></td>
                            <td><?php echo $row['food']; ?></td>
                            <td><?php echo $row['function_type']; ?></td>
                            <td><a href="<?php echo $row['id']; ?>" class="btn btn-success"><i class="fa fa-check"></i><?php $row['status']; ?></a></td>
                            <td><a role="button" data-toggle="modal" href="#U<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i><?php $row['status']; ?></a></td>
                            <td><a role="button" data-toggle="modal" href="#D<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr> 
                        
                        
                        
                        
                                      
                    <!-- delete -->
<div class="modal fade" id="D<?php echo  $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you want to delete the <h3 style="color:red"><?php echo $row['name']; ?></h3> Booking</h4>
      </div><form action="" method="post">
      <div class="modal-body">
        <input type="hidden" name="deleteid" value="<?php echo $row['id']; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete">Click Delete</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!--             update modal       -->
                    
    <div class="modal fade" id="U<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you want to update the <span  style="color:orange"> <?php echo $row['name']; ?></span> Record  </h4>
      </div><form action="" method="post">
      <div class="modal-body">
        <input type="hidden" name="updateid" value="<?php echo $row['id']; ?>">
         <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="subject">Name:</label>
                    <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="name" required>
                </div>
               <div class="form-group">
                            <label for="subject">Email:</label>
                            <input type="text" value="<?php echo $row['email']; ?>" class="form-control" name="email" required>
                    </div> <div class="form-group">
                            <label for="subject">Date To:</label>
                            <input type="date" value="<?php echo $row['date_to']; ?>" class="form-control" name="date_to" required>
                    </div><div class="form-group">
                            <label for="subject">No Of Guest:</label>
                            <input type="text" value="<?php echo $row['no_of_guest']; ?>" name="guest" class="form-control" name="datefrom" required >
                    </div><div class="form-group">
                            <label for="subject">Timing:</label>
                           
                
                        <select class="form-control" name="time" required>
                        <option value="morning">Morning</option>
                        <option value="night">Night</option>
                 
                    </select>
                    </div>
             </div> 
             <div class="col-md-6">
                     <div class="form-group">
                            <label for="subject">Contact:</label>
                            <input type="text" value="<?php echo $row['contact']; ?>" class="form-control" name="contact" required>
                    </div> <div class="form-group">
                            <label for="subject">Address:</label>
                            <input type="text" value="<?php echo $row['address']; ?>" class="form-control" name="address" required>
                    </div>  <div class="form-group">
                            <label for="subject">Date From:</label>
                            <input type="date" value="<?php echo $row['date_from']; ?>" class="form-control" name="date_from" required>
                    </div><div class="form-group">
                            <label for="subject">Food:</label>
                            <select class="form-control" name="food" required>
                          <option value="non">-Non-</option>
                          <option value="non">-Non-</option>
                        <option value="Vegiterian">Vegiterian</option>
                        <option value="Non-Vegiterian">Non-Vegiterian</option>
                        <option value="Yes">Yes</option>
                     
                 
                    </select>
                    </div><div class="form-group">
                            <label for="subject">Function Type:</label>
                            <select class="form-control" name="function" required>
                        <option value="Wedding">Wedding</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Engagemnet">Engagemnet</option>
                        <option value="Party">Party</option>
                        <option value="Other">Other</option>
                 
                    </select>
                 
                 
                    </div>
             
             </div>
              </div> 
                
        
       
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" name="update">Close</button>
        <button type="submit" class="btn btn-warning" style="color:black" name="update">Update Record</button>
      </div>
        </form>
    </div>
  </div>
</div>
                        <?php }?>
                     
                    </tbody>
                
                </table>    
              
                    
                    
                </div>
                
                
               
                
            
   
</div>
          
          <?php
include("footer.php");
?>

