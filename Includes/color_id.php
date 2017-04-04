<?php

	require 'common.php';

	$h=$_POST['col'];
	$cid=$_GET['id'];
	$new_color_query = "UPDATE users_notes SET color = '$h' WHERE id = '$cid' ";
	$new_color_result = mysqli_query($con,$new_color_query) ;
	header('location:../profile.php');

?>