<?php 
include './php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINECOFIN RMS</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="login-page">
            <form method="POST">
                <h1>MINECOFIN RMS</h1>
                <input class="input" type="email" name="email_log" placeholder="Enter your email...">
                <input class="input" type="password" name="pass_log" placeholder="**********">
                <div class="login-action">
                    <a href="#" id="forget-password">Forgot password?</a>
                    <input type="submit" class="btn" name="login-btn" value="Login"/>
                </div>
                <div class="on-forget">
                    <p class="forget-text">If you have forgotten your password, send a request to change it on email rms@minecofin.gov.rw</p>
                </div>
            </form>
        </div>
    </div>
    <script src="./js/forget-pass.js"></script>
    <?php

        if(isset($_POST['login-btn'])){
            $email_log = $_POST['email_log'];
            $password = $_POST['pass_log']; 

            $email_log = stripcslashes($email_log);  
            $password = stripcslashes($password);  
            $email_log = mysqli_real_escape_string($conn, $email_log);  
            $password = mysqli_real_escape_string($conn, $password);  

            $sql = "SELECT * FROM mr_users WHERE user_email = '$email_log' AND user_phone = '$password'";

            $resulto = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($resulto, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($resulto); 

            if($count == 1){
                setcookie('auth', $row['user_name'], time() + (86400 * 30), "/");
                setcookie('image', $row['user_photo'], time() + (86400 * 30), "/");
                echo "<script>alert('Successfully logged in, click OK to continue!')</script>";
                echo "<script>window.location.href = './dashboard/reports.php';</script>"; 
            }else{
                echo "<script>alert('You are not allowed to login!')</script>";
                echo "<script>window.location.href = './index.php';</script>"; 
            }
        }

    ?>
</body>
</html>