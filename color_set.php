<?php

	require 'Includes/common.php';


    $color_query = "SELECT * FROM color";
    $color_result = mysqli_query($con,$color_query);
    $num_rows=mysqli_num_rows($color_result);
    $sid=$_SESSION['id'];

        
?>

<!DOCTYPE html>
<html>
<head>
	<title>Color Setting</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
      	<script type="text/javascript" src="../bootstrap/js/jquery-3.1.1.min.js"></script>
      	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
      	<link rel="stylesheet" type="text/css" href="animate.css">
      	<link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body>
	<div class="container">
		<div style="margin-top: 10%;" class="col-xs-6 col-xs-offset-4 centered">
			<p style="font-size:30px; color: #1a7ccd; ">Choose any color</p>
		</div>
			<div class="col-xs-6 col-xs-offset-4 centered">
				<?php
					for ($i=1; $i<=4 ; $i++) { 
						?>
						<div class="row">
						<?php
						for ($j=1; $j<=4 ; $j++) { 
									$row=mysqli_fetch_array($color_result);
									//$h=$row['color'];
   							?>

							
						<form method="post" action="Includes/new_color.php">
							<button type="Submit" class="btn btn-default" name="col" value="<?php echo $row['color']; ?>" style="width: 60px; height: 60px; border-radius: 50%; border: 1px black solid; float: left; margin-right: 10px; background-color: <?php echo $row['color']; ?>">
							</button>
						</form>
							
				<?php			
						}
						?>
						</div>
						<br>
						<?php
					}
				?>
			</div>
	</div>
</body>
</html>