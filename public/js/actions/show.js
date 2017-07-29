$(document).ready(function(){
	var language = "es";
	//Configurar lenguaje html
    params = {};
    params.action = "getContent";
    params.table = "home";
	//if()spanish if english
	$.ajax({
        //url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
        url: "../back/admin/content/adminContent.php",
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

            //ARRAY DE SECCIONES

            var a = 1;
            // for (a; a < array.length + 1; a++){
            //     showSection(data["title_section"+a]);
            // }
            showSection(data["title_section_1"], a);
        }
        $('body').fadeIn();

    })

    function showSection(section, a){
        if (section.visible == 0){
            $('.section_'+a).hide();
        }else{
            $('.section_'+a).show();
        }
    }
})