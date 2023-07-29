<?php include 'officer_header.php';
$msg="";
 if(isset($_POST['add'])){

 
$allowedExts = array("pdf", "docx", "doc");
$temp = explode(".", $_FILES['image']['name']);
$extension = end($temp);
if (in_array($extension, $allowedExts))
{
	$name = rand(10000,99999)."_".$_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$name);
	if(!$name)
	{
		$error="Invalid file type";
	}
$sql="update document set image='".$name."' where doc_id='".$_GET['id']."' ";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if($res){
  $msg="Updated Successfully...";
 }
 } 
} 

 $sql = "SELECT * from document where doc_id='".$_GET['id']."' ";
$res= mysqli_query($con, $sql);
$row=mysqli_fetch_array($res);
?>

<div class="container" style="width:80%;margin:0 auto;">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Update Print Out PDF/Document </h5>
        <div class="card-body">
                   <?php if($msg) { ?> <div class="alert alert-success"><?php echo $msg; ?></div> <?php } ?>
                
            <form  id="basicform" method="post" enctype="multipart/form-data">
       
	<div class="form-group">
		<label class="control-label col-sm-4">Upload</label>
		<div class="col-sm-10">
			<input type="file" class="form-control" name="image">
		</div>
	</div>
<div class="form-group">
		<label class="control-label col-sm-2"> Need Time</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="time" value="<?php echo $row['time'];?>">
		</div>
	</div>
	 <div class="form-group">
		<label class="control-label col-sm-2"> Need Date</label>
		<div class="col-sm-10">
			<input type="date" class="form-control" name="date" value="<?php echo $row['date'];?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Message</label>
		<div class="col-sm-10">
			<textarea style="height:300px;" class="form-control" name="msg"><?php echo $row['msg'];?></textarea>
		</div>
	</div>
	 
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" value="UPDATE" name="add">
		</div>
	</div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>