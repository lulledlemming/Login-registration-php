<?php
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/style.php">
    <title>Sign Up</title>
</head>
<body>
<div class="form-control">
    <div class="pagetitle">
        <h2>Create an account</h2>
    </div>

    <form class="form" action="" method="post">
        <label class="form-control-label" for="username"><b>Username</b></label>
        <input type="text" class="form-control-text" placeholder="Your username" id="username" name="username" required>

        <label class="form-control-label" for="email"><b>Email</b></label>
        <input type="email" class="form-control-text" placeholder="Your email" id="email" name="user_email" required>

        <label class="form-control-label" for="password"><b>Password</b></label>
        <input type="password" class="form-control-text" placeholder="Your password" id="password" name="user_password" required>

        <input type="submit" class="form-control-submit" value="Sign Up">

        <?php
        if(isset($success_message)){
            echo '<div class="success_message">'.$success_message.'</div>';
        }
        if(isset($error_message)){
            echo '<div class="error_message">'.$error_message.'</div>';
        }
        ?>
    </form>

    <div class="reg-container">
        <a href="index.php"><span>Login</span></a>
    </div>
</div>
</body>
</html>