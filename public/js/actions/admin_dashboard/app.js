$(document).ready(function(){
    updateUsersTable();
    function updateUsersTable(){
        params = {};
        params.action = "getAllUsers";
        $.ajax({
            url: "../../back/user/adminUser.php",
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
                            $('#user-'+ data[i].userID).append('<td>'+data[i][n]+'</td>');
                        }
                    }
                    //agregar el boton de activar y desactivar
                }
                if (active == 0){
                    action = "Activar";
                    statusBtn = "btn-success";
                }else{
                    action = "Desactivar";
                    statusBtn = "btn-warning";
                }
                console.log(active)
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
    console.log(params)
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

})



    