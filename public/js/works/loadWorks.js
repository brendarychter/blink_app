$(document).ready(function(){
    params = {};
    params.action = "getContent";
    params.table = "works";
    $.ajax({
            //url: "http://blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            console.log(data)
            // /*=============================================
            // =            Page 1 block            =
            // =============================================*/
            
            //PAGE
            $('.page_name_spanish').text(unescape(data["page_name"].spanish));
            $('.page_name_english').text(unescape(data["page_name"].english));
            
            //HEADER
            $('.title_header_spanish').text(unescape(data["title_header"].spanish));
            $('.title_header_english').text(unescape(data["title_header"].english));
            //DEFAULT 
            $('.title_header').text(unescape(data["title_header"].spanish));

            //SUBTITLE
            $('.subtitle_header_spanish').text(unescape(data["subtitle_header"].spanish));
            $('.subtitle_header_english').text(unescape(data["subtitle_header"].english));
            //DEFAULT
            $('.subtitle_header').text(unescape(data["subtitle_header"].spanish));

            //SECTION 1
            $('.title_section_1_spanish').text(unescape(data["title_section_1"].spanish));
            $('.title_section_1_english').text(unescape(data["title_section_1"].english));
            //DEFAULT
            $('.title_section_1').text(unescape(data["title_section_1"].spanish));

            $('.subtitle_section_1_spanish').text(unescape(data["subtitle_section_1"].spanish));
            $('.subtitle_section_1_english').text(unescape(data["subtitle_section_1"].english));
            //DEFAULT
            $('.subtitle_section_1').text(unescape(data["subtitle_section_1"].spanish));
            
            $('.button_1_section_1_spanish').text(unescape(data["button_1_section_1"].spanish));
            $('.button_1_section_1_english').text(unescape(data["button_1_section_1"].english));
            //DEFAULT
            $('.button_1_section_1').text(unescape(data["button_1_section_1"].spanish));

            $('.button_2_section_1_spanish').text(unescape(data["button_2_section_1"].spanish));
            $('.button_2_section_1_english').text(unescape(data["button_2_section_1"].english));
            //DEFAULT
            $('.button_2_section_1').text(unescape(data["button_2_section_1"].spanish));
    }).error(function(error, textStatus){
        console.log(error, textStatus);
    });


    loadImages();
    function loadImages(){
        params= {};
        params.action = "getContent";
        params.tableName = "works";
        $.ajax({
            //url: "http://blinkapp.com.ar/back/admin/content/adminContent.php",
            url: "../back/admin/content/getImages.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function( data ) {
            //Tener la seccion a mostrar

            //cargo por sección, los ids
            console.log(data["works"]);
            var n = 1;
            for (i in data["works"]){
                console.log(i)
                var img = data["works"][i];
                $('#img_'+n+'_section_works').attr("data-url", img.img);
                $('#img_'+n+'_section_works').prop("alt", img.nombre);
                $('#img_'+n+'_section_works').prop("title", img.nombre);
                $('#img_'+n+'_section_works').attr("src", img.img);

                $('#title_1_section_works').val(img.nombre);
                n++;
            }

        }).error(function(error, textStatus){
            console.log(error);
        });
    }
})
