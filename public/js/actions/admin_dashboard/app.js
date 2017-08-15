$(document).ready(function(){
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
            var active = false;
            var action;
    		for (var n in data[i]){
    			if (n !== "userID"){
                    if (n == "active"){
                        if (data[i][n] == 1){
                            active = true;
                            $('#user-'+ data[i].userID).append('<td val='+data[i][n]+'>Activo</td>')
                        }else if(data[i][n] == 0){
                            active = false;
                            $('#user-'+ data[i].userID).append('<td val='+data[i][n]+'>Inactivo</td>')
                        }
                    }else{
                        $('#user-'+ data[i].userID).append('<td>'+data[i][n]+'</td>');
                    }
    			}
                //agregar el boton de activar y desactivar
    		}
            if (!active){
                action = "Activar";
            }else{
                action = "Desactivar";
            }
            $('#user-'+ data[i].userID).append('<td><input type="button" class="changeState" value="'+action+'" id="user-'+data[i].userID+'" /></td>')
    	}
    }).error(function(error, textStatus){
        console.log(error.responseText);
    });
    return false;

    $('.changeState').on('click', function(){
        console.log("hola");
    })
})