$(document).ready(function(){
	var language = localStorage.getItem("language");
	getPartialContent("team");

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
                if (i.indexOf("linkedin") > -1){
                    $('.'+i).attr("href", unescape(data[i][language]));
                }else{
                    $('.'+i).text(unescape(data[i][language]));
                }
            }
        }).error(function (error){
            console.log(error.statusText);
        });
    }
});