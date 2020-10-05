$('.tasks_list').click(function(){
    
    $.ajax({
        url: '/templates/tasks_list.php',
        type: "GET",
        success: function(html_data){
            content.html(html_data);
        }
    })

})

$("#add_task_btn").click(function(){
    $.ajax({
        url: '/actions/add_task.php',
        type: "POST",
        data: {
            name: $("#tf_name").val(),
            description: $("#tf_description").val(),
            url: 'https://google.com',
            amount: $("#tf_amount").val()
        },
        success: function(data){
            alert('Задание добавленно')
        }
    });


})