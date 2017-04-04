<?php

require 'common.php';

?>

<?php

   // $name=mysqli_real_escape_string($_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=md5($_POST['password']);
   // $contect=mysqli_real_escape_string($_POST['contect']);
   // $address=$_POST['address'];

    $users_query = "SELECT id FROM users WHERE email_id='$email' AND users_password='$password'";
    $users_result = mysqli_query($con,$users_query);
    $num_rows=mysqli_num_rows($users_result);

    if($num_rows == 0)
        echo "username or password is incorrect";
    else{
        $row=mysqli_fetch_array($users_result);
        $id=mysqli_insert_id($con);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['id'];
        header('location:../profile.php');
        //echo "Loged-In";
    }

?>