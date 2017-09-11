$(document).ready(function(){
    updateUsersTable();
    
    function updateUsersTable(){
        params = {};
        params.action = "getAllUsers";
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
            //url: "../../back/user/adminUser.php",
            type: "POST",
            dataType: "json",
            data: params
        }).done(function( data ) {
            table = $('.contact-users');
            for (var i in data){
                table.append('<tr id="user-'+ data[i].userID+'"></tr>');
                var active;
                var action;
                for (var n in data[i]){
                    if (n !== "userID"){
                        if (n == "active"){
                            if (data[i][n] == 1){
                                active = 1;
                                $('#user-'+ data[i].userID).append('<td val='+data[i][n]+'>Activo</td>')
                            }else if(data[i][n] == 0){
                                active = 0;
                                $('#user-'+ data[i].userID).append('<td val='+data[i][n]+'>Inactivo</td>')
                            }
                        }else{
                            if (n == "photo"){
                                if (data[i].photo != ""){
                                    $('#user-'+ data[i].userID).append('<td><img style="width:30px; height: 30px" src="'+data[i][n]+'"/></td>');
                                }else{
                                    $('#user-'+ data[i].userID).append('<td><img style="width:30px; height: 30px" src="../../public/img/default_user.svg"/></td>');
                                }
                            }else{
                                $('#user-'+ data[i].userID).append('<td>'+data[i][n]+'</td>');
                            }
                        }
                    } 
                }
                if (active == 0){
                    action = "Activar";
                    statusBtn = "btn-success";
                }else{
                    action = "Desactivar";
                    statusBtn = "btn-warning";
                }
                $('#user-'+ data[i].userID).append('<td><button id="'+data[i].userID+'" class="changeState btn '+statusBtn+' btn-md" type="submit" name="submit" active="'+active+'">'+action+'</button></td>')
            }
        }).error(function(error, textStatus){
            console.log(error.responseText);
        });
        return false;        
    }

    $(document).on("click", ".changeState", function(){
        params = {};
        params.action = "activateUser";
        params.id = this.id;
        if ($(this).attr("active") == 0){
            params.status = 1;
        } else{
            params.status = 0;
        }
        $.ajax({
            url: "../../back/user/adminUser.php",
            type: "POST",
            dataType: "json",
            data: params
        }).done(function( data ) {
            $('.contact-users > tbody').empty();
            updateUsersTable();
        }).error(function(error, textStatus){
            console.log(error.responseText);
        });
    })

    $('.create-user').on("click", function(){
        $('.signInUser').show();
    })


    $('.close-modal').on("click", function(){
        $('.signInUser').hide();
    })

    $(function () {

        $('#signin-user-form').validator();

        $('#signin-user-form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var lan = localStorage.getItem("language");
                var today = new Date();
                var date_time = today.getDate() + '/' + (today.getMonth()+1) + '/' + today.getFullYear() + '. ' + today.getHours() + ":" + today.getMinutes();
                $.ajax({
                    type: "POST",
                    url: "http://www.blinkapp.com.ar/back/user/adminUser.php",
                    //url: "../../back/user/adminUser.php",
                    data: $(this).serialize() + '&action=createNewUser' + '&datetime=' + date_time.toString() + '&lan=' + lan
                }).done(function( data ) {
                    console.log(data)
                    var data = JSON.parse(data);
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {

                        grecaptcha.reset();
                        $('#signin-user-form').find('.messages').html(alertBox);
                        $('#signin-user-form')[0].reset();
                        $('.messages').show();

                        setTimeout(function(){
                            $('.messages').fadeOut('slow');
                        }, 2000);
                        if (data.type == "success"){
                            $('.signInUser').hide();
                            $('.contact-users > tbody').empty();
                            updateUsersTable();
                        }
                    }
                }).error(function(error, textStatus){
                    console.log(error);
                });
                return false;
            }
        })
    });


    function getMessagesFromGroups(){
        params = {};
        var content = $('#content-groups');
        content.empty();
        $.ajax({
            url: "http://www.blinkapp.com.ar/back/admin/getAllGroups.php",
            //url: "../../back/admin/getAllGroups.php",
            type: "POST",
            dataType: "json",
            data: params
        }).done(function( data ) {
            //por cada grupo una tabla. 3 fors
            

            var array = {};
            for (var i in data) {
                group = data[i];
                if (array[group.groupName] == undefined) {
                    array[group.groupName] = [];
                }
                array[group.groupName].push(group);
            }
            console.log(array);

            for (var a in array){
                //console.log(a);
                $('#groups-conv-'+a).empty();
                content.append('Grupo: <span style="text-transform: uppercase; letter-spacing: 1px; font-weight: bold; font-size: 15px; margin: 4px; background-color: rgba(254, 209, 54, 0.53); padding: 4px;"> ' + a + '</span>')
                var startTable = '<table style="margin-bottom: 20px; margin-top: 25px;" id="groups-conv-'+a+'"><thead><tr><th>Foto</th><th>Usuario</th><th>Mail</th><th>Mensaje</th><th>Hora</th></tr></thead><tbody class="table-groups">';
                content.append(startTable);

                
                for (var n in array[a]){
                    $('#groups-conv-'+a).append('<tr id="group-' + array[a][n].idText + '"></tr>');
                    if (array[a][n].photo == ""){
                        array[a][n].photo = '../../public/img/default_user.svg'
                    }
                    $('#group-'+ array[a][n].idText).append('<td><img style="width:30px; height: 30px" src="'+array[a][n].photo+'"></td>');
                    $('#group-'+ array[a][n].idText).append('<td>'+array[a][n].username+'</td>');
                    $('#group-'+ array[a][n].idText).append('<td>'+array[a][n].mail+'</td>');
                    $('#group-'+ array[a][n].idText).append('<td>'+unescape(array[a][n].texto)+'</td>');
                    $('#group-'+ array[a][n].idText).append('<td>'+array[a][n].datetimeText+'</td>');

                }
                var endTable = '</tbody></table>';
                content.append(endTable)
            }


        }).error(function(error, textStatus){
            console.log(error.responseText);
        });
        return false;
    }

    $('#show-users-app').on("click", function(){
        $('.actions-app').removeClass("active-app-content");
        $(this).addClass("active-app-content");
        $('#content-users').fadeIn("slow", function(){
            $('#content-groups').fadeOut();
        });
    })

    $('#content-groups').hide();

    $('#show-groups-app').on("click", function(){
        $('.actions-app').removeClass("active-app-content");
        $(this).addClass("active-app-content");
        $('#content-groups').fadeIn("slow", function(){
            $('#content-users').fadeOut();
        });

        getMessagesFromGroups();
    })
})



    