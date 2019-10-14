<?php
include("header.php");
include("sidebar.php");
?>
<div class="col-md-9">
            
            <h1><i class="fa fa-folder-open"></i> facilities<small> All facilities </small></h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-tachometer"> <a href="index.php">Dashboard</a></i>
                    <li class="active"> <i class="fa fa-folder-open"></i>
                       Categories</li> 
                </ol>
<div class="col-md-4">
    <h3>Feedback Replay</h3>
          
         <form method="post" action="">
                <div class="form-group">
                    <label for="name"> Email:</label>
                    <input type="email"   class="form-control" name="name">
                </div>

              <div class="form-group">
                    <label for="message">Feedback Replay:</label>
                   <textarea class="form-control" rows="5" name="msg"></textarea>
            </div> 
           <input type="submit" value="Add Image"  class="btn btn-danger pull-right" name="submit">
                        
             </form> 

</div>
<div class="col-md-8">
<h3>Feedback Messages</h3><br>
<table class="table table-hover table-striped table-bordered">
                
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Subject</th>
                            <th>Message</th>
                            
                            <th>Delet</th>
                        
                        </tr>
                    
                    </thead>
                    <tbody>
                                 <?php
                        $i=0;
        $success=mysqli_query($conn,"SELECT * FROM `contastus` ");
            while($row=mysqli_fetch_array($success)){   
                $i++;
                
        ?> 
            
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['message'];  ?></td>
                            
                            <td><a href="<?php echo $row['id'];  ?>" class="btn btn-danger"> <i class="fa fa-times"></i></a></td>
                        </tr>   
                       <?php }?>
                        
                     
                    </tbody>
                
                </table>  <a href="#" class="btn btn-primary pull-right">More images</a>  
 
</div>

</div>



<?php
include("footer.php");
?>