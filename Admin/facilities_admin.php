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
    <h3>Add facilities image here</h3>
          
         <form method="post" action="">
                <div class="form-group">
                    <label for="name"> image:</label>
                    <input type="file"   class="form-control" name="name">
                </div>

              <div class="form-group">
                    <label for="message">Description:</label>
                   <textarea class="form-control" rows="5" name="msg"></textarea>
            </div> 
           <input type="submit" value="Add Image"  class="btn btn-danger pull-right" name="submit">
                        
             </form> 

</div>
<div class="col-md-8">
<h3>All facilities</h3><br>
<table class="table table-hover table-striped table-bordered">
                
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>images</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delet</th>
                        
                        </tr>
                    
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1111</td>
                            <td>some thing about the image</td>
                            <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                        </tr>  <tr>
                            <td>2</td>
                            <td>1111</td>
                            <td>some thing about the image</td>
                            <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                        </tr>  <tr>
                            <td>3</td>
                            <td>1111</td>
                            <td>some thing about the image</td>
                            <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                        </tr>  <tr>
                            <td>4</td>
                            <td>1111</td>
                            <td>some thing about the image</td>
                            <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                        </tr>  <tr>
                            <td>5</td>
                            <td>1111</td>
                            <td>some thing about the image</td>
                            <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="#"><i class="fa fa-times"></i></a></td>
                        </tr> 
                       

                       
                        
                     
                    </tbody>
                
                </table>  <a href="#" class="btn btn-primary pull-right">More images</a>  
 
</div>

</div>



<?php
include("footer.php");
?>