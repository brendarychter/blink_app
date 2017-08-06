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
            dataType: "json",
            success: function (data){
                console.log(data);
                console.log("redirect");
                window.location = "content/dashboard.php";
                //window.location = "http://www.blinkapp.com.ar/content/dashboard.php";
            },
            error: function (error){
                $("#error-log-in-admin").show().delay(3000).fadeOut();
                console.log(error);
                console.log('entro')
            }
        });
    })
})