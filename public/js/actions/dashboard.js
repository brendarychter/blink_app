$(document).ready(function(){

    var userAdmin = {};

    $.ajaxSetup({cache: false})
    getSessionAdminUser();

    toggleTabs();
    populateLabels();

    function getSessionAdminUser(){
    	console.log("entro")

        //$.get('http://blinkapp.com.ar/back/admin/users/getUserAdminSession.php', function (data) {
        $.get('../../back/admin/users/getUserAdminSession.php', function (data) {
          userAdmin = JSON.parse(data);
          $("#admin-logged").append(userAdmin.username);
        });
    }

    function populateLabels(){
        params= {};
        params.action = "getContent";
        $.ajax({
            //url: "http://blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "../../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            // SECTION 1
            $('.titulo-spanish-1').append(unescape(data["title_section_1"].spanish));
            $('.titulo-english-1').append(unescape(data["title_section_1"].english));
            $('.subtitle-spanish-1').append(unescape(data["subtitle_section_1"].spanish));
            $('.subtitle-english-1').append(unescape(data["subtitle_section_1"].english));
            $('.button-spanish-1').append(unescape(data["button_section_1"].spanish));
            $('.button-english-1').append(unescape(data["button_section_1"].english));

            //SECTION 2
            $('.title-spanish-2').append(unescape(data["title_section_2"].spanish));
            $('.title-english-2').append(unescape(data["title_section_2"].english));
            $('.subtitle-spanish-2').append(unescape(data["subtitle_section_2"].spanish));
            $('.subtitle-english-2').append(unescape(data["subtitle_section_2"].english));
            $('.text-spanish-2').append(unescape(data["text_section_2"].spanish));
            $('.text-english-2').append(unescape(data["text_section_2"].english));
            $('.button-spanish-2').append(unescape(data["button_section_2"].spanish));
            $('.button-english-2').append(unescape(data["button_section_2"].english));

            //SECTION 4
            $('.title-spanish-4').append(unescape(data["title_section_4"].spanish));
            $('.title-english-4').append(unescape(data["title_section_4"].english));
            $('.text-spanish-4').append(unescape(data["text_section_4"].spanish));
            $('.text-english-4').append(unescape(data["text_section_4"].english));

            //SECTION 5
            $('.button-spanish-5').append(unescape(data["button_section_5"].spanish));
            $('.button-english-5').append(unescape(data["button_section_5"].english));
            $('.title-spanish-5').append(unescape(data["title_section_5"].spanish));
            $('.title-english-5').append(unescape(data["title_section_5"].english));
            $('.subtitle-spanish-5').append(unescape(data["subtitle_section_5"].spanish));
            $('.subtitle-english-5').append(unescape(data["subtitle_section_5"].english));
        }).error(function(error, textStatus){
            console.log(error);
        });
    }

    function toggleTabs(){
    //borrar todas las que están en el dashboard de pestañas
        $('.team-admin').hide();
        $(".toggle-nav-admin").click(function() {
            // remove classes from all
            $(".toggle-nav-admin").css("backgroundColor", "#fff");
            $(".toggle-nav-admin").removeClass("active");
            $(".tab-admin-page .admin-nav").hide();
            // add class to the one we clicked
            $(this).addClass("active");
            $(this).css("backgroundColor", "#ccc");
            $(".tab-admin-page ." + $(this).attr('id')).show();
        });
    }

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
        params = {};
        params.action = "modifyContent";
        newValue = escape(newValue);
        params.newValue = newValue;
        params.oldValue = oldValue;
        params.realValue = params2.realvalue;
        params.language = params2.language;
        if (newValue !== oldValue){
            console.log("insert");
            $.ajax({
                //url: "http://blinkapp.com.ar/back/admin/content/adminContent.php",
                url: "../../back/admin/content/adminContent.php",
                type: "POST",
                data: params
            }).done(function( data ) {
              console.log(data)
              $span.css({border: '0 solid #29BF29'}).animate({
                    borderWidth: 1
                }, 200);
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
    }
    $(".editable-text").on("click", switchToInput);
})