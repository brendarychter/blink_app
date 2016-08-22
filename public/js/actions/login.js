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
        $.ajax({
            url: "../back/user/adminUser.php",
            type: "POST",
            data: formData,
            type: "POST",
            cache: false,
            dataType: "json"
        }).done(function( user ) {
            console.log(user);
            localStorage.setItem("username", $("#username-login").val());
            window.location.href = "application.php";

            //store password not in localstorage
            //localStorage.setItem("password", $("#password-login").val());
                    
        }).error(function(error, textStatus){
        	console.log("No pudo conectarse: " + textStatus);
        });
    })

    $('#sign-in-app').on('click', function(){
    	var formData = $(".email-signup").serialize();
    	console.log(formData);
        $.ajax({
            url: "../back/user/createUser.php",
            type: "POST",
            data: formData
        }).done(function( user ) {
            console.log(user);
            localStorage.setItem("username", $("#username-login").val());
            window.location.href = "application.php";
            //store password not in localstorage
            //localStorage.setItem("password", $("#password-login").val());
                    
        }).error(function(error, textStatus){
        	console.log(error)
        	console.log("No pudo conectarse: " + textStatus);
        });
    })
})