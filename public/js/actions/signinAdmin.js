$(function () {

    $('#signin-admin-form').validator();

    function validateMail(mail) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(mail);
    }
    $('#mail-admin').on('click', function(){
        $('#mail-admin').css("border", "1px solid #ccc");
    })
    $('#signin-admin-form').on('submit', function (e) {
        if (!validateMail($('#mail-admin').val())){
            $('#mail-admin').css("border", "1px red solid");
            $('#mail-admin').focus();
            return false;
        }else if (!e.isDefaultPrevented()) {
        if (!e.isDefaultPrevented()) {
            $.ajax({
                type: "POST",
                //url: "http://www.blinkapp.com.ar/back/admin/users/admin_user.php",
                url: "../back/admin/users/admin_user.php",
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
                    $('#mail-admin').css("border", "0");
                    setTimeout(function(){
                        $('.messages').fadeOut('slow');
                    }, 3000);
                    if (data.type == "success"){
                        setTimeout(function(){  window.location.href='../platform/index.php'}, 1000);
                    }
                }
            }).error(function(error, textStatus){
                console.log(error);
            });
            return false;
        }
    })
});