$(document).ready(function(){
	var language = localStorage.getItem("language");
	getPartialContent("home");

    function getPartialContent(table){
        params = {};
        params.action = "getContent";
        params.table = table;
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            for (var i in data){
                $('.'+i).text(unescape(data[i][language]));
                if (data[i].section == 5){
                    $('.'+i).attr("placeholder", unescape(data[i][language]));
                    if (i == "button_section_5" || i == "home_button_section_5"){
                        $('.'+i).attr("value", unescape(data[i][language]));
                    }
                }
                $('.bck').fadeOut("slow");
            }
        }).error(function (error){
            console.log(error);
        });
    }


    //Cargo imagenes de la seccion de home
    var lan = localStorage.getItem("language");
    loadHome("home");
    function loadHome(table){
        console.log(lan)
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
                if (img.id_name=="img_home_1"){
                    $('.img_'+table+'_'+img.position).css('background-image', 'url(' + urlImage +  img.img + ')');
                }else{
                    $('.img_'+table+'_'+img.position).attr("src", urlImage + img.img);
                }
                if (lan == "spanish"){
                    $('.img_'+table+'_'+img.position).attr("title", unescape(img.nombre_es));
                    $('.img_'+table+'_'+img.position).attr("alt", unescape(img.nombre_es));
                }else if (lan == "english"){
                    $('.img_'+table+'_'+img.position).attr("title", unescape(img.nombre_en));
                    $('.img_'+table+'_'+img.position).attr("alt", unescape(img.nombre_en));
                }

            }
        }).error(function(error, textStatus){
            console.log(error.statusText);
        });
    }
});