$(document).ready(function(){
	var language = localStorage.getItem("language");
	getPartialContent("demo");

    function getPartialContent(table){
        params = {};
        params.action = "getContent";
        params.table = table;
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            //url: "../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            console.log(data)
            for (var i in data){
                $('.'+i).text(unescape(data[i][language]));
            }
            $('.bck').fadeOut("slow");
        }).error(function (error){
            console.log(error.statusText);
        });
    }

    //Cargo imagenes de la seccion de demo
    loadDemo("demo");
    function loadDemo(table){
        params= {};
        params.action = "getContent";
        params.tableName = table;

        var url, urlImage;
        if (window.location.href.indexOf("content") > -1){
            url = "../back/admin/content/getImages.php";
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
                $('.img_'+table+'_'+img.position).attr("src", urlImage + img.img);
                if (language == "spanish"){
                    $('.img_'+table+'_'+img.position).attr("title", unescape(img.nombre_es));
                    $('.img_'+table+'_'+img.position).attr("alt", unescape(img.nombre_es));
                }else if (language == "english"){
                    $('.img_'+table+'_'+img.position).attr("title", unescape(img.nombre_en));
                    $('.img_'+table+'_'+img.position).attr("alt", unescape(img.nombre_en));
                }

            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }
});