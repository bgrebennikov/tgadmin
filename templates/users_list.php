<?php
include('../functions.php');

$users = get_users();


?>


<div class="c_element cb_title">
    <h3>Список пользователей</h3>
</div>

<div class="c_element cb_users_list">

    <div class="cb_header">
        <div class="field_description">ID</div>
        <div class="field_description">Username</div>
        <div class="field_description">Баланс</div>
        <div class="field_description">Qiwi</div>
        <div class="field_description">Yandex</div>
    </div>

    <ul>
        <?php
            foreach($users as $user){
                echo("
                <a href='#' id='".$user['id']."' >
                <div class='user_obj'>
                <div class='obj_userid'>".$user['id']."</div>
                <div class='obj_username'>".$user['username']." (".$user['first_name']." ".$user['last_name'].")</div>
                <div class='obj_userbalance'>".$user['balance']."</div>
                <div class='obj_userqiwi'>".$user['qiwi_wallet']."</div>
                <div class='obj_useryandex'>".$user['yandex_wallet']."</div>
                </div>
                </a>
                ");
            }
        ?>
    </ul>
</div>