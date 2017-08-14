$(document).ready(function(){
    loadImages();
    function loadImages(){
        params= {};
        params.action = "getContent";
        params.tableName = "home";
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
            url: "back/admin/content/getImages.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            //Tener la seccion a mostrar

            //cargo por sección, los ids
            for (var i in data[1]){
                var item = data[1][i];
                console.log(item)
            }

        }).error(function(error, textStatus){
            console.log(error);
        });
    }
    
})