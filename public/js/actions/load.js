$(document).ready(function(){
	console.log("load first");
	//if()spanish if english
	$.ajax({
    //     //http://blinkapp.com.ar/back/user/adminUser.php
        url: "back/admin/content/Content.php",
        type: "POST",
        cache: false,
        dataType: "json"
    }).done(function( data ) {
        console.log(data);
    }).error(function(error, textStatus){
        console.log(error);
    });
})