$(function () {

    $('#signin-user-form').validator();

    $('#signin-user-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            //url: "http://www.blinkapp.com.ar/back/admin/users/admin_user.php",
            $.ajax({
                type: "POST",
                url: "back/admin/users/admin_user.php",
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
                        setTimeout(function(){  window.location.href='indexAdmin.php'}, 3000);
                    }
                }
            }).error(function(error, textStatus){
                console.log(error);
            });
            return false;
        }
    })
});

    // $('#sign-in-app').on('click', function(){
    // 	if ($("#username-signin").val()){
    //         params= {};
    //         params.action = "createUser";
    //         params.username = $('#username-signin').val();
    //         params.password = $('#password-signin').val();
    //         params.phoneNumber = $('#mobile-signin').val();
    //         params.mail = $('#mail-signin').val();
    //         //VALIDAR CAMPOS VACIOS

    //         par = {};
    //         par.mail = $('#mail-signin').val();
    //         par.username = $('#username-signin').val();
    //         par.password = $('#password-signin').val();
    //         par.action = "userExists"; 
    //         $.ajax({
    //             //url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
    //             url: "../back/user/adminUser.php",
    //             type: "POST",
    //             data: par,
    //             cache: false,
    //             dataType: "text"
    //         }).done(function( data ) {
    //             console.log(data)
    //             //window.location.href = "application.php";
    //             $.ajax({
    //                 //url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
    //                 url: "../back/user/adminUser.php",
    //                 type: "POST",
    //                 data: params,
    //                 cache: false,
    //                 dataType: "text"
    //             }).done(function( data ) {
    //                 console.log(data)
    //                 window.location.href = "application.php";
    //             }).error(function(error, textStatus){
    //                 console.log("No pudo conectarse: " + textStatus);
    //             });
    //         }).error(function(error, textStatus){
    //             console.log("No pudo conectarse: " + textStatus);
    //         });
    // 	}else{
    // 		console.log("error en los campos");
    // 	}
    // })