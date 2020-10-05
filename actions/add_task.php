<?php
include('../functions.php');

if (isset($_POST['name'])){
    $res = add_task($_POST['name'],
        $_POST['description'],
        $_POST['url'],
        $_POST['amount']
    );
    echo($res);
}


?>