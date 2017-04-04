<?php
	
	require 'common.php';

	$h=$_POST['col'];
	$sid=$_SESSION['id'];
	$new_color_query = "UPDATE users_notes SET color = '$h' WHERE users_id = '$sid' ";
	$new_color_result = mysqli_query($con,$new_color_query) ;
	header('Location:../profile.php');
	exit();	

?>