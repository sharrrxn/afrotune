<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $hair_type = ($_POST['hair_type']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password ='$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exists!';
    }else{

        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert =" INSERT INTO user_form(name, email, password, hair_type) VALUES('$name','$email','$pass','$hair_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
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
    <title>Registeration</title>
</head>

<body>
<div class="form-container">
    <form action="" method="post">
        <h3>Register Now!</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class= "error-msg">'.$error.'</span>';
            };
        };
        ?>
        <img src="logo2med.jpg" alt="AfroTune Logo">
        <br>
        <input type="text" name="name" required placeholder="Enter your Name">
        <input type="email" name="email" required placeholder="Enter your Email Address">
        <input type="password" name="password" required placeholder="Enter your Password">
        <input type="password" name="cpassword" required placeholder="Confirm your Password">
        <p>What is your hair type?</p><select name="hair_type">
            <option value="3a">3A</option>
            <option value="3b">3B</option>
            <option value="3c">3C</option>
            <option value="4a">4A</option>
            <option value="4b">4B</option>
            <option value="4c">4C</option>
            <option value="idk">I don't know</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn" >
        <p> Already have an account?<a href="login_form.php"> Login now</p>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>