$(document).ready(function(){
	$('#login-admin').on('click', function(){
        //Validate empty input
        params= {};
        params.action = "getUserAdmin";
        params.username = $('#username-admin').val();
        params.password = $('#pass-admin').val();

        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/users/admin_user.php",
            url: "back/admin/users/admin_user.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
            console.log("redirect");
            window.location = "content/dashboard.php";
            //window.location = "http://www.blinkapp.com.ar/content/admin/dashboard.php";
        }).error(function(error, textStatus){
            $('.error-log-in-admin').show();
            console.log(error, textStatus);
        });
    })
})