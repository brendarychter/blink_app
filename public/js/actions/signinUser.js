$(function () {

    $('#signin-user-form').validator();

    $('#signin-user-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            //url: "http://www.blinkapp.com.ar/back/admin/users/admin_user.php",
            var today = new Date();
            var date_time = today.getDate() + '/' + (today.getMonth()+1) + '/' + today.getFullYear() + '. ' + today.getHours() + ":" + today.getMinutes();
            $.ajax({
                type: "POST",
                url: "../back/user/adminUser.php",
                data: $(this).serialize() + '&action=createNewUser' + '&datetime=' + date_time.toString()
            }).done(function( data ) {
                console.log(data)
                var data = JSON.parse(data);
                var messageAlert = 'alert-' + data.type;
                var messageText = data.message;

                var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>' + messageText + '</div>';
                if (messageAlert && messageText) {
                    grecaptcha.reset();
                    $('#signin-user-form').find('.messages').html(alertBox);
                    $('#signin-user-form')[0].reset();
                    $('.messages').show();
                    setTimeout(function(){
                        $('.messages').fadeOut('slow');
                    }, 3000);
                    if (data.type == "success"){
                        setTimeout(function(){  window.location.href='../content/application.php'}, 2000);
                    }
                }
            }).error(function(error, textStatus){
                console.log(error);
            });
            return false;
        }
    })
});