$(document).ready(function(){

    var user = {};
    var id;

    $.ajaxSetup({cache: false})
    getSessionUser();

    $('#group-selection').on('click', function(){
        $('.main').fadeOut(function(){
            $('.selected-group').fadeIn();
        });
        

    })

    $("#log-out").on("click", function(){
        console.log("logged out")
        destroySessionUser();
    });

    $("#config-user").on("click", function(){
        $("#grupos").hide();
        $("#ajustes").show();
        //mostrar data en el form
    })

    $("#my-groups").on("click", function(){
        $("#grupos").show();
        $("#ajustes").hide();
    })

    //UPDATE-MODIFY USER DATA
    $("#modify-user").on("click", function(){
        var params = {};
        params.userID = id;
        params.username = $("#username-logged").val();
        params.password = $("#password-logged").val();
        params.mailUpdate = $("#mail-logged").val();
        params.phoneNumberUpdate = $("#mobile-logged").val();
        params.action = "updateUser";
        $.ajax({
            url: "../back/user/adminUser.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
            getSessionUser();
        }).error(function(error, textStatus){
            console.log("No pudo modificar: " + textStatus);
        });
    })

    //UPDATE-MODIFY USER DATA
    $("#delete-user").on("click", function(){
        var params = {};
        params.userID = id;
        params.action = "deleteUser";
        $.ajax({
            url: "../back/user/adminUser.php",
            type: "POST",
            data: params,
            cache: false
        }).done(function( data ) {
            console.log(typeof data);
            console.log( data);
            if (data == "true"){
                console.log("removed");
            }else{
                console.log("not removed")
            }
            destroySessionUser();
            window.location.href = "log_in.php";
        }).error(function(error, textStatus){
            console.log("No pudo borrar: " + textStatus);
        });
    })

    
    $(".menu-item").on("click", function(){
        $(".activo").removeClass("activo");
        $(this).addClass("activo");
    })

    function destroySessionUser(){
        $.ajaxSetup({cache: false})
        $.get('../back/user/destroyUserSession.php', function (data) {
            window.location.href = "log_in.php";
        });
    }

    function getSessionUser(){

        /**
        
            TODO:
            - AJAX TYPE GET WITH PARAMS
            - ONE FILE FOR GET AND DESTROY USER SESSION
        
         */
        
        $.get('../back/user/getUserSession.php', function (data) {
            var user = JSON.parse(data);
            user.userID = user.userID;
            $("#userName").append(user.username);
            $("#username-logged").val(user.username);
            $("#password-logged").val(user.password);
            $("#mail-logged").val(user.mail);
            $("#mobile-logged").val(user.phoneNumber);
            getUserGroups(user);
        });
    }


    function getUserGroups(user){
        params = {};
        params.action = "getGroups";
        params.userID = user.userID;
        console.log(user);
        $.ajax({
            //http://blinkapp.com.ar/back/user/adminUser.php
            url: "../back/groups/adminUserGroups.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
            //LISTA DE GRUPOS EN LA VISTA
            // var myGroups = $('.my-groups');
            // console.log(data.length)
            // for (var i = 0; i < data.length; i++){
            //     $(".module-by-group").clone().appendTo(myGroups);
                
            //     console.log(data[i].groupName)
            // }
            for (var i in data){
                var group = data[i];
                console.log(group.groupName);

                var elem = $('#module-by-group').clone();
                elem.attr("id", group.groupName);

                console.log(elem);

                elem.appendTo($('.my-groups'));
            }
                $('#P13N.group-name').append("holas");


            var nuevogrupo = $('.my-groups').clone();
            $(".group-name",nuevogrupo).append(data.groupName);
            $("#last-edit").append(data.text);
        }).error(function(error, textStatus){
            console.log(error);
        });
    }
})