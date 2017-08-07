// $(".email-signup").hide();
// $("#signup-box-link").click(function(){
// 	$(".email-login").fadeOut(100);
// 	$(".email-signup").delay(100).fadeIn(100);
// 	$("#login-box-link").removeClass("active");
// 	$("#signup-box-link").addClass("active");
// });
// $("#login-box-link").click(function(){
// 	$(".email-login").delay(100).fadeIn(100);;
// 	$(".email-signup").fadeOut(100);
// 	$("#login-box-link").addClass("active");
// 	$("#signup-box-link").removeClass("active");
// });
$(function () {
    $('#login-user-form').on('click', function(){
            //Validate empty input
        params= {};
        params.action = "getUserAdmin";
        params.username = $('#username-user').val();
        params.password = $('#pass-user').val();
        $.ajax({
            url: "../back/user/adminUser.php",
            type: "POST",
            data: params,
        }).done(function( data ) {
            console.log(data)
            // data = JSON.parse(data);
            // if (data.type == "success"){
            //     window.location.href='application.php';
            // }else if (data.type=="danger"){
            //     console.log('entro')
            //     var messageAlert = 'alert-' + data.type;
            //     var messageText = data.message;
            //     var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>' + messageText + '</div>';
            //     if (messageAlert && messageText) {
            //         $('#login-user-form').find('.messages').html(alertBox);
            //         $('#login-user-form')[0].reset();
            //         setTimeout(function(){
            //             $('.messages').fadeOut('slow');
            //         }, 3000);
            //     }
            // }
        }).error(function(error, textStatus){
            console.log(error);
        });
        return false;
    })
})
// $(document).ready(function(){
//     $('#login-user').on('click', function(){
//         //Validate empty input
//         params= {};
//         params.action = "getUser";
//         params.username = $('#username-user').val();
//         params.password = $('#pass-user').val();
//         $.ajax({
//             //url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
//             url: "../back/user/adminUser.php",
//             type: "POST",
//             data: params,
//             cache: false,
//             dataType: "json",
//             success: function (data){
//                 console.log(data);
//                 console.log("redirect");
//                 window.location = "application.php";
//             },
//             error: function (error){
//                 $("#error-log-in-user").show().delay(3000).fadeOut();
//                 console.log(error);
//                 console.log('entro')
//             }
//         });
//         return false;
//     })
// })