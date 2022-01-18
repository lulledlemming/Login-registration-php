<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

    $user_email = $_SESSION['user_email'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
    $userData =  mysqli_fetch_assoc($get_user_data);

}else{
    header('Location: logout.php');
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
    <title>Home</title>
</head>
<body>
<div class="header">
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
<!--                <li><a href="index.php">New Account</a></li>-->
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
</div>
<div class="container">
    <h3>Hello, <span class="username"><?php echo $userData['username'];?></span></h3>
    <div class="date-container">
        <span><?php echo date(DATE_RFC2822);?></span>
    </div>
</div>
</body>
</html>