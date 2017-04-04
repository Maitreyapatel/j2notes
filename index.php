<?php

  if(isset($_SESSION['email'])){
    echo "loged in";
    //header('location:profile.php');
  }
  else{
?>

<!DOCTYPE html>
<html>
<head>
      <title>Notes</title>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
      <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="Includes/animate.css">
      <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="container homepage">
  <div class="login animated rollIn">
  <center>
  	<p style="color: red; font-size: 50px;">Log-in</p>
  </center>
  	<form method="post" action="Includes/login.php">
  		<input type="text" class="form-control form-group input-lg" name="email" placeholder="email" required>
  		<input type="password" class="form-control form-group input-lg" name="password" placeholder="Password" required>
  		<button type="Submit" class="btn btn-primary">Submit</button>
  	</form>
  </div>
  <div class="signup animated rollIn">
  <center>
  	<p style="color: red; font-size: 50px;">Sign-up</p>
  </center>
  	<form method="post" action="Includes/signup.php">
  		<input type="text" class="form-control form-group input-lg" name="first_name" placeholder="First Name" required>
  		<input type="text" name="last_name" class="form-control form-group input-lg" placeholder="Last name" required>
  		<input type="text" name="email" class="form-control form-group input-lg" placeholder="email" pattern="/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/" required>
  		<input type="password" class="form-control form-group input-lg" name="password" pattern=".{8,}" placeholder="Password" required>
  		<button type="Submit" class="btn btn-primary">Submit</button>
  	</form>
  </div>
</body>
</html>
<?php
  }
?>