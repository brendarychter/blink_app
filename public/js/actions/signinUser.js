

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