<?php
include("header.php");
include("sidebar.php");


if(isset($_POST['submit'])){
    
    $des=$_POST['img_des'];
 
    
  $dir = 'gallaryimg/';
    $filename = basename($_FILES['img_name']['name']);
    $rand_name = rand(0,500) * time() - 4000000;
    $rand_name .=$filename;
    $filename = $dir.$rand_name;
    
    
    $uploadOk = 1;
    $filetype = pathinfo($filename,PATHINFO_EXTENSION);
    //chect if file is image or not
    $check = getimagesize($_FILES['img_name']['tmp_name']);
    if($check == true){
       
        $uploadOk = 1;
    }
    else{
        echo "this is not an image<br>";
        $uploadOk = 0;
    }
    
    if(file_exists($filename)){
        echo "file already exist<br>";
        $uploadOk = 0;
    }
    else{
        $uploadOk = 1;
    }
    //check the size of image
    if($_FILES['img_name']['size']> 2500000)
    {
        echo "file size is too large";
        $uploadOk = 0;
    }
    if($uploadOk == 0){
        echo "file not uploaded due to some issues";
    }
    else{
        if(move_uploaded_file($_FILES['img_name']['tmp_name'], $filename)){
            
            $insert="INSERT INTO `gallary`(`id`, `img`, `text`) VALUES ('','$filename','$des')";
            $success=mysqli_query($conn,$insert);
            if($success){
                
                echo "image inserted successfully";
            }
            
        }
        else{
            echo "file not uploaded";
        }
    }
    
}


//delet query

if(isset($_POST['delete_img'])){
    
    $d_id=$_POST['deleteid'];
    mysqli_query($conn,"DELETE FROM `gallary` WHERE id='$d_id'");
}





?>
<div class="col-md-9">
            
            <h1><i class="fa fa-folder-open"></i> Gallary<small> All Gallary </small></h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-tachometer"> <a href="index.php">Dashboard</a></i>
                    <li class="active"> <i class="fa fa-folder-open"></i>
                       Categories</li> 
                </ol>
<div class="col-md-4">
    <h3>Add Gallary image here</h3>
          
         <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name"> image:</label>
                    <input type="file"   class="form-control" name="img_name">
                </div>

              <div class="form-group">
                    <label for="message">Description:</label>
                   <textarea class="form-control" rows="5" name="img_des"></textarea>
            </div> 
           <input type="submit" value="Add Image"  class="btn btn-danger pull-right" name="submit">
                        
             </form> 

</div>
<div class="col-md-8">
<h3>Add Gallary image here</h3><br>
<table class="table table-hover table-striped table-bordered">
                
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Slider images</th>
                            
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delet</th>
                        
                        </tr>
                    
                    </thead>
                    <tbody>
                       <?php
                        $qry="SELECT `id`, `img`, `text` FROM `gallary` WHERE 1";
                        $success=mysqli_query($conn,$qry);
                        $i=0;
                        while($row=mysqli_fetch_array($success)){
                        $i++;
                        ?> 
                        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img src="<?php echo $row['img']; ?>" style="height:60px;width:80px"></td>
                            <td><?php echo $row['text']; ?></td>
                                
                            <td><a href="<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
                            <td><a  role="button" data-toggle="modal" href="#D<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>
                        
                        
                                            <!-- delete -->
<div class="modal fade" id="D<?php echo  $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you want to delete this image <img src="<?php echo $row['img']; ?>" style="height:60px;width:80px"> </h4>
      </div><form action="" method="post">
      <div class="modal-body">
        <input type="hidden" name="deleteid" value="<?php echo $row['id']; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete_img">Click Delete</button>
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