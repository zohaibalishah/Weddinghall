   <?php

include("header.php");
include("sidebar.php");
if(isset($_SESSION['id'])){
    
    
}
?>    
   
            
           
             
            <div class="col-md-9">
            
            <h1><i class="fa fa-tachometer"></i> Dashboard<small> Staticstic Overview</small></h1>
                <ol class="breadcrumb">
                    <li class="active"><a href="index.html"></a> <i class="fa fa-tachometer"></i> Dashboard</li> 
                </ol>
<!--                Boxes   -->
                <div class="row tag-boxs">
<!--                    1st box-->
                    <div class="col-md-6 col-lg-3 ">
                        <div class="panel panel-primary">
                            <div class="panel-heading ">
                                <div class="row ">    
                                <div class="col-xs-3 ">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                 <div class="col-xs-9">
                                     <div class="text-right huge">11</div>
                                     <div class="text-right ">New Comments</div>
                                    </div>
                                
                                </div>
                                
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left">Views All Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            
                            </a>
                        </div>
                    
                    </div>
                    
                    
    <!--                    2nd box-->
                    <div class="col-md-6 col-lg-3 ">
                        <div class="panel panel-red">
                            <div class="panel-heading ">
                                <div class="row ">    
                                <div class="col-xs-3 ">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                 <div class="col-xs-9">
                                     <div class="text-right huge">11</div>
                                     <div class="text-right ">New Comments</div>
                                    </div>
                                
                                </div>
                                
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left">Views All Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            
                            </a>
                        </div>
                    
                    </div>
                    
    <!--                    3rd box-->
                    <div class="col-md-6 col-lg-3 ">
                        <div class="panel panel-yellow">
                            <div class="panel-heading ">
                                <div class="row ">    
                                <div class="col-xs-3 ">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                 <div class="col-xs-9">
                                     <div class="text-right huge">11</div>
                                     <div class="text-right ">New Comments</div>
                                    </div>
                                
                                </div>
                                
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left">Views All Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            
                            </a>
                        </div>
                    
                    </div>
                    
 <!--                   4th box-->
                    <div class="col-md-6 col-lg-3 ">
                        <div class="panel panel-green">
                            <div class="panel-heading ">
                                <div class="row ">    
                                <div class="col-xs-3 ">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                 <div class="col-xs-9">
                                     <div class="text-right huge">11</div>
                                     <div class="text-right ">New Comments</div>
                                    </div>
                                
                                </div>
                                
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left">Views All Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            
                            </a>
                        </div>
                    
                    </div>
                </div><!--end boxes Box                -->
<!--
user table
                <h3>New Booking</h3>
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
                           
                            <th>Edit</th>
                            <th>Delet</th>
                        
                        </tr>
                    
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
        $success=mysqli_query($conn,"SELECT * FROM `booking` LIMIT 0,4");
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
                            <td><a href="<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>      
                        <?php }?>
                     
                        
                     
                    </tbody>
                
                </table>    
                    
                <a href="booking_admin.php" class="btn btn-primary">View All Users</a>
-->
<!--                Post Table-->
                
               
            </div>     
        </div>
   
      </div>
<?php

include("footer.php");
?>