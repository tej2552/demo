<?php include 'header.php';?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Print Out Details</h5><br><br>
         <form  id="basicform" method="get" enctype="multipart/form-data">
              <div class="form-group">
        <label class="control-label col-sm-4">Search By Date</label>
        <div class="row">
        <div class="col-sm-6">
            <input type="date" class="form-control" name="search" >
        </div>
        <div class="col-sm-4">
            <input type="submit" class="btn btn-primary" value="Search Document" >
        </div>
        </div>
    </div>
    </form>
        
        <div class="card-body">
		<?php if(isset($_GET['search'])) { ?>
 <div class="table-responsive " style="display:block;">
                <table class="table table-bordered">
                    <thead style="background: #ff407b;">
                        <tr class="white">
                            <th scope="col" >S.No</th>
                            <th>Student ID</th>
                            <th>Dept</th>
                            <th>Mobile</th>
                             <th scope="col" >Name</th>
                             <th scope="col" >Document</th>
                             <th scope="col" >Need Date & Time</th>
                             <th scope="col" >Submitted Date</th>
                             <th scope="col" >Message</th>
                              <th scope="col" >Status</th>
                            <th scope="col">Option</th>
                             
                              </tr>
                    </thead>
                    <tbody>
                       <?php $i=1;
                       $sql = "SELECT * from document as d INNER JOIN user as u ON d.stud_id=u.id where d.date='".$_GET['search']."' ";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                        if($row) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row['student_id'];?></td>
                            <td><?php echo $row['dept'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td style="color:#78E9A5;font-weight:bold;"><?php echo $row['name'];?></td>
                            <td><a href="images/<?php echo $row['image'];?>" target="_blank" class="btn btn-warning btn-xs">Download</a></td>
                            <td><?php echo $row['date'];?> & <?php echo $row['time'];?></td>
                            <td><?php echo $row['submitted_date'];?></td>
                            <td><?php echo $row['msg'];?></td>
                            <td><?php if($row['status']=='Pending')
                            {?>
                                <span class="badge badge-warning">Pending</span>    
                           <?php  } else if($row['status']=='Completed') { ?>

                                <span class="badge badge-success">Completed</span>    
                           <?php } else if($row['status']=='Progress') { ?>

                                <span class="badge badge-danger">Progress</span>    
                           <?php }

                        ?></td>
                            <td><a href="update.php?id=<?php echo $row['doc_id'];?>&m=<?php echo $row['mobile'];?>" class="btn btn-primary btn-xs" ><i class="fa fa-edit"> Status</i></a> </td>
                              
                        </tr>
                        
                         <?php } else { ?>
                        <tr>
                            <td colspan="8" class="text-center bg-primary">No Museum Found.</td>
                        </tr>
                        <?php } $i++; } ?>
                       
                    </tbody>
                </table>

           <?php } else { ?>
            <div class="table-responsive " style="display:block;">
                <table class="table table-bordered">
                    <thead style="background: #ff407b;">
                        <tr class="white">
                            <th scope="col" >S.No</th>
                            <th>Student ID</th>
                            <th>Dept</th>
                            <th>Mobile</th>
							 <th scope="col" >Name</th>
							 <th scope="col" >Document</th>
                             <th scope="col" >Need Date & Time</th>
                             <th scope="col" >Submitted Date</th>
                             <th scope="col" >Message</th>
                              <th scope="col" >Status</th>
							<th scope="col">Option</th>
							 
							  </tr>
                    </thead>
                    <tbody>
                       <?php $i=1;
					   $sql = "SELECT * from document as d INNER JOIN user as u ON d.stud_id=u.id ";
						$res= mysqli_query($con, $sql);
						while($row=mysqli_fetch_array($res)) { 
						if($row) {
						?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row['student_id'];?></td>
                            <td><?php echo $row['dept'];?></td>
                            <td><?php echo $row['mobile'];?></td>
							<td style="color:#78E9A5;font-weight:bold;"><?php echo $row['name'];?></td>
							<td><a href="images/<?php echo $row['image'];?>" target="_blank" class="btn btn-warning btn-xs">Download</a></td>
                            <td><?php echo $row['date'];?> & <?php echo $row['time'];?></td>
                            <td><?php echo $row['submitted_date'];?></td>
                            <td><?php echo $row['msg'];?></td>
                            <td><?php if($row['status']=='Pending')
                            {?>
                                <span class="badge badge-warning">Pending</span>    
                           <?php  } else if($row['status']=='Completed') { ?>

                                <span class="badge badge-success">Completed</span>    
                           <?php } else if($row['status']=='Progress') { ?>

                                <span class="badge badge-danger">Progress</span>    
                           <?php }

                        ?></td>
                            <td><a href="update.php?id=<?php echo $row['doc_id'];?>&m=<?php echo $row['mobile'];?>" class="btn btn-primary btn-xs" ><i class="fa fa-edit"> Status</i></a> </td>
							  
                        </tr>
                        
                         <?php } else { ?>
                        <tr>
                            <td colspan="8" class="text-center bg-primary">No Museum Found.</td>
                        </tr>
						<?php } $i++; } ?>
                       
                    </tbody>
                </table>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>