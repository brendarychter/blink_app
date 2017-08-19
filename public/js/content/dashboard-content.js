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
                console.log(img)
                var val = img.img;
                $('.img_'+table).css('background-image', 'url(' + urlImage +  img.img + ')');
                $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                $('.img_'+table).attr("data-url", img.img);
                console.log(img.nombre_es)
                $('#title_img_'+table+'_es').val(img.nombre_es);
                $('#title_img_'+table+'_en').val(img.nombre_en);
            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }
});