$(document).ready(function(){

    var userAdmin = {};

    $.ajaxSetup({cache: false})
    getSessionAdminUser();


    function getSessionAdminUser(){
    	console.log("entro")
    
        $.get('../../back/admin/users/getUserAdminSession.php', function (data) {
            userAdmin = JSON.parse(data);
            $("#admin-logged").append(userAdmin.username);
        });
    }


    function editIndex(){
    	
    }
})