$(function () {
    $('#login-user-form').validator();
    $('#login-user-form').on('submit', function (e) {
        params= {};
        params.action = "getUser";
        params.username = $('#username-user').val();
        params.password = $('#pass-user').val();
        $.ajax({
            url: "../back/user/adminUser.php",
            type: "POST",
            data: params,
        }).done(function( data ) {
            data = JSON.parse(data);
            if (data.type == "success"){
                window.location.href='application.php';
            }else if (data.type=="danger"){
                console.log('entro')
                var messageAlert = 'alert-' + data.type;
                var messageText = data.message;
                var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>' + messageText + '</div>';
                
                if (messageAlert && messageText) {
                    $('#login-user-form').find('.messages').html(alertBox);
                    $('#login-user-form')[0].reset();
                    setTimeout(function(){
                        $('.messages').fadeOut('slow');
                    }, 3000);
                }
            }
        }).error(function(error, textStatus){
            console.log(error);
        });
        return false;
    })
})