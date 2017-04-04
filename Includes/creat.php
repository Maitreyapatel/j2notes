<?php

	require 'common.php';
	if(isset($_SESSION['email'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Note</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
      <script type="text/javascript" src="../bootstrap/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="animate.css">
      <link rel="stylesheet" type="text/css" href="../index.css">
      <style>
      	.row_style{
      		margin-top: 10px;
      	}
      </style>
</head>
<body>
	<div class="cantainer">
		<div class="row row_style">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p>Create new note</p>
					</div>
					<div class="panel-body" style="min-height: 100px;">
						<form method="post" action="new_note.php">
							<input type="text" name="title" placeholder="Title" class="form-control form-group input-lg" required>
							<input type="text" name="note" placeholder="Detail" class="form-control form-group input-lg" required>
							<input type="text" name="link" placeholder="Link to your files" class="form-control form-group input-lg">
							<input type="radio" name="privecy" value="public" >Public
							<input type="radio" style="margin-bottom: 15px;" name="privecy" value="private">Private
							<br>
							<button type="Submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>		
		</div>
	</div>
</body>
</html>

<?php
	}
	else
		//echo "bye";
		header('location:../index.php');
?>