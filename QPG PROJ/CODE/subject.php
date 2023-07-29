<?php include 'header.php';?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Subjects</h5>
        
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
					   $sql = "SELECT * from subject ";
						$res= mysqli_query($con, $sql);
						while($row=mysqli_fetch_array($res)) { 
						if($row) {
						?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
							<td style="color:#78E9A5;font-weight:bold;"><?php echo $row['subject_name'];?></td>
							
                            <td> <a href="delete.php?id=<?php echo $row['subject_id'];?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i></a></td>
							  
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