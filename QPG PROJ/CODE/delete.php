<?php
ob_start();
include('config.php');
session_start();

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$del="delete from subject where subject_id='$id'";
		$delete=mysqli_query($con,$del);
		if($delete )
		{
			header("Location:subject.php");
		}
	}
ob_end_flush();
	
