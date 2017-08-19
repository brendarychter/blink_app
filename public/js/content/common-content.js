$(document).ready(function(){
    /* Cambiar idioma y settearlo si no está seteado*/
    if (localStorage.getItem("language") === null){
        localStorage.setItem("language", "spanish");
    }
    $('#english.language-selection').on("click", function(){
        if (localStorage.getItem("language") === null) {
            localStorage.setItem("language", "english");
        }else{
            localStorage.setItem("language", "english");
        }
    })

    $('#spanish.language-selection').on("click", function(){
        if (localStorage.getItem("language") === null) {
            localStorage.setItem("language", "spanish");
        }else{
            localStorage.setItem("language", "spanish");
        }
    })
    
    
	var language = localStorage.getItem("language");

    /* Agregar clase de color al idioma seleccionado */
    $('.language-selection').removeClass("selected-language");
    if(language == "english"){
        $('#english').addClass("selected-language");
    }else if(language == "spanish"){
        $('#spanish').addClass("selected-language");
    }

    /* Cargar data de header y footer */
    
	getPartialContent("menu");
    getPartialContent("footer");


    function getPartialContent(table){
        var path = window.location.pathname;

        if (path.indexOf("/content") != -1){
            url = "../back/admin/content/adminContent.php"
        }else{
            url = "back/admin/content/adminContent.php"
        }
        params = {};
        params.action = "getContent";
        params.table = table;
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: url,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            for (var i in data){
                $('.'+i).text(unescape(data[i][language]));
            }
            if (table == "menu"){
                for (var i in data){
                    if(data[i].visible == 1){
                        $('.'+i).show();
                        $('.show-page:checkbox[value='+i+']').attr('checked', true);
                    }else{
                        $('.'+i).hide();
                        $('.show-page:checkbox[value='+i+']').attr('checked', false);
                    }
                }
            }
        }).error(function (error){
            console.log(error);
        });
    }


    /* Cargar imagen del logo y el tab (para mostrar)*/
    loadImagesMenu();
    function loadImagesMenu(){
        params= {};
        params.action = "getContent";
        params.tableName = "menu";

        var url, urlImage;
        if (window.location.href.indexOf("content") > -1){
            url = "../back/admin/content/getImages.php";
            urlImage = "../uploads/";
        }else{
            url = "back/admin/content/getImages.php";
            urlImage = "uploads/";
        }

        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
            url: url,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            for (var i in data){
                for (var n in data[i]){
                    var logo_image = data[i][n];
                    $('.'+logo_image["id_name"]).prop("alt", logo_image["nombre_en"])
                    $('.'+logo_image["id_name"]).prop("title", logo_image["nombre_en"])
                    $('.'+logo_image["id_name"]).attr("src", urlImage + logo_image.img);
                }
            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }
});