<?php include 'main_header.php';
$msg="";  
if(isset($_SESSION['admin'])){

  header("Location:admin_dashboard.php");

}
else
{
 if(isset($_POST['login'])){
  $sql = "SELECT * FROM admin_login WHERE username='".$_POST['username']."' AND password='".$_POST['password']."' ";
    $res= mysqli_query($con, $sql);
  $row=mysqli_fetch_array($res);
    if ($row) {
       
          $_SESSION['admin'] = $_POST['admin'];
          $_SESSION['admin_id'] = $row['id'];
          header("location: admin_dashboard.php");
        
       }
     else {
  $msg="Invalid ID or Password.";
  }
   
 }
}
?>

  <div class="container" style="width: 60% !important;margin:150px auto 120px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"> Admin Login Here</div>
      <div class="card-body">
         
             <?php if($msg) { ?> <div class="alert alert-danger"><?php echo $msg; ?></div> <?php } ?>
         
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="">
                  <input type="text" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                </div>
              </div><br><Br><br> 
              <div class="col-md-12">
                <div class="">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
              </div>
			  
            </div>
          </div>
		  
          <input type="submit" class="btn btn-primary " value="ADMIN LOGIN HERE" name="login">

        </form>
      </div>
    </div>
  </div><br><br>
<?php include 'main_footer.php' ?>
