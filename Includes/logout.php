<?php
require 'common.php';

?>
<?php 

	if(isset($_SESSION['email']));{
		session_destroy();
	}
	header('Location:../index.php');
	exit();

?>