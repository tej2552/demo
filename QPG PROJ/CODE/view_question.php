<?php include 'officer_header.php';?>
<style>
    .sidebar{
        background:#78C9E9 !important;
        height:auto !important;
    }
    

  </style>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Question Details</h5><br><br>
         <form  id="basicform" method="get" enctype="multipart/form-data">
              <div class="form-group">
        <label class="control-label col-sm-4">Search Subject Wise</label>
        <div class="row">
        <select class="form-control" name="search" style="margin-left:40px;margin-right:40px;">
                <option value="">Select</option>
                <?php $sql = "SELECT * FROM subject";
                $res= mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($res)) { ?>
                    <option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>
                <?php } ?>
            </select> 
        <div class="col-sm-4">
            <input type="submit" class="btn btn-primary"  value="Search Document" style="margin-left:40px;margin-right:40px;margin-top: 20px;">
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
                            <th>Subject Name</th>
                            <th>Question</th>
                            <th>Mark</th>
                             
                              </tr>
                    </thead>
                    <tbody>
                       <?php $i=1;
                       $sql = "SELECT * from subject as d INNER JOIN question as u ON d.subject_id=u.subject_ids where d.subject_id='".$_GET['search']."' AND u.staff_id='".$_SESSION['user_id']."'";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                        if($row) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row['subject_name'];?></td>
                            <td><?php echo $row['question'];?></td>
                            <td><?php echo $row['mark'];?></td>
                              
                        </tr>
                        
                         <?php } else { ?>
                        <tr>
                            <td colspan="8" class="text-center bg-primary">No Question Found.</td>
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
                            <th>Subject Name</th>
                            <th>Question</th>
                            <th>Mark</th>
							 
							  </tr>
                    </thead>
                    <tbody>
                       <?php $i=1;
                       $sql = "SELECT * from subject as d INNER JOIN question as u ON d.subject_id=u.subject_ids where u.staff_id='".$_SESSION['user_id']."'";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                        if($row) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?></td>
                            <td><?php echo $row['subject_name'];?></td>
                            <td><?php echo $row['question'];?></td>
                            <td><?php echo $row['mark'];?></td>
                              
                        </tr>
                        
                         <?php } else { ?>
                        <tr>
                            <td colspan="8" class="text-center bg-primary">No Question Found.</td>
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