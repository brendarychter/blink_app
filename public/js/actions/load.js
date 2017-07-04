$(document).ready(function(){
	var language = "es";
	//Configurar lenguaje html
    
    $('#english.language-selection').on("click", function(){

    })
    
    /*Filtrar en que pagina esta ubicado*/
    params = {};
    params.action = "getContent";
    params.table = "home";
	$.ajax({
        //url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
        url: "back/admin/content/adminContent.php",
        type: "POST",
        data: params,
        cache: false,
        dataType: "json"
    }).done(function( data ) {
        console.log(data);
    	if (language == "es"){
            /* SECTION 1 SPANISH */
            //Pregunto por uno de los items
            $('.title_section_1').text(unescape(data["title_section_1"].spanish));
            $('.subtitle_section_1').text(unescape(data["subtitle_section_1"].spanish));
            $('.button_section_1').text(unescape(data["button_section_1"].spanish));


            /* SECTION 2 SPANISH */
            
            $('.title_section_2').text(unescape(data["title_section_2"].spanish));
            $('.subtitle_section_2').text(unescape(data["subtitle_section_2"].spanish));
            $('.text_section_2').text(unescape(data["text_section_2"].spanish));
            $('.button_section_2').text(unescape(data["button_section_2"].spanish));

            $('.text_1_section_2').text(unescape(data["text_1_section_2"].spanish))
            $('.text_2_section_2').text(unescape(data["text_2_section_2"].spanish))
            $('.text_3_section_2').text(unescape(data["text_3_section_2"].spanish))
            $('.text_4_section_2').text(unescape(data["text_4_section_2"].spanish))


            /* SECTION 4 SPANISH */
            $('.button_section_4').text(unescape(data["button_section_4"].spanish));
            $('.text_section_4').text(unescape(data["text_section_4"].spanish));
            $('.title_section_4').text(unescape(data["title_section_4"].spanish));

            /* SECTION 5 SPANISH */
            $('.button_section_5').text(unescape(data["button_section_5"].spanish));
            $('.title_section_5').text(unescape(data["title_section_5"].spanish));
            $('.text_1_section_5').attr("placeholder", unescape(data["text_1_section_5"].spanish));
            $('.text_2_section_5').attr("placeholder", unescape(data["text_2_section_5"].spanish));
            $('.text_3_section_5').attr("placeholder", unescape(data["text_3_section_5"].spanish));
            $('.text_4_section_5').attr("placeholder", unescape(data["text_4_section_5"].spanish));


            console.log(data["title_section_5"].spanish)
    	}
    }).error(function(error, textStatus){
        console.log(textStatus);
    });


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