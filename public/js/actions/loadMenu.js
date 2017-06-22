$(document).ready(function(){
    params = {};
    params.action = "getMenu";
    params.table = "menu";
    var urlAdmin;
    if (window.location.href.indexOf("content") > -1){
        urlAdmin = "../back/admin/content/adminContent.php";
    }else{
        urlAdmin = "back/admin/content/adminContent.php";
    }
    $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: urlAdmin,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            // /*=============================================
            // =            Page 1 block            =
            // =============================================*/
            
            //PAGE
            for (var i in data){
                if(data[i].visible == 1){
                    $('.'+i).show();
                    $('.show-page:checkbox[value='+i+']').attr('checked', true);
                }else{
                    $('.'+i).hide();
                    $('.show-page:checkbox[value='+i+']').attr('checked', false);
                }
                $('.'+i+'_spanish').text(unescape(data[i].spanish));
                $('.'+i+'_english').text(unescape(data[i].english));
                $('.'+i).text(unescape(data[i].spanish));

            }
            
    }).error(function(error, textStatus){
        console.log(error, textStatus);
    });


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


    loadImagesMenu("menu");
    loadImagesMenu("works");
    loadImagesMenu("home");
    function loadImagesMenu(table){
        params= {};
        params.action = "getContent";
        params.tableName = table;

        var url, urlImage;
        if (window.location.href.indexOf("content") > -1){
            url = "../back/admin/content/getImages.php";
            urlImage = "../../uploads/";
        }else{
            url = "back/admin/content/getImages.php";
            urlImage = "../../uploads/";
        }
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
            url: url,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            //Tener la seccion a mostrar
            /* FOR LOCAL UPLOADS USE ../../blink_app/uploads/ */
            /* FOR PROD UPLOADS USE urlImage */
            
            //cargo por sección, los ids
            for (i in data[table]){
                console.log(data[table])
                var img = data[table][i];
                console.log(table)
                switch (table){
                    case "menu":
                        $('.img_'+table).attr("data-url", img.img);
                        $('.img_'+table).prop("alt", img.nombre);
                        $('.img_'+table).prop("title", img.nombre);
                        var val = img.img;
                        $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                        $('.img_'+table).attr("src", urlImage + img.img);
                        $('.img_icon_'+table).attr("href", urlImage + img.img);
                        $('#title_img_'+table).val(img.nombre);
                    break;
                    case "works":
                        console.log("es works!")
                        $('.img_'+table).attr("data-url", img.img);
                        $('.img_'+table).prop("alt", img.nombre);
                        $('.img_'+table).prop("title", img.nombre);
                        var val = img.img;
                        $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                        $('.img_'+table).attr("src", urlImage + img.img);
                        $('#title_img_'+table).val(img.nombre);
                    break;
                    case "home":
                        console.log("entro home")
                        $('.img_'+table).css('background-image', 'url(' + urlImage +  img.img + ')');
                        //bug fixin
                        $('#img_'+table).css('background-image', 'url()');
                        $('.img_'+table).attr("data-url", img.img);

                        var val = img.img;
                        $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                        $('.img_'+table).attr("src", urlImage + img.img);
                        $('#title_img_'+table).val(img.nombre);
                    break;
                }
                
            }

        }).error(function(error, textStatus){
            console.log(error);
        });
    }



    $('.save-img').on("click", function(){
        var table = $(this).attr("data-table");
        var id_name = 'img_'+table;
        console.log("id_name " + id_name)
        var url = $('#img_url_'+table).text();
        var title = $('#title_img_'+table).val().toString();

        var form_data = new FormData();
        var file_data = $('.img_'+table).prop('files')[0];
        form_data.append('imagen', file_data);
        form_data.append('id_name', id_name);
        form_data.append('section', 0);
        form_data.append('table', table);
        form_data.append('submit', "submit");
        form_data.append('titulo', title);
        console.log(title)

        if (url == null || url ==undefined || url ==""){
            console.log("nueva");
            $.ajax({
                //url: "http://www.blinkapp.com.ar/back/admin/content/loadImages.php",
                url: "../back/admin/content/loadImages.php",
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
                url: "../back/admin/content/updateImages.php",
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
})
