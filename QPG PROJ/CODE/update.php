<?php include 'header.php';
$msg="";
 if(isset($_POST['add'])){
$sql="update document set status='".$_POST['status']."'  where doc_id='".$_GET['id']."' ";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if($res){
  $msg="Message Sent Successfully...";
 
if($_POST['status']=='Completed')
{
  $mobile = $_GET['m'];
  $content = 'Your Printout Completed.';
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => $content,
    "language" => "english",
    "route" => "p",
    "numbers" => $mobile,
    "flash" => "1"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization:AteTGYEM6fnU3O5uKLIPzWcBvmyo4jwkpVaXiSH9Zh1CqNlsF0WXVjMZKxzSp3OBT50nckdyvsDEglfH",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

}
else
{
	$mobile = $_GET['m'];
  $content = 'Your Printout On Progress.';
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => $content,
    "language" => "english",
    "route" => "p",
    "numbers" => $mobile,
    "flash" => "1"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization:AteTGYEM6fnU3O5uKLIPzWcBvmyo4jwkpVaXiSH9Zh1CqNlsF0WXVjMZKxzSp3OBT50nckdyvsDEglfH",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

 } 
} }
 ?>

<div class="container" style="width:80%;margin:0 auto;">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header">Add Print Out PDF/Document </h5>
        <div class="card-body">
                   <?php if($msg) { ?> <div class="alert alert-success"><?php echo $msg; ?></div> <?php } ?>
                
            <form  id="basicform" method="post" enctype="multipart/form-data">
               <div class="form-group">
		<label class="control-label col-sm-2"> Name</label>
		<div class="col-sm-10">
			<select class="form-control" name="status">
				<option value="">Select</option>
				<option value="Progress">Progress</option>
				<option value="Completed">Completed</option>
			</select>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" value="Send Message" name="add">
		</div>
	</div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>