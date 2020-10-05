<?php
session_start();
if (isset($_SESSION['user'])){
    header('Location: ./dashboard.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TG Admin</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    

<div class="wrapper">

    <div class="loginForm">

        <h3 class="form_title">TG ADMIN</h3>

        <div class="form_inputs">
            <input id="admin_login" type="text" placeholder="Login">
            <input id="admin_password" type="password" placeholder="Password">
        </div>

        <div class="form_buttons">
            <input id="login_btn" type="submit" value="Войти">
        </div>

    </div>








</div>



<script src="./js/jquery-3.5.1.min.js"></script>
<script src="./js/login.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>