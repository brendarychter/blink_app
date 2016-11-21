$(document).ready(function(){
    params = {};
    params.action = "getContent";
    params.table = "works";
    $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
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


            //SECTION 2
            $('.title_section_2_spanish').text(unescape(data["title_section_2"].spanish));
            $('.title_section_2_english').text(unescape(data["title_section_2"].english));
            //DEFAULT
            $('.title_section_2').text(unescape(data["title_section_2"].spanish));

            $('.subtitle_section_2_spanish').text(unescape(data["subtitle_section_2"].spanish));
            $('.subtitle_section_2_english').text(unescape(data["subtitle_section_2"].english));
            //DEFAULT
            $('.subtitle_section_2').text(unescape(data["subtitle_section_2"].spanish));
            
            $('.button_section_2_spanish').text(unescape(data["button_section_2"].spanish));
            $('.button_section_2_english').text(unescape(data["button_section_2"].english));
            //DEFAULT
            $('.button_section_2').text(unescape(data["button_section_2"].spanish));


            //SECTION 3
            $('.title_section_3_spanish').text(unescape(data["title_section_3"].spanish));
            $('.title_section_3_english').text(unescape(data["title_section_3"].english));
            //DEFAULT
            $('.title_section_3').text(unescape(data["title_section_3"].spanish));

            $('.subtitle_section_3_spanish').text(unescape(data["subtitle_section_3"].spanish));
            $('.subtitle_section_3_english').text(unescape(data["subtitle_section_3"].english));
            //DEFAULT
            $('.subtitle_section_3').text(unescape(data["subtitle_section_3"].spanish));

            //SECTION 4
            $('.title_section_4_spanish').text(unescape(data["title_section_4"].spanish));
            $('.title_section_4_english').text(unescape(data["title_section_4"].english));
            //DEFAULT
            $('.title_section_4').text(unescape(data["title_section_4"].spanish));

            $('.subtitle_section_4_spanish').text(unescape(data["subtitle_section_4"].spanish));
            $('.subtitle_section_4_english').text(unescape(data["subtitle_section_4"].english));
            //DEFAULT
            $('.subtitle_section_4').text(unescape(data["subtitle_section_4"].spanish));
            
            $('.button_section_4_spanish').text(unescape(data["button_section_4"].spanish));
            $('.button_section_4_english').text(unescape(data["button_section_4"].english));
            //DEFAULT
            $('.button_section_4').text(unescape(data["button_section_4"].spanish));

            //SECTION 5
            $('.title_section_5_spanish').text(unescape(data["title_section_5"].spanish));
            $('.title_section_5_english').text(unescape(data["title_section_5"].english));
            //DEFAULT
            $('.title_section_5').text(unescape(data["title_section_5"].spanish));

            $('.subtitle_section_5_spanish').text(unescape(data["subtitle_section_5"].spanish));
            $('.subtitle_section_5_english').text(unescape(data["subtitle_section_5"].english));
            //DEFAULT
            $('.subtitle_section_5').text(unescape(data["subtitle_section_5"].spanish));
            
    }).error(function(error, textStatus){
        console.log(error, textStatus);
    });


    loadImages();
    function loadImages(){
        params= {};
        params.action = "getContent";
        params.tableName = "works";
        $.ajax({
            //url: "http://www.blinkapp.com.ar/back/admin/content/getImages.php",
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
                console.log(n)
                var img = data["works"][i];
                console.log(img.nombre)
                $('#img_'+n+'_section_works').attr("data-url", img.img);
                $('#img_'+n+'_section_works').prop("alt", img.nombre);
                $('#img_'+n+'_section_works').prop("title", img.nombre);
                $('#img_'+n+'_section_works').attr("src", "../../blink_app/uploads/" + img.img);

                $('#title_'+n+'_section_works').val(img.nombre);
                n++;
            }

        }).error(function(error, textStatus){
            console.log(error);
        });
    }

    loadFaq();
    function loadFaq(){
        params = {};
        params.action = "getContent";
        params.table = "faq";
        $.ajax({
                //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
                url: "../back/admin/content/adminContent.php",
                type: "POST",
                cache: false,
                data: params,
                dataType: "json"
            }).done(function( data ) {
                //HEADER
                $('.faq_title_header_spanish').text(unescape(data["title_header"].spanish));
                $('.faq_title_header_english').text(unescape(data["title_header"].english));
                //DEFAULT 
                $('.faq_title_header').text(unescape(data["title_header"].spanish));

                //SUBTITLE
                $('.faq_subtitle_header_spanish').text(unescape(data["subtitle_header"].spanish));
                $('.faq_subtitle_header_english').text(unescape(data["subtitle_header"].english));
                //DEFAULT
                $('.faq_subtitle_header').text(unescape(data["subtitle_header"].spanish));

            }).error(function(error, textStatus){
            console.log(error);
        });
    }

    loadTeam();
    function loadTeam(){
        params = {};
        params.action = "getContent";
        params.table = "team";
        $.ajax({
                //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
                url: "../back/admin/content/adminContent.php",
                type: "POST",
                cache: false,
                data: params,
                dataType: "json"
            }).done(function( data ) {
                //HEADER
                $('.team_title_header_spanish').text(unescape(data["title_header"].spanish));
                $('.team_title_header_english').text(unescape(data["title_header"].english));
                //DEFAULT 
                $('.team_title_header').text(unescape(data["title_header"].spanish));

                //SUBTITLE
                $('.team_subtitle_header_spanish').text(unescape(data["subtitle_header"].spanish));
                $('.team_subtitle_header_english').text(unescape(data["subtitle_header"].english));
                //DEFAULT
                $('.team_subtitle_header').text(unescape(data["subtitle_header"].spanish));

                //SUBTITLE
                $('.team_text_header_spanish').text(unescape(data["text_header"].spanish));
                $('.team_text_header_english').text(unescape(data["text_header"].english));
                //DEFAULT
                $('.team_text_header').text(unescape(data["text_header"].spanish));

            }).error(function(error, textStatus){
            console.log(error);
        });
    }

    loadDemo();
    function loadDemo(){
        params = {};
        params.action = "getContent";
        params.table = "demo";
        $.ajax({
                //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
                url: "../back/admin/content/adminContent.php",
                type: "POST",
                cache: false,
                data: params,
                dataType: "json"
            }).done(function( data ) {
                //HEADER
                $('.demo_title_header_spanish').text(unescape(data["title_header"].spanish));
                $('.demo_title_header_english').text(unescape(data["title_header"].english));
                //DEFAULT 
                $('.demo_title_header').text(unescape(data["title_header"].spanish));

                //SUBTITLE
                $('.demo_subtitle_header_spanish').text(unescape(data["subtitle_header"].spanish));
                $('.demo_subtitle_header_english').text(unescape(data["subtitle_header"].english));
                //DEFAULT
                $('.demo_subtitle_header').text(unescape(data["subtitle_header"].spanish));

                //SUBTITLE
                $('.demo_text_header_spanish').text(unescape(data["text_header"].spanish));
                $('.demo_text_header_english').text(unescape(data["text_header"].english));
                //DEFAULT
                $('.demo_text_header').text(unescape(data["text_header"].spanish));

            }).error(function(error, textStatus){
            console.log(error);
        });
    }
})  
