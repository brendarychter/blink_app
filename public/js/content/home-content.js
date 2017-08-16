$(document).ready(function(){
	var language = localStorage.getItem("language");
	getPartialContent("home");

    function getPartialContent(table){
        params = {};
        params.action = "getContent";
        params.table = table;
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            //url: "back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            for (var i in data){
                $('.'+i).text(unescape(data[i][language]));
                if (data[i].section == 5){
                    $('.'+i).attr("placeholder", unescape(data[i][language]));
                    if (i == "button_section_5"){
                        $('.'+i).attr("value", unescape(data[i][language]));
                    }
                }
            }
        }).error(function (error){
            console.log(error);
        });
    }
});