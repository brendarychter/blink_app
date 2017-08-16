$(document).ready(function(){
    loadImagesMenu("works");
    loadImagesMenu("home");
    function loadImagesMenu(table){
        params= {};
        params.action = "getContent";
        params.tableName = table;

        var url, urlImage;
        if (window.location.href.indexOf("content") > -1){
            //url = "../../back/admin/content/getImages.php";
            urlImage = "uploads/";
        }else{
            //url = "back/admin/content/getImages.php";
            //urlImage = "uploads/";
            urlImage = "../../../../uploads/";
        }
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
            url: url,
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            for (i in data[table]){
                var img = data[table][i];
                console.log(table)
                switch (table){
                    case "works":
                        $('.img_'+table).attr("data-url", img.img);
                        $('.img_'+table).prop("alt", img.nombre);
                        $('.img_'+table).prop("title", img.nombre);
                        var val = img.img;
                        $('#img_url_'+table).text(val.substr(val.indexOf("/") + 1));
                        $('.img_'+table).attr("src", urlImage + img.img);
                        $('#title_img_'+table).val(img.nombre);
                    break;
                    case "home":
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
})
