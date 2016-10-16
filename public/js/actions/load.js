$(document).ready(function(){
	console.log("load first");
	var language = "es";
	//Configurar lenguaje html

	//if()spanish if english
	$.ajax({
    //     //http://blinkapp.com.ar/back/user/adminUser.php
        url: "back/admin/content/Content.php",
        type: "POST",
        cache: false,
        dataType: "json"
    }).done(function( data ) {
    	if (language == "es"){
    		$('.intro-heading').append(data["title"].spanish);
    		$('.intro-lead-in').append(data["subtitle"].spanish);
    	}else{
    		$('.intro-heading').append(data["title"].english);
    		$('.intro-lead-in').append(data["subtitle"].english);
    	}
    }).error(function(error, textStatus){
        console.log(error);
    });
})