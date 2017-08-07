$(document).ready(function(){

    var userAdmin = {};

    $.ajaxSetup({cache: false})
    getSessionAdminUser();

    toggleTabs();
    populateLabels();

    function getSessionAdminUser(){
    	console.log("entro")

        //$.get('http://www.blinkapp.com.ar/back/admin/users/getUserAdminSession.php', function (data) {
        $.get('../back/admin/users/getUserAdminSession.php', function (data) {
          userAdmin = JSON.parse(data);
          $("#admin-logged").append(userAdmin.username);
        });
    }

    $('#log-out').on('click', function(){
        $.ajaxSetup({cache: false})
        $.get('../back/global/destroySession.php', function (data) {
            window.location.href = "../indexAdmin.php";
        });
    })

    function populateLabels(){
        params= {};
        params.action = "getContent";
        params.table = "home";
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {

            /*=============================================
            =            Section comment block            =
            =============================================*/
            
            //console.log(data["section_section_1"].visible)
            checkVisibility(data["section_section_1"]);
            checkVisibility(data["button_section_2"]);
            checkVisibility(data["title_section_4"]);
            checkVisibility(data["button_section_5"]);

            // SECTION 1
            //SECTION 1 HOME
            $('.section-spanish-1').append(unescape(data["section_section_1"].spanish));
            $('.section-english-1').append(unescape(data["section_section_1"].english));
            $('.button-spanish-1').append(unescape(data["button_section_1"].spanish));
            $('.button-english-1').append(unescape(data["button_section_1"].english));
            $('.titulo-spanish-1').append(unescape(data["title_section_1"].spanish));
            $('.titulo-english-1').append(unescape(data["title_section_1"].english));
            $('.subtitle-spanish-1').append(unescape(data["subtitle_section_1"].spanish));
            $('.subtitle-english-1').append(unescape(data["subtitle_section_1"].english));


            //SECTION 2
            $('.title-spanish-2').append(unescape(data["title_section_2"].spanish));
            $('.title-english-2').append(unescape(data["title_section_2"].english));
            $('.subtitle-spanish-2').append(unescape(data["subtitle_section_2"].spanish));
            $('.subtitle-english-2').append(unescape(data["subtitle_section_2"].english));
            $('.text-spanish-2').append(unescape(data["text_section_2"].spanish));
            $('.text-english-2').append(unescape(data["text_section_2"].english));
            $('.button-spanish-2').append(unescape(data["button_section_2"].spanish));
            $('.button-english-2').append(unescape(data["button_section_2"].english));

            $('.text_1_section_2-spanish').text(unescape(data["text_1_section_2"].spanish))
            $('.text_1_section_2-english').text(unescape(data["text_1_section_2"].english))
            $('.text_2_section_2-spanish').text(unescape(data["text_2_section_2"].spanish))
            $('.text_2_section_2-english').text(unescape(data["text_2_section_2"].english))
            $('.text_3_section_2-spanish').text(unescape(data["text_3_section_2"].spanish))
            $('.text_3_section_2-english').text(unescape(data["text_3_section_2"].english))
            $('.text_4_section_2-spanish').text(unescape(data["text_4_section_2"].spanish))
            $('.text_4_section_2-english').text(unescape(data["text_4_section_2"].english))

            //SECTION 4
            $('.title-spanish-4').append(unescape(data["title_section_4"].spanish));
            $('.title-english-4').append(unescape(data["title_section_4"].english));
            $('.text-spanish-4').append(unescape(data["text_section_4"].spanish));
            $('.text-english-4').append(unescape(data["text_section_4"].english));
            $('.button-spanish-4').append(unescape(data["button_section_4"].spanish));
            $('.button-english-4').append(unescape(data["button_section_4"].english));

            //SECTION 5
            $('.button-spanish-5').append(unescape(data["button_section_5"].spanish));
            $('.button-english-5').append(unescape(data["button_section_5"].english));
            $('.title-spanish-5').append(unescape(data["title_section_5"].spanish));
            $('.title-english-5').append(unescape(data["title_section_5"].english));
            $('.subtitle-spanish-5').append(unescape(data["subtitle_section_5"].spanish));
            $('.subtitle-english-5').append(unescape(data["subtitle_section_5"].english));

            $('.text_1_section_5-spanish').append(unescape(data["text_1_section_5"].spanish));
            $('.text_1_section_5-english').append(unescape(data["text_1_section_5"].english));
            $('.text_2_section_5-spanish').append(unescape(data["text_2_section_5"].spanish));
            $('.text_2_section_5-english').append(unescape(data["text_2_section_5"].english));
            $('.text_3_section_5-spanish').append(unescape(data["text_3_section_5"].spanish));
            $('.text_3_section_5-english').append(unescape(data["text_3_section_5"].english));
            $('.text_4_section_5-spanish').append(unescape(data["text_4_section_5"].spanish));
            $('.text_4_section_5-english').append(unescape(data["text_4_section_5"].english));
            
            
            /*=====  End of Section comment block  ======*/
            
            


        }).error(function(error, textStatus){
            console.log(error);
        });
    }

    function checkVisibility(section){
        if (section.visible == 0){
            console.log("no mostrar");
            $('#edit-section-'+section.section).show();
            $('#delete-section-'+section.section).hide();
        }else{
           $('#edit-section-'+section.section).hide();
            $('#delete-section-'+section.section).show();
        }
    }

    function toggleTabs(){
    //borrar todas las que están en el dashboard de pestañas
        $('.team-admin').hide();
        $(".toggle-nav-admin").click(function() {
            // remove classes from all
            $(".toggle-nav-admin").removeClass("active");
            $(".tab-admin-page .admin-nav").hide();
            // add class to the one we clicked
            $(this).addClass("active");
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
                    url: "../back/admin/content/adminContent.php",
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
            url: "../back/admin/content/adminContent.php",
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

})
