$(document).ready(function(){
	var language = "es";
	//Configurar lenguaje html
    params = {};
    params.action = "getContent";
	//if()spanish if english
	$.ajax({
        //url: "http://blinkapp.com.ar/back/user/adminUser.php",
        url: "back/admin/content/adminContent.php",
        type: "POST",
        data: params,
        cache: false,
        dataType: "json"
    }).done(function( data ) {
        console.log(data)
        language = "es";
    	if (language == "es"){
            /* SECTION 1 SPANISH */
            //Pregunto por uno de los items
            $('.section_1 a').text(unescape(data["section_section_1"].spanish));
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


            /* SECTION 3 SPANISH */

            /* SECTION 4 SPANISH */
            $('.button_section_4').text(unescape(data["button_section_4"].spanish));

    	}else{
    		$('.title_section_1').text(unescape(data["title_section_1"].english));
            $('.subtitle_section_1').text(unescape(data["subtitle_section_1"].english));
            $('.button_section_1').text(unescape(data["button_section_1"].english));

            $('.title_section_2').text(unescape(data["title_section_2"].english));
            $('.subtitle_section_2').text(unescape(data["subtitle_section_2"].english));
            $('.text_section_2').text(unescape(data["text_section_2"].english));
            $('.button_section_2').text(unescape(data["button_section_2"].english));

            $('.text_1_section_2').text(unescape(data["text_1_section_2"].english))
            $('.text_2_section_2').text(unescape(data["text_2_section_2"].english))
            $('.text_3_section_2').text(unescape(data["text_3_section_2"].english))
            $('.text_4_section_2').text(unescape(data["text_4_section_2"].english))
            
    	}
    }).error(function(error, textStatus){
        console.log(textStatus);
    });


    
})