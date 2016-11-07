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
    	if (language == "es"){
    		$('.intro-heading').text(data["title"].spanish);
    		$('.intro-lead-in').text(data["subtitle"].spanish);
    	}else{
    		$('.intro-heading').text(data["title"].english);
    		$('.intro-lead-in').text(data["subtitle"].english);
    	}
    }).error(function(error, textStatus){
        console.log(textStatus);
    });
})