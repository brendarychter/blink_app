$(document).ready(function(){
	var language = "es";
	//Configurar lenguaje html
    params = {};
    params.action = "getContent";
	//if()spanish if english
	$.ajax({
    //     //http://blinkapp.com.ar/back/user/adminUser.php
        url: "back/admin/content/adminContent.php",
        type: "POST",
        data: params,
        cache: false,
        dataType: "json"
    }).done(function( data ) {
        console.log(data)
        language="en";
    	if (language == "es"){
    		$('.title_section_1').text(data["title_section_1"].spanish);
            $('.subtitle_section_1').text(data["subtitle_section_1"].spanish);
    		$('.button_section_1').text(data["button_section_1"].spanish);
    	}else{
    		$('.title_section_1').text(data["title_section_1"].english);
            $('.subtitle_section_1').text(data["subtitle_section_1"].english);
            $('.button_section_1').text(data["button_section_1"].english);
    	}
    }).error(function(error, textStatus){
        console.log(textStatus);
    });
})