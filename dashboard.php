<?php
include('dbconnect.php');
session_start();

if (!isset($_SESSION['user'])){
    header('Location: /');
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TG Admin</title>
    <link rel="stylesheet" href="./css/dashboard.css">

    <script src="/js/jquery-3.5.1.min.js"></script>
</head>
<body>
    
    <div class="wrapper">

        <div class="sidebar">
            <div class="sidebar_header">
                <h3>RT Admin</h3>
            </div>

            <div class="sidebar_menu">
                <ul>
                    <a href="#" id="tasks_list">
                        <li>Задания</li>
                    </a>
                    <a href="#" id="users_list">
                        <li>Пользователи</li>
                    </a>
                    <a href="#">
                        <li>Настройки</li>
                    </a>
                </ul>
            </div>


        </div>

        <div class="view_area">
            <div class="content">
                <div class="contect_title">
                    <h4>Задания</h4>
                </div>
                <div class="content_body">
                    
                    
                




                </div>
            </div>
        </div>
        










    </div>

    
    <script src="/js/dashboard.js"></script>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>