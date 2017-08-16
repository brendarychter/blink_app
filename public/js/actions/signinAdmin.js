$(function () {

    $('#signin-admin-form').validator();

    $('#signin-admin-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            $.ajax({
                type: "POST",
                url: "http://www.blinkapp.com.ar/back/admin/users/admin_user.php",
                //url: "back/admin/users/admin_user.php",
                data: $(this).serialize() + '&action=setUserAdmin'
            }).done(function( data ) {
                data = JSON.parse(data);
                var messageAlert = 'alert-' + data.type;
                var messageText = data.message;

                var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>' + messageText + '</div>';
                if (messageAlert && messageText) {
                    console.log("entro")
                    grecaptcha.reset();
                    $('#signin-admin-form').find('.messages').html(alertBox);
                    $('#signin-admin-form')[0].reset();
                    $('.messages').show();
                    setTimeout(function(){
                        $('.messages').fadeOut('slow');
                    }, 3000);
                    if (data.type == "success"){
                        setTimeout(function(){  window.location.href='indexAdmin.php'}, 2000);
                    }
                }
            }).error(function(error, textStatus){
                console.log(error);
            });
            return false;
        }
    })
});