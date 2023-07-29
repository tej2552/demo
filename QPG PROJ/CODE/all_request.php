<?php include 'header.php';?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Requested Subjects</h5>
        
        <div class="card-body">
		
            <div class="table-responsive " style="display:block;">
                <table class="table table-bordered">
                    <thead style="background: #ff407b;">
                        <tr class="white">
                            <th scope="col" >S.No</th>
							 <th scope="col" >Subject Name</th>
							<th scope="col">Option</th>
							 
							  </tr>
                    </thead>
                    <tbody>
                       <?php $i=1;
					   $sql = "SELECT * from subject_request";
						$res= mysqli_query($con, $sql);
						while($row=mysqli_fetch_array($res)) { 
						if($row) {
						?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
							<td ><?php echo $row['subject_name'];?></td>
							
                            <td>  <?php if($row['status']=='Pending') { ?> <a href="accept.php?id=<?php echo $row['id'];?>" class="btn btn-success">Add</a> <a href="reject.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Decline</a> <?php } if($row['status']=='Added') { ?><span class="badge badge-success">Subject <?php echo $row['status'];?></span>
                            <?php } elseif($row['status']=='Declined') { ?> <span class="badge badge-danger"><?php echo $row['status'];?></span><?php } ?></td>
							  
                        </tr>
                        
                         <?php } else { ?>
                        <tr>
                            <td colspan="8" class="text-center bg-primary">No Subject Found.</td>
                        </tr>
						<?php } $i++; } ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>