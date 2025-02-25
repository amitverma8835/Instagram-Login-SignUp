<?php
include(".\db_connect.php");
$error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $sql = "Select * from usersdata where username='$username'";
        $result = mysqli_query($conn,$sql);
        $num =  mysqli_num_rows($result);
        $password = $_POST['password'];
        if ($num > 0) {
                $sql2="UPDATE `usersdata` SET `password` = '$password' WHERE `usersdata`.`username` = '$username'";
                $result = mysqli_query($conn,$sql2);
                header('Location: InstagramLogIn.php ');

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
        <title>Forget Password</title>
        <link rel="stylesheet" href="instagram.css">
</head>
<body>
        <form action="changePassword.php" method="post">
                <div class="container">
                        <div class="insta_logo">
                                <img src="Instagram-name-logo-transparent-PNG.png" alt="">
                        </div>
                        <div class="Inputfiled">
                                <input type="text" class="username" name="username" id="username" placeholder="Username" required>
                                <?php
                                if ($error) {
                                       echo '<p>Username not exists</p>';
                                }
                                ?>
                                

                                <input type="text" class="password" name="password" id="password" placeholder="New Password" required>

                                <input type="text" class="password" name="password" id="password" placeholder="Confirm Password" required>
                        </div>

                
                        <div class="logInBtn">
                                <button type="submit" class="submit" name="submit" id="submit">Done</button>
                        </div>
                        <div class="forget_ps" style="margin-left:170px;">
                        <a href="welcome.php" style="text-decoration:underline">Home</a>
                        </div> 

        
                </div>

        </form>
</body>
</html>