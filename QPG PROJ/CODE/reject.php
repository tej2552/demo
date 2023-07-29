<?php
ob_start();
include('config.php');
session_start();

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$del="update subject_request set status='Declined' where id='$id'";
		$delete=mysqli_query($con,$del);
		if($delete )
		{
			header("Location:all_request.php");
		}
	}
ob_end_flush();
	
