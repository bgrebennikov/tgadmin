<?php
include('../functions.php');



?>

<div class="c_element cb_title">
    <div class="title_body">
        <h3>Добавить Задание</h3>
        <div class="title_buttons">
            <a href="#" class="tasks_list">
                <div class="t_button">Вернуться назад</div>
            </a>
        </div>
    </div>
</div>

<div class="c_element cb_add_task">

    <div class="add_task_form">
        <div class="tf_title">
            <h4>Название задания</h4>
        </div>
        <div class="taskname">
            <input id="tf_name" type="text" placeholder="Например: Регистрация с подтверждением">
        </div>
        <div class="tf_title">
            <h4>Описание задания</h4>
        </div>
        <div class="tf_description">
            <textarea id="tf_description"></textarea>
        </div>

        <div class="tf_title">
            <h4>Цена за выполнение</h4>
        </div>
        <div class="task_amount">
            <input id="tf_amount" type="text" placeholder="Например: 15.0">
        </div>

        <div class="tf_add_task">
            <input type="submit" id="add_task_btn" value="Добавить">
        </div>



    </div>    


</div>

<script src="/js/add_task.js"></script>