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
    		$('.title_section_1').text(unescape(data["title_section_1"].spanish));
            $('.subtitle_section_1').text(unescape(data["subtitle_section_1"].spanish));
    		$('.button_section_1').text(unescape(data["button_section_1"].spanish));

            $('.title_section_2').text(unescape(data["title_section_2"].spanish));
            $('.subtitle_section_2').text(unescape(data["subtitle_section_2"].spanish));
            $('.text_section_2').text(unescape(data["text_section_2"].spanish));
            $('.button_section_2').text(unescape(data["button_section_2"].spanish));
    	}else{
    		$('.title_section_1').text(unescape(data["title_section_1"].english));
            $('.subtitle_section_1').text(unescape(data["subtitle_section_1"].english));
            $('.button_section_1').text(unescape(data["button_section_1"].english));

            $('.title_section_2').text(unescape(data["title_section_2"].english));
            $('.subtitle_section_2').text(unescape(data["subtitle_section_2"].english));
            $('.text_section_2').text(unescape(data["text_section_2"].english));
            $('.button_section_2').text(unescape(data["button_section_2"].english));
            
    	}
    }).error(function(error, textStatus){
        console.log(textStatus);
    });
})