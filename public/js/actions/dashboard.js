$(document).ready(function(){

    var userAdmin = {};

    $.ajaxSetup({cache: false})
    getSessionAdminUser();

    function getSessionAdminUser(){
        $.get('http://www.blinkapp.com.ar/back/admin/users/getUserAdminSession.php', function (data) {
        //$.get('../../back/admin/users/getUserAdminSession.php', function (data) {
            userAdmin = JSON.parse(data);
            $("#admin-logged").append(userAdmin.user);
        });
    }

    $('#log-out').on('click', function(){
        $.ajaxSetup({cache: false})
        $.get('http://www.blinkapp.com.ar/back/global/destroySession.php', function (data) {
        //$.get('../../back/global/destroySession.php', function (data) {
            window.location.href = "../index";
        });
    })

    params2 = {};
    var switchToInput = function () {
        var $input = $("<textarea>", {
            val: $(this).text(),
            type: "text"
        });
        $input.addClass("editable-text");
        $(this).replaceWith($input);

        params2.realvalue =  $(this).attr("realvalue")
        params2.language =  $(this).attr("language")

        $input.on("blur", switchToSpan);
        $input.attr("old-value", $(this).text());
        $input.select();
        $input.css("cursor", "text");
        $input.css("resize", "none");
    };
    var switchToSpan = function () {
        var $span = $("<span>", {
            text: $(this).val(),
            language: params2.language,
            realvalue: params2.realvalue,
        });
        $span.addClass("editable-text");
        var newValue = $(this).val();
        var oldValue = $(this).attr('old-value')
        
        //FIXEAR 
        var formValue = $(this).parent().parent().parent().parent().attr('id');
        console.log(formValue)
        if(formValue =="form-section-6"){
            id="menu";
        }else{
            var table1 = $(this).closest("[data-table]");
            var id = table1.attr("id");
        }
        //Si está vacío, no lo dejo escribir
        if(newValue == ""){
            console.log("is empty");
            $('.admin-partial').append(divAlert);
            $(this).css({border: '0 solid #ff0000'}).animate({
                borderWidth: 1
            }, 200);
            setTimeout(function(){
                $('.alert-danger').fadeOut("slow")
            }, 2000)
        }else{
            params = {};
            params.action = "modifyContent";
            params.table = id;
            newValue = escape(newValue);
            oldValue = escape(oldValue);
            params.newValue = newValue;
            params.oldValue = oldValue;
            params.realValue = params2.realvalue;
            params.language = params2.language;
            if (newValue !== oldValue){
                console.log("insert");
                $.ajax({
                    //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
                    url: "../../back/admin/content/adminContent.php",
                    type: "POST",
                    data: params
                }).done(function( data ) {
                    $('.admin-partial').append(divSuccess);
                    console.log(data)
                    $span.css({border: '0 solid #29BF29'}).animate({
                        borderWidth: 1
                    }, 200);
                    setTimeout(function(){
                        var div = $span;
                        $({alpha:1}).animate({alpha:1}, {
                            duration: 1000,
                            step: function(){
                                div.css('border-color','#eee');
                            }
                        });
                        $('.alert-success').fadeOut("slow")

                    }, 2000);
                }).error(function(error, textStatus){
                    console.log(error);
                    $span.css({border: '0 solid #ff0000'}).animate({
                        borderWidth: 1
                    }, 200);
                });
            }
            $(this).replaceWith($span);
            //agregar un atributo al input y comparar. si son distintos, escribo en la base. validacion desde javascript. green border
            $span.on("click", switchToInput);    
            $('.alert-danger').fadeOut();
        }
        
    }
    $(".editable-text").on("click", switchToInput);

    var divAlert = "<div class='alert alert-danger fade in alert-dismissable col-md-11 col-sm-12' style='border-radius: 0; margin-bottom: 0;position: fixed; bottom: 0; margin-left:-15px;'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong>Error.</strong> Debe ingresar un valor</div>"
    var divSuccess = "<div class='alert alert-success fade in alert-dismissable col-md-11 col-sm-12' style='border-radius: 0; margin-bottom: 0;position:fixed; bottom: 0; margin-right:15px;'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong>Listo!</strong> La base de datos se ha modificado exitosamente."


    /**
     *
     * OCULTAR Y MOSTRAR SECCION Y BOTÓN
     *
     */
    
    $('.edit-section').on("click", function(){
        var action = $(this).attr("data-action");
        var section = $(this).attr("data-section");
        console.log(action);
        console.log(section);
        params= {};
        params.action = "showContent";
        params.table = "home";
        params.section = section;
        
        if(action=="delete"){
            $('#edit-section-'+section).show();
            $('#delete-section-'+section).hide();
            params.show = "0";
        }else if(action=="edit"){
            $('#edit-section-'+section).hide();
            $('#delete-section-'+section).show();
            params.show = "1";
        }
        $('.abm-buttons.form-section-'+section).append(divSuccess);
        setTimeout(function(){
            $('.alert-success').fadeOut("slow")

        }, 2000);
        console.log(params)
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "../../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
            
        }).error(function(error, textStatus){
            console.log(error)
        });
    })


    $('#save-video-1').on("click", function(){
        params = {};
        params.table = "home";
        var url = "https://www.youtube.com/embed/";
        var val = $("#video-home-admin");
        src = url + val.substr(val.indexOf("v=") + 1);
        //https://stackoverflow.com/questions/4232462/get-value-from-a-string-after-a-special-character
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/postVideoContent.php",
            url: "back/admin/content/postVideoContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            //table:
            //table_name
            //id_video
            //src
            console.log("ok");
        }).error(function (error){
            console.log(error);
        });
    })

    getVideoHome();
    function getVideoHome(){
        params = {};
        params.table = "home";
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/getVideoContent.php",
            url: "back/admin/content/getVideoContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            //table:
            //table_name
            //id_video
            //src
            var url = "https://www.youtube.com/embed/";
            $("#video-home-admin").val("src", url + data.src);
        }).error(function (error){
            console.log(error);
        });
    }
})
