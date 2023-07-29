<?php include 'main_header.php';
$msg="";  

if(isset($_POST['login'])){
$sql1="select * from user where id='".$_POST['username']."'";
$res1=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($res1);
if($row)
{
  $msg="username Already Exist.";
}
else
{
$name=$_POST['name'];
$email=$_POST['email'];
$psw=$_POST['password'];
$mobile=$_POST['mobile'];
$student_id=$_POST['username'];
$dept=$_POST['dept'];
$sql="insert into user(name,email,password,mobile,username,dept,doj,city,address)values('".$name."','".$email."','".$psw."','".$mobile."','".$student_id."','".$dept."','".$_POST['doj']."','".$_POST['city']."','".$_POST['address']."')";
$res=mysqli_query($con,$sql);
if($res){
  $msg="Registered successfully";
 }
 }
}
?>

  <div class="container" style="width: 60% !important;margin:150px auto 120px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"> Register Here</div>
      <div class="card-body">
         
             <?php if($msg) { ?> <div class="alert alert-success"><?php echo $msg; ?></div> <?php } ?>
         
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="">
                  <input type="text" name="name" class="form-control" placeholder="Staff  Name" required="required" >
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <input type="text" name="email" class="form-control" placeholder="Email  Id" required="required" >
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <input type="number" name="mobile" class="form-control" placeholder="Mobile No" required="required" >
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <input type="text" name="username" class="form-control" placeholder="Username" required="required" >
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
              </div><br><Br><br> 
			  <div class="col-md-12">
                <div class="">
                  <input type="text" name="dept" class="form-control" placeholder="Degree Name & Dept" required="required" >
                </div>
              </div><br><Br><br> 
               <div class="col-md-12">
                <div class="">
                  <input type="date" name="doj" class="form-control" placeholder="DOJ" required="required" >
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <input type="text" name="city" class="form-control" placeholder="City" required="required" >
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <textarea name="address" class="form-control" placeholder="Address" required="required" ></textarea>
                </div>
              </div><br><Br><br> 
            </div>
          </div>
		  
          <input type="submit" class="btn btn-primary " value=" REGISTER HERE" name="login">

        </form>
      </div>
    </div>
  </div><br><br>
<?php include 'main_footer.php' ?>
