<?php include 'header.php';
$msg="";
 if(isset($_POST['add'])){

$sql="insert into  subject(subject_name)values('".$_POST['name']."')";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if($res){
  $msg="Subject Added Successfully.";
 }
 } 
?>

<div class="container" style="width:80%;margin:0 auto;">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Add Subject </h5>
        <div class="card-body">
                   <?php if($msg) { ?> <div class="alert alert-success"><?php echo $msg; ?></div> <?php } ?>
                
            <form  id="basicform" method="post" enctype="multipart/form-data">
               <div class="form-group">
		<label class="control-label col-sm-2">Subject Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name">
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" value="ADD SUBJECT" name="add">
		</div>
	</div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>