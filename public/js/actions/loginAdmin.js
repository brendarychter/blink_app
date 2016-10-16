$(document).ready(function(){
	$('#login-admin').on('click', function(){
        //Validate empty input
        console.log("hello");
        params= {};
        params.action = "getUserAdmin";
        params.username = $('#username-admin').val();
        params.password = $('#pass-admin').val();

        $.ajax({
        //     //http://blinkapp.com.ar/back/user/adminUser.php
            url: "back/admin/users/admin_user.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
            window.location.href = "content/admin/dashboard.php";
        }).error(function(error, textStatus){
            console.log(error);
        });
    })
})