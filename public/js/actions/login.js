$(".email-signup").hide();
$("#signup-box-link").click(function(){
	$(".email-login").fadeOut(100);
	$(".email-signup").delay(100).fadeIn(100);
	$("#login-box-link").removeClass("active");
	$("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
	$(".email-login").delay(100).fadeIn(100);;
	$(".email-signup").fadeOut(100);
	$("#login-box-link").addClass("active");
	$("#signup-box-link").removeClass("active");
});

$(document).ready(function(){
	$('#log-in-app').on('click', function(){
        //Validate empty input
        params= {};
        params.action = "getUser";
        params.username = $('#username-login').val();
        params.password = $('#password-login').val();

        $.ajax({
            //url: "http://blinkapp.com.ar/back/user/adminUser.php",
            url: "../back/user/adminUser.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
            window.location.href = "application.php";
        }).error(function(error, textStatus){
        	console.log(error);
        });
    })

    $('#sign-in-app').on('click', function(){
    	if ($("#username-signin").val()){
            params= {};
            params.action = "createUser";
            params.username = $('#username-signin').val();
            params.password = $('#password-signin').val();
            params.phoneNumber = $('#mobile-signin').val();
            params.mail = $('#mail-signin').val();
	        $.ajax({
                //url: "http://blinkapp.com.ar/back/user/adminUser.php",
                url: "../back/user/adminUser.php",
	            type: "POST",
                data: params,
                cache: false,
                dataType: "json"
	        }).done(function( data ) {
                console.log(data);
	            window.location.href = "application.php";
	        }).error(function(error, textStatus){
	        	console.log("No pudo conectarse: " + textStatus);
	        });
    	}else{
    		console.log("error en los campos");
    	}
    })
})