$(document).ready(function(){
    $('#login-admin-form').validator();

    $('#login-admin-form').on('submit', function (e) {
        params= {};
        params.action = "getUserAdmin";
        params.username = $('#username-admin').val();
        params.password = $('#pass-admin').val();
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/users/admin_user.php",
            url: "../back/admin/users/admin_user.php",
            type: "POST",
            data: params,
        }).done(function( data ) {
            data = JSON.parse(data);
            if (data.type == "success"){
                window.location.href='../platform/admin/dashboard.php';
            }else if (data.type=="danger"){
                console.log('entro')
                var messageAlert = 'alert-' + data.type;
                var messageText = data.message;
                var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>' + messageText + '</div>';
                if (messageAlert && messageText) {
                    $('#login-admin-form').find('.messages').html(alertBox);
                    $('#login-admin-form')[0].reset();
                    $('.messages').show();
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