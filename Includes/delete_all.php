<?php

	require 'common.php';

	$sid=$_SESSION['id'];
	$a=mysqli_query($con,'SET foreign_key_checks = 0');
	$delete_all_query = "DELETE FROM users_notes WHERE users_id = '$sid'";
    $delete_all_result = mysqli_query($con,$delete_all_query) or die (mysqli_error($con));
    $b=mysqli_query($con,'SET foreign_key_checks = 1');
    header('location:../profile.php');

?>