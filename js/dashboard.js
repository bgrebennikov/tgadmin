var content = $(".content_body");


// Загрузка страницы с заданиями
$('#tasks_list').click(function(){
    
    $.ajax({
        url: '/templates/tasks_list.php',
        type: "GET",
        success: function(html_data){
            content.html(html_data);
        }
    })


})

// загрузка страницы со списком пользователей
$('#users_list').click(function(){
    
    $.ajax({
        url: '/templates/users_list.php',
        type: "GET",
        success: function(html_data){
            content.html(html_data);
        }
    })


})