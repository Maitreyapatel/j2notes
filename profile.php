<?php

	require 'Includes/common.php';
	if(isset($_SESSION['email'])){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
      	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
      	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      	<link rel="stylesheet" type="text/css" href="Includes/animate.css">
      	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="container">
	<div style="margin-top: 20px;">
		<center>
                  <a href="profile.php" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Home</a>
			<a href="Includes/creat.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-plus" style="margin-right: 3px;"></span>New</a>
		<a href="Includes/delete_all.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-trash" style="margin-right: 3px;"></span>Delete All</a>
		<a href="color_set.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-asterisk" style="margin-right: 3px;"></span>Color Setting</a>
		<a href="Includes/public_notes.php" style="margin-left: 30px;" class="btn btn-primary" ><span class="glyphicon glyphicon-share" tyle="margin-right: 3px;"></span> Public notes</a>
		<a href="Includes/logout.php" class="btn btn-primary" style="margin-left: 30px;"><span class="glyphicon glyphicon-log-out"></span>Log-out</a>
		</center>
	</div>
	<?php
    	$sid=$_SESSION['id'];
    	//echo $sid;
    	$note_query = "SELECT * FROM users_notes WHERE users_id='$sid'";
    	$note_result = mysqli_query($con,$note_query);
    	$num_rows=mysqli_num_rows($note_result) or die(mysqli_error($con));
    	if($num_rows>=1){
 
		while($num_rows>0){
			//echo "hii";
			$row=mysqli_fetch_array($note_result);
			$nid=$row['id'];
			?>
	<div class="row col-xs-6 col-sm-6 col-md-6 col-lg-12 col-xs-offset-3 col-sm-offset-3 col-md-offset-0 col-lg-offset-0;">
		<div class="" style=" margin-top: 10px; background-color: <?php echo $row['color']; ?>;box-shadow: 2px 2px 2px 2px lightblue;">
			<div style="margin-left: 20px;">
				<table>
					<tr style="border-bottom: 1px gray solid; width: 100%; font-weight: bolder; font-size: 20px;"><td><?php echo $row['title']; ?></td></tr>
					<?php
                                            if($row['link']){?>
                                              <tr><td><a href="<?php echo $row['link']; ?>">Link to files</a></td></tr>
                                 <?php
                                     }
                                  ?>
					<tr style="font-size: 15px;"><td><?php echo $row['note'] ?></td></tr>
				</table>
			</div>
			<div  style="float: right; margin-left: 10PX;">
				<a href="Includes/new_color_type.php?id=<?=$nid?>" style="margin-right: 20px;"><span class="glyphicon glyphicon-inbox"></span></a>
				<a href="Includes/delete.php?id=<?=$nid?>"><span class="glyphicon glyphicon-trash" style="margin-right: 20px;"></span></a>
				<a href="Includes/edit.php?id=<?=$nid?>"><span class="glyphicon glyphicon-edit"></span></a>
			</div>
		</div>
	</div>
	<?php
			$num_rows=$num_rows-1;
				}
			}
		}
		else
			header('location:index.php');
	?>
</body>
</html>