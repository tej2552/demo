<?php
ob_start();
include('config.php');
session_start();

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$del="update subject_request set status='Added' where id='$id'";
		$delete=mysqli_query($con,$del);
		if($delete )
		{
			header("Location:add_subject.php");
		}
	}
ob_end_flush();
	
