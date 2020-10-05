

$("#login_btn").click(function(){

    var login = $("#admin_login").val();
    var password = $("#admin_password").val();

    $.ajax({
        url: "/login.php",
        type: "POST",
        data:{
            'action': 'auth',
            'login': login,
            'password': password
        },
        dataType: 'json',
        success: function(data){
            if (data['status'] == 'success'){
                window.location.replace('./dashboard.php');
            }
            else{
                alert('Не верный логин или пароль');
            }
        }
    })


})