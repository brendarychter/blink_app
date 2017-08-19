$(document).ready(function(){

    var USUARIO = {};
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
            url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
            //url: "../back/user/adminUser.php",
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
            url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
            //url: "../back/user/adminUser.php",
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
            window.location.href = "login.php";
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
            window.location.href = "login.php";
        });
    }

    function getSessionUser(){
        $.get('http://www.blinkapp.com.ar/back/user/getUserSession.php', function (data) {
        //$.get('../back/user/getUserSession.php', function (data) {
            var user = JSON.parse(data);
            console.log(data);
            user.userID = user.userID;
            $("#userName").append(user.username);
            $("#username-logged").val(user.username);
            $("#password-logged").val(user.password);
            $("#mail-logged").val(user.mail);
            $("#mobile-logged").val(user.phoneNumber);
            getUserGroups(user);
            USUARIO.userID = user.userID;
        });
    }


    function getUserGroups(user){
        params = {};
        params.action = "getGroups";
        params.userID = user.userID;
        console.log(user);
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
            //url: "../back/groups/adminUserGroups.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(typeof data);
            if(data.length == 0){
                //No tiene grupos asociados
                $('.no-groups').show();
                $('.action-todo-groups').text("Todavíaa no tenés grupos");
            }else{
                //Tiene grupos asociados
                $('.no-groups').hide();
                $('.main').show();
                var groupList = $('.groups-list');
                var eachGroup = $('#each-group');
                console.log(data.length)
                for (var i = 0; i < data.length; i++){
                    var group = data[i];
                    var elem = eachGroup.clone();
                    elem.attr("id", "group-"+group.idGroup);
                    elem.addClass("group-"+group.groupName);
                    elem.appendTo(groupList);
                    $("#group-"+group.idGroup+" .group-name").append(group.groupName);
                }
                //Oculto el base
                $('#each-group').hide();
            }
        }).error(function(error, textStatus){
            console.log(error);
        });
    }

    $(".mis-grupos").on('click', function(){
        $('.menu-side').removeClass("active");
        $(this).addClass("active");
        $('.no-groups').fadeOut(150, function(){
            $('.main').fadeIn(150);
        });
    })
    $('.crear-grupo').on('click', function(){
        $('.menu-side').removeClass("active");
        $(this).addClass("active");
        
        $('.main').fadeOut(150, function(){
            $('.no-groups').fadeIn(150);
        });
    })

    $('#create-group').on('click', function(){
        $('.info-no-groups').fadeOut(150, function(){
            $('.form-create-group').fadeIn(150);
            $('.mis-grupos').removeClass("active", 400);
            $('.crear-grupo').addClass("active", 400);
            paramsUsers = {};
            paramsUsers.action = "getAllUsers";
            paramsUsers.username = "brenda";
            paramsUsers.password = "1234";
            $.ajax({
                url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
                //url: "../back/user/adminUser.php",
                type: "POST",
                data: paramsUsers,
                cache: false,
                dataType: "json"
            }).done(function( data ) {
                console.log(data);
            }).error(function(error, textStatus){
                console.log(error);
            });
        });
    })

    $('#add-group').on('click', function(){
        params = {};
        params.action = "createGroup";
        params.groupName = $('#group-name').val();
        params.userID = USUARIO.userID;
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/groups/adminUserGroups.php",
            //url: "../back/groups/adminUserGroups.php",
            type: "POST",
            data: params,
            cache: false,
            dataType: "json"
        }).done(function( data ) {
            console.log(data);
        }).error(function(error, textStatus){
            console.log(textStatus);
        });
    })
})