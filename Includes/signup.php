<?php

require 'common.php';

?>
<?php 

$email=$_POST['email'];
$email_query = "SELECT id FROM users WHERE email_id='$email'";
$email_query_result = mysqli_query($con,$email_query);
$email_rows = mysqli_num_rows($email_query_result);

if($email_rows==0){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$password=MD5($_POST['password']);
	$email=$_POST['email'];

	$users_registration_query="INSERT INTO users(first_name,last_name,email_id,users_password) values ('$first_name','$last_name','$email','$password')";

	$users_registration_submit=mysqli_query($con,$users_registration_query) or die (mysqli_error($con));
	$id=mysqli_insert_id($con);
	$_SESSION['email']=$email;
    $_SESSION['id']=$id;
    header('loacation:../profile.php');
}
else{
	echo "This account already exists";
}

?>