<?php

@include 'config.php';

session_start();


if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $hair_type = ($_POST['hair_type']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password ='$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        header('location:home.php');
    }else{
        $error[] = 'incorect email or password!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
	<meta name ="viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
<div class="form-container">
    <form action="" method="post">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <img src="logo2med.jpg" alt="AfroTune Logo">
        <br>
        <input type="email" name="email" required placeholder="Enter your Email Address">
        <input type="password" name="password" required placeholder="Enter your Password">
        <input type="submit" name="submit" value="login now" class="form-btn" >
        <p> Don't have an account?<a href="register_form.php"> Register now</p>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>