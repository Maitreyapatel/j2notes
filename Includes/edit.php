<?php

	require 'common.php';
	if(isset($_SESSION['email'])){
		$nid=$_GET['id'];
		$note_query = "SELECT * FROM users_notes WHERE id='$nid'";
    	$note_result = mysqli_query($con,$note_query);
    	$row=mysqli_fetch_array($note_result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit node</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
      	<script type="text/javascript" src="../bootstrap/js/jquery-3.1.1.min.js"></script>
      	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
      	<link rel="stylesheet" type="text/css" href="animate.css">
      	<link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body class="container">
	<div style="margin-top: 20px;">
		<center>
                 <a href="../profile.php" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Home</a>
			<a href="creat.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-plus" style="margin-right: 3px;"></span>New</a>
		<a href="delete_all.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-trash" style="margin-right: 3px;"></span>Delete All</a>
		<a href="../color_set.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-asterisk" style="margin-right: 3px;"></span>Color Setting</a>
		<a href="public_notes.php" style="margin-left: 30px;" class="btn btn-primary" ><span class="glyphicon glyphicon-share" style="margin-right: 3px;"></span> Public notes</a>
		<a href="logout.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-log-out"></span>Log-out</a>
		</center>
	</div>
	<div class="cantainer" style="margin-top: 30px;">
		<div class="row row_style">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>Edit new note</h3>
					</div>
					<div class="panel-body" style="min-height: 100px;">
						<form method="post">
							<input type="text" name="title" placeholder="Title" class="form-control form-group input-lg" value="<?php echo $row['title']; ?>">
							<input type="text" name="note" placeholder="Detail" class="form-control form-group input-lg" value="<?php echo $row['note']; ?>">
							<input type="text" name="link" placeholder="Link to your files" class="form-control form-group input-lg" value="<?php echo $row['link']; ?>">
							<input type="radio" name="privecy" value="public" >Public
							<input type="radio" style="margin-bottom: 15px;" name="privecy" value="private">Private
							<br>
							<button type="Submit" class="btn btn-primary">Update</button>
						</form>
						<?php

							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$title=$_POST['title'];
								$note=mysqli_real_escape_string($con,$_POST['note']) ;
								$pri=$_POST['privecy'];
								$link=mysqli_real_escape_string($con,$_POST['link']);
								$note_update_query="UPDATE users_notes SET title='$title',note='$note',privecy='$pri',link='$link' WHERE id = '$nid' ";
								$note_update_result = mysqli_query($con,$note_update_query) ;
								header('location:../profile.php');}
						?>
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
			header('location:index.php');
?>