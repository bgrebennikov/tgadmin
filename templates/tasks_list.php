<?php
include('../functions.php');

$tasks = get_tasks();


?>




<div class="c_element cb_title">
    <div class="title_body">
        <h3>Список заданий</h3>
        <div class="title_buttons">
            <a href="#" id="add_task">
                <div class="t_button">Добавить задание</div>
            </a>
        </div>
    </div>
</div>

<div class="c_element cb_tasks_list">

    <ul>
        <?php
            foreach($tasks as $task){
                echo('
                <div class="task_obj">
                    <div class="task_header">
                        <div class="task_name">
                            <h4>#'.$task['id'].' '.$task['name'].'</h4>
                        </div>
                        <div class="task_description">'.$task['description'].'</div>
                        
                        <div class="task_amount">Оплата за выполнение: '.$task['amount'].'₽</div>
                        
                        <div class="task_buttons">
                            <a href="#" id="edit_task">
                                <div class="edit_task">Изменить</div>
                            </a>
                            <a href="#" id="remove_task">
                                <div class="remove_task" task-id="'.$task['id'].'">Удалить</div>
                            </a>
                        </div>
                    </div>
                </div>
                ');
            }
        ?>
    </ul>
</div>

<script src="/js/tasks_list.js"></script>