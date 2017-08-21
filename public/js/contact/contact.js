$(function () {

    $('#contact-form').validator();

    function validateMail(mail) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(mail);
    }
    $('#form_email').on('click', function(){
        $('#form_email').css("border", "0");
    })
    $('#contact-form').on('submit', function (e) {
        if (!validateMail($('#form_email').val())){
            $('#form_email').css("border", "1px red solid");
            $('#form_email').focus();
            return false;
        }else if (!e.isDefaultPrevented()) {
            var url = "back/contact/contact.php";
            var today = new Date();
            var lan = localStorage.getItem("language");

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
                    $('#form_email').css("border", "0");
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