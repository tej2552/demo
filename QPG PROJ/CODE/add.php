<?php include 'officer_header.php';
$msg="";
 if(isset($_POST['add'])){

$sql="insert into  question(subject_ids,question,mark,staff_id)values('".$_POST['subject_ids']."','".$_POST['question']."','".$_POST['mark']."','".$_SESSION['user_id']."')";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if($res){
  $msg="Question Added Successfully.";
 }
 } 
 ?>

<div class="container" style="width:80%;margin:0 auto;">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Add Question </h5>
        <div class="card-body">
                   <?php if($msg) { ?> <div class="alert alert-success"><?php echo $msg; ?></div> <?php } ?>
                
            <form  id="basicform" method="post" enctype="multipart/form-data">
               <div class="form-group">
		<label class="control-label col-sm-2"> Subject Name</label>
		<div class="col-sm-10">
			<select class="form-control" name="subject_ids">
				<option value="">Select</option>
				<?php $sql = "SELECT * FROM subject";
    			$res= mysqli_query($con, $sql);
  				while($row=mysqli_fetch_array($res)) { ?>
  					<option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>
  				<?php } ?>
			</select> 
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Question</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="question">
		</div>
	</div>

	 <div class="form-group">
		<label class="control-label col-sm-2"> Mark</label>
		<div class="col-sm-10">
			<select class="form-control" name="mark">
				<option value="">Choose Mark</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="5">5</option>
				<option value="10">10</option>
			</select>
		</div>
	</div>
	 
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" value="Add Question" name="add">
		</div>
	</div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>