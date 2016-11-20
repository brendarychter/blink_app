$(document).ready(function(){
	var language = "es";
	//Configurar lenguaje html
    params = {};
    params.action = "getContent";
    params.table = "home";
	//if()spanish if english
	$.ajax({
        //url: "http://blinkapp.com.ar/back/user/adminUser.php",
        url: "back/admin/content/adminContent.php",
        type: "POST",
        data: params,
        cache: false,
        dataType: "json"
    }).done(function( data ) {
        language = "es";
        if (language == "es"){
            showSection(data["title_section_1"], 1);
            showSection(data["text_1_section_2"], 2);
            showSection(data["text_section_4"], 4);
            showSection(data["title_section_5"], 5);
        }
        $('.page-section-home').fadeIn();

    })

    function showSection(section, a){
        if (section.visible == 0){
            $('.section_'+a).hide();
        }else{
            $('.section_'+a).show();
        }
    }
})