<?php
include('dbconnect.php');

if (!empty($_POST['action'])){
    session_start();
    if ($_POST['action'] == 'auth'){
        $login = $_POST['login'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM admins WHERE (login='$login' and password='$password')";
        $res = $pdo->query($sql, PDO::FETCH_ASSOC);
        $res->execute();
        
        $is_correct = $res->fetchAll(PDO::FETCH_ASSOC)[0];
        $user_id = $is_correct['id'];

        $_SESSION['user'] = $user_id;


        if ($is_correct){
            echo(json_encode(
                array('status'=>'success')
            ));
        }
        else{
            echo(json_encode(
                array('status'=>'faled')
            ));
        }



    }




}





?>