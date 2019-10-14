<?php
include("header.php");
include("sidebar.php");



//update  code
if(isset($_POST['update'])){
    $u_id=$_POST['updateid'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        
    $update="UPDATE `admin` SET `name`='$name',`email`='$email',`password`='$password' WHERE id='$u_id'";
    mysqli_query($conn,$update);
    
    
}

?>
<div class="col-md-9">
            
            <h1><i class="fa fa-folder-open"></i> Admin<small> Profile</small></h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-tachometer"> <a href="index.php">Dashboard</a></i>
                    <li class="active"> <i class="fa fa-folder-open"></i>
                       Categories</li> 
                </ol>

<div class="col-md-12">
<h3>Admin Profile</h3><br>
<table class="table table-hover table-striped table-bordered">
                
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Edit</th>
                            
                        
                        </tr>
                    
                    </thead>
                    <tbody>
                                 <?php
                        $i=0;
        $success=mysqli_query($conn,"SELECT * FROM `admin`");
            while($row=mysqli_fetch_array($success)){   
                $i++;
                
        ?> 
            
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>*************</td>
                           <td><a role="button" data-toggle="modal" href="#U<?php echo $row['id'];  ?>" class="btn btn-warning"> <i class="fa fa-pencil"></i></a></td>
                          
                        </tr> 
                        
                        
                        
                        
                        
                        
                        
                        
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
                    <input type="text" value="<?php echo $row['name']; ?>" class="form-control " name="name" disabled>
                </div>
               <div class="form-group">
                            <label for="subject">Email:</label>
                            <input type="text" value="<?php echo $row['email']; ?>" class="form-control" name="email" required>
                    </div>
             </div> 
             <div class="col-md-6">
                     <div class="form-group">
                            <label for="subject">Password:</label>
                            <input type="text" value="<?php echo $row['password']; ?>" class="form-control" name="pwd" required>
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
                
                </table>  <a href="#" class="btn btn-primary pull-right">More images</a>  
 
</div>

</div>



<?php
include("footer.php");
?>