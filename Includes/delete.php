<?php

	require 'common.php';
	
	$nid=$_GET['id'];
	$a=mysqli_query($con,'SET foreign_key_checks = 0');
	$delete_query = "DELETE FROM users_notes WHERE id = '$nid'";
    $delete_result = mysqli_query($con,$delete_query) or die (mysqli_error($con));
    $b=mysqli_query($con,'SET foreign_key_checks = 1');
    header('location:../profile.php');

?>