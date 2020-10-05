<?php
include('../functions.php');

if (isset($_POST['task_id'])){
    $rm = remove_task($_POST['task_id']);
    echo($rm);
}



?>