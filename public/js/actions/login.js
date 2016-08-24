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
        var formData = $(".email-login").serialize();
        console.log("!!!!")
        $.ajax({
            url: "http://blinkapp.com.ar/back/user/adminUser.php",
            type: "POST",
            data: formData,
            cache: false,
            dataType: "json"
        }).done(function( user ) {
        	console.log(user)
            localStorage.setItem("username", user.username);
            //store password not in localstorage
            localStorage.setItem("password", user.password);
            localStorage.setItem("mail", user.mail);
            localStorage.setItem("phoneNumber", user.phoneNumber);
            $("#userID").val(user.userID);
            window.location.href = "application.php";

            //store password not in localstorage
            //localStorage.setItem("password", $("#password-login").val());
                    
        }).error(function(error, textStatus){
        	console.log("No pudo conectarse: " + textStatus);
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
	            localStorage.setItem("username", $("#username-signin").val());
	            //store password not in localstorage
	            localStorage.setItem("password", $("#password-signin").val());
	            localStorage.setItem("mail", $("#mail-signin").val());
	            localStorage.setItem("phoneNumber", $("#mobile-signin").val());
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