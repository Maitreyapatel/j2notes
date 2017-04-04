<?php

	require 'common.php';
	$title=$_POST['title'];
	$note=mysqli_real_escape_string($con,$_POST['note']) ;
	$sid=$_SESSION['id'];
	$color="#f5dc2d";
	$link=mysqli_real_escape_string($con,$_POST['link']);
	$pri=$_POST['privecy'];
	$new_note_query="INSERT INTO users_notes(users_id,title,note,color,link,privecy) values ('$sid','$title','$note','$color','$link','$pri')";

	$new_note_submit=mysqli_query($con,$new_note_query) or die (mysqli_error($con));
	
	header('location:../profile.php');
?>