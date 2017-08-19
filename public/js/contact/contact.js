$(function () {

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "back/contact/contact.php";
            var today = new Date();
            var lan = localStorage.getItem("language");
            //CHEQUEAR UBICACION????
            var date_time = today.getDate() + '/' + (today.getMonth()+1) + '/' + today.getFullYear() + '. ' + today.getHours() + ":" + today.getMinutes();
            $('.bck').fadeIn("slow");
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize() + '&datetime=' + date_time.toString() + '&lan=' + lan,
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;
                    $('.bck').fadeOut("slow");
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                        grecaptcha.reset();
                    }
                    setTimeout(function(){
                        $('.messages').fadeOut('slow');
                    }, 3000);
                },
                error: function(err){
                    console.log(err.responseText);
                }
            });
            return false;
        }
    })
});