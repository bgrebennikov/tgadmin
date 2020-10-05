<?php

include('dbconnect.php');


// Вывод заданий
function get_tasks(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM tasks");
    $data = $query->fetchAll();
    return $data;
}


// Вывод пользователей бота
function get_users(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM users");
    $data = $query->fetchAll();
    return $data;
}

function remove_task($id){
    global $pdo;
    $query = $pdo->prepare("DELETE FROM tasks WHERE id = ".$id."");
    $query->execute();

    return $query->rowCount();
}

function add_task($name, $description, $url, $amount){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO tasks(name, description, url, amount) VALUES(?, ?, ?, ?)");
    $query->execute([$name, $description, $url, $amount]);
    return $query->rowCount();
}





?>