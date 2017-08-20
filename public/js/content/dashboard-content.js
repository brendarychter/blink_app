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
            url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
             //url: "../../back/admin/content/adminContent.php",
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
            url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            //url: urlAdmin,
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

    loadAdmin("home");
    loadAdmin("works");
    loadAdmin("team");
    function loadAdmin(table){
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
            url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
            //url: url,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            for (var i in data[table]){
                var imagen = data[table][i];
                
                // //Info imagen
                //$('.img_'+table+'_'+imagen.position).css('background-image', 'url(' + urlImage +  imagen.img + ')');
                $('#img_url_'+table+'_'+imagen.position).text(imagen.img.substr(imagen.img.indexOf("/") + 1));
                $('.img_'+table+'_'+imagen.position).attr("data-url", imagen.img);

                // //Titulo
                $('#title_img_'+table+'_'+imagen.position+'_en').val(unescape(imagen.nombre_en));
                $('#title_img_'+table+'_'+imagen.position+'_es').val(unescape(imagen.nombre_es));

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
            url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
            //url: url,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            for (var i in data[table]){
                var img = data[table][i];
                var val = img.img;
                //Info imagen
                $('.img_'+table+'_'+img.position).css('background-image', 'url(' + urlImage +  img.img + ')');
                $('#img_url_'+table+'_'+img.position).text(val.substr(val.indexOf("/") + 1));
                $('.img_'+table+'_'+img.position).attr("data-url", img.img);
                //Titulo
                $('#title_img_'+table+'_'+img.position+'_es').val(img.nombre_es);
                $('#title_img_'+table+'_'+img.position+'_en').val(img.nombre_en);
            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }

    ///Button save image
    $('.save-img').on("click", function(){

        var table = $(this).attr("data-table");
        var order = $(this).attr("data-order");
        var id_name = 'img_'+table+'_'+order;
        var url = $('#img_url_'+table+'_'+order).text();
        var title_en = $('#title_img_'+table+'_'+order+'_en').val().toString();
        var title_es = $('#title_img_'+table+'_'+order+'_es').val().toString();
        var file_data;

        var form_data = new FormData();
        if(table == "menu"){
            file_data = $('#img_menu_'+order).prop('files')[0];
        }else{
            file_data = $('.img_'+table+'_'+order).prop('files')[0];
        }

        form_data.append('imagen', file_data);
        form_data.append('id_name', id_name);
        form_data.append('table', table);
        form_data.append('submit', "submit");
        form_data.append('titulo_en', title_en);
        form_data.append('titulo_es', title_es);

        if (url == null || url ==undefined || url ==""){
            console.log("nueva");
            $.ajax({
                url: "http://www.blinkapp.com.ar/back/admin/content/loadImages.php",
                //url: "../../back/admin/content/loadImages.php",
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
                url: "http://www.blinkapp.com.ar/back/admin/content/updateImages.php",
                //url: "../../back/admin/content/updateImages.php",
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
});