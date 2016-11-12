$(document).ready(function(){

    var userAdmin = {};

    $.ajaxSetup({cache: false})
    getSessionAdminUser();

    toggleTabs();
    populateLabels();

    function getSessionAdminUser(){
    	console.log("entro")

      $.get('../../back/admin/users/getUserAdminSession.php', function (data) {
          userAdmin = JSON.parse(data);
          $("#admin-logged").append(userAdmin.username);
      });
    }

    function populateLabels(){
    params= {};
    params.action = "getContent";
    $.ajax({
        url: "../../back/admin/content/adminContent.php",
        type: "POST",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function( data ) {
        $('.titulo-spanish').append(data["title"].spanish);
        $('.titulo-english').append(data["title"].english);
    }).error(function(error, textStatus){
        console.log(error);
    });
    }

    function toggleTabs(){
    //borrar todas las que están en el dashboard de pestañas
        $('.team-admin').hide();
        $(".toggle-nav-admin").click(function() {
            // remove classes from all
            $(".toggle-nav-admin").css("backgroundColor", "#fff");
            $(".toggle-nav-admin").removeClass("active");
            $(".tab-admin-page .admin-nav").hide();
            // add class to the one we clicked
            $(this).addClass("active");
            $(this).css("backgroundColor", "#ccc");
            $(".tab-admin-page ." + $(this).attr('id')).show();
        });
    }


    var switchToInput = function () {
        var $input = $("<textarea>", {
            val: $(this).text(),
            type: "text"
        });
        $input.addClass("editable-text");
        $(this).replaceWith($input);
        $input.on("blur", switchToSpan);
        $input.attr("old-value", $(this).text());
        console.log($input);
        //console.log($(this).text());
        $input.select();
        $input.css("cursor", "text");
        $input.css("resize", "none");
    };
    var switchToSpan = function () {
        var $span = $("<span>", {
            text: $(this).val()
        });
        $span.addClass("editable-text");
        var newValue = $(this).val();
        var oldValue = $(this).attr('old-value')
        params= {};
        params.action = "modifyContent";
        params.newValue = newValue;
        params.oldValue = oldValue;
        if (newValue !== oldValue){
            console.log("insert");
            $.ajax({
                url: "../../back/admin/content/adminContent.php",
                type: "POST",
                data: params
            }).done(function( data ) {
              console.log(data)
            }).error(function(error, textStatus){
                console.log(error);
            });
        }
        $(this).replaceWith($span);
        //agregar un atributo al input y comparar. si son distintos, escribo en la base. validacion desde javascript. green border
        $span.on("click", switchToInput);
    }
    $(".editable-text").on("click", switchToInput);
})