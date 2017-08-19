$(document).ready(function(){
    /* Seleccionar las secciones del panel */
    toggleTabs();
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

    /* Cargar todo el panel de administración */
    
    getPartialContent("menu");
    getPartialContent("home");
    getPartialContent("works");
    getPartialContent("demo");
    getPartialContent("faq");
	getPartialContent("team");

    function getPartialContent(table){
        params = {};
        params.action = "getContent";
        params.table = table;
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "../../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            for (var i in data){
                $('.'+i+'_spanish').text(unescape(data[i]["spanish"]));
                $('.'+i+'_english').text(unescape(data[i]["english"]));
            }
        }).error(function (error){
            console.log(error.statusText);
        });
    }

    var urlAdmin;
    if (window.location.href.indexOf("content") > -1){
        urlAdmin = "../../back/admin/content/adminContent.php";
    }else{
        urlAdmin = "back/admin/content/adminContent.php";
    }

    $('.show-page').on("click", function(){
        params= {};
        params.action = "showAndHideMenu";
        params.table = "menu";
        params.value = $(this).val();
        if ($(this).is(":checked")){
            params.show = "1";
        }else{
            params.show = "0";
        }

        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: urlAdmin,
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

    loadHome("home");
    function loadHome(table){
        params= {};
        params.action = "getContent";
        params.tableName = table;

        var url, urlImage;
        if (window.location.href.indexOf("platform") > -1){
            url = "../../back/admin/content/getImages.php";
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
            for (var i in data[table]){
                var img = data[table][i];
                var val = img.img;
                //Info imagen
                $('.img_'+table).css('background-image', 'url(' + urlImage +  img.img + ')');
                $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                $('.img_'+table).attr("data-url", img.img);
                //Titulo
                $('#title_img_'+table+'_es').val(img.nombre_es);
                $('#title_img_'+table+'_en').val(img.nombre_en);
            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }

    //Cargo imagen de logo en seccion menu
    loadMenu("menu");
    function loadMenu(table){
        params= {};
        params.action = "getContent";
        params.tableName = table;

        var url, urlImage;
        if (window.location.href.indexOf("platform") > -1){
            url = "../../back/admin/content/getImages.php";
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
            for (var i in data[table]){
                var img = data[table][i];
                var val = img.img;
                //Info imagen
                $('.img_'+table).css('background-image', 'url(' + urlImage +  img.img + ')');
                $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                $('.img_'+table).attr("data-url", img.img);
                //Titulo
                $('#title_img_'+table+'_es').val(img.nombre_es);
                $('#title_img_'+table+'_en').val(img.nombre_en);
            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }


    ///Button save image
    $('.save-img').on("click", function(){
        var table = $(this).attr("data-table");
        var id_name = 'img_'+table;
        var url = $('#img_url_'+table).text();
        var title_en = $('#title_img_'+table+'_en').val().toString();
        var title_es = $('#title_img_'+table+'_es').val().toString();
        var file_data;

        var form_data = new FormData();
        if(table == "menu"){
            file_data = $('#img_menu').prop('files')[0];
        }else{
            file_data = $('.img_'+table).prop('files')[0];
        }

        form_data.append('imagen', file_data);
        form_data.append('id_name', id_name);
        form_data.append('section', 0);
        form_data.append('table', table);
        form_data.append('submit', "submit");
        form_data.append('titulo_en', title_en);
        form_data.append('titulo_es', title_es);

        if (url == null || url ==undefined || url ==""){
            console.log("nueva");
            $.ajax({
                //url: "http://www.blinkapp.com.ar/back/admin/content/loadImages.php",
                url: "../../back/admin/content/loadImages.php",
                type: "POST",
                cache: false,
                processData: false,
                data: form_data,
                dataType: "text",
                contentType: false,
            }).done(function( data ) {
                console.log(data);
            }).error(function(error, textStatus){
                console.log(error)
            });
        }else{
            console.log("url existe, hacer un update");
            $.ajax({
                //url: "http://www.blinkapp.com.ar/back/admin/content/updateImages.php",
                url: "../../back/admin/content/updateImages.php",
                type: "POST",
                cache: false,
                processData: false,
                data: form_data,
                dataType: "text",
                contentType: false,
            }).done(function( data ) {
                console.log(data);
            }).error(function(error, textStatus){
                console.log(error)
            });
        }
    })

    //WORKS
    //                 case "works":
    //                     $('.img_'+table).attr("data-url", img.img);
    //                     $('.img_'+table).prop("alt", img.nombre);
    //                     $('.img_'+table).prop("title", img.nombre);
    //                     var val = img.img;
    //                     $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
    //                     $('.img_'+table).attr("src", urlImage + img.img);
    //                     $('#title_img_'+table).val(img.nombre);
    //                 break;
});