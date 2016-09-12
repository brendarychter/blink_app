var username = localStorage.getItem("username");

$(document).ready(function(){

    var user = {};
    var id;

    $.ajaxSetup({cache: false})
    getSessionUser();

    getUserGroups();

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
        $.get('../back/user/getUserSession.php', function (data) {
            var user = JSON.parse(data);
            console.log(user);
            id = user.userID;
            $("#logo").append(user.username);
            $("#username-logged").val(user.username);
            $("#password-logged").val(user.password);
            $("#mail-logged").val(user.mail);
            $("#mobile-logged").val(user.phoneNumber);
        });
    }


    function getUserGroups(){
        params = {};
        params.action = "getGroups";
        params.userID = user.userID;
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
            $("#group-name").append(data.groupName);
            $("#last-edit").append(data.text);
        }).error(function(error, textStatus){
            console.log(error);
        });
    }
})