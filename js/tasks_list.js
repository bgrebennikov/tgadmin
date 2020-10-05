var content = $(".content_body");

$('#add_task').click(function(){
    
    $.ajax({
        url: "/templates/add_task.php",
        type: "GET",
        success: function(html_data){
            content.html(html_data);
        }
    })
})

var rm_btns = document.getElementsByClassName('remove_task');

for (i = 0; i < rm_btns.length; i++){
    rm_btns[i].addEventListener("click", function(){
        
        var task_id = $(this).attr('task-id');

        $.ajax({
            url: "/actions/remove_task.php",
            method: "POST",
            data: {
                'task_id': task_id
            },
            success: function(data){
                console.log(data);
            }
        });
    });
}