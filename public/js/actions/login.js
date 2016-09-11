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
        params= {};
        params.id= 1;
        params.action="getUser";
        params.username="brenda";
        params.password="1234";
        $.ajax({
            //http://blinkapp.com.ar/back/user/adminUser.php
            url: "../back/user/adminUser.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( user ) {
        	console.log(user)
            window.location.href = "application.php";
            //get session storage
                    
        }).error(function(error, textStatus){
        	console.log(error);
        });
    })

    $('#sign-in-app').on('click', function(){
    	var formData = $(".email-signup").serialize();
    	if ($("#username-signin").val()){
			console.log(formData);
	        $.ajax({
	        	//http://blinkapp.com.ar/
	            url: "../back/user/createUser.php",
	            type: "POST",
	            data: formData
	        }).done(function( user ) {
	            console.log("user " + user);
            	$("#userID").val(user.userID);
	            window.location.href = "application.php";
	                    
	        }).error(function(error, textStatus){
	        	console.log(error)
	        	console.log("No pudo conectarse: " + textStatus);
	        });

    	}else{
    		console.log("error en los campos");
    	}
    	
    })
})