$(document).ready(function(){
	var language = localStorage.getItem("language");
	getPartialContent("users_sign_in");

    function getPartialContent(table){
        params = {};
        params.action = "getContent";
        params.table = table;
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/admin/content/adminContent.php",
            //url: "../back/admin/content/adminContent.php",
            type: "POST",
            cache: false,
            data: params,
            dataType: "json"
        }).done(function (data) {
            for (var i in data){
                if (i == "sign_in_tab_title"){
                    $('.'+i).text(unescape(data[i][language]));
                }else if (i == "sign_in_button"){
                    $('.'+i).val(unescape(data[i][language]));
                }else{
                    $('.'+i).attr("placeholder", unescape(data[i][language]));
                }
                $('.bck').fadeOut("slow");
            }
        }).error(function (error){
            console.log(error.statusText);
        });
    }
});