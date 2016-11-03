$(document).ready(function(){

    var userAdmin = {};

    $.ajaxSetup({cache: false})
    getSessionAdminUser();



    $(".toggle-nav-admin").click(function() {
      // remove classes from all
      $(".toggle-nav-admin").removeClass("active");
      $(".tab-admin-page .admin-nav").hide();
      // add class to the one we clicked
      $(this).addClass("active");
      $(".tab-admin-page ." + $(this).attr('id')).show();
   });


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