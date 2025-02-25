<?php

$login = false;
$error =  false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include(".\db_connect.php");
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $email = $_POST['email'];
        // $phone = $_POST['phone'];

        $sql = "Select * from usersdata where username='$username' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        $num =  mysqli_num_rows($result);
        if ($num == 1) {
                $login = true;
                header("Location: welcome.php");
        }
        else{
                $error = true;
        }
}




 ?>





<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instagram</title>
        <link rel="stylesheet" href="instagram.css">
        <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
       <form action="InstagramLogIn.php" method="POST">
        <div class="container">
                <div class="insta_logo">
                        <img src="Instagram-name-logo-transparent-PNG.png" alt="">
                </div>

                <div class="Inputfiled">
                        <input type="text" class="username" name="username" id="username" placeholder="Username , email or phone" required>
                        <input type="password" name="password" id="password" class="password" placeholder="Password" required>
                        <?php
                        if ($error) {
                               echo '<p>Username or Password is wrong</p>';
                        }
                        
                        ?>
                </div>

                <div class="logInBtn">
                        <button class="logiIn" name="logIn" id="logIn">Log In</button>
                </div>

                <div class="spn">
                        <span>-----------OR-----------</span>
                </div>

                <div class="fb_log">
                        <a href="www.facebook.com"><i class="fa-brands fa-square-facebook"></i>Log in with Facebook</a>
                </div>

                <div class="forget_ps">
                        <a href="###">Forgot password?</a>
                </div>
        </div>
        <div class="container2">
                        <div class="sign_up">
                                Don't have an account<a href="InstagramSignUp.php">  Sign Up</a>
                        </div>
        </div>
       </form> 

       
</body>
</html>