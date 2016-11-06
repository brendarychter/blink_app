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


  function editIndex(){
  	
  }

  function populateLabels(){
    $.ajax({
    //     //http://blinkapp.com.ar/back/user/adminUser.php
        url: "../../back/admin/content/Content.php",
        type: "POST",
        cache: false,
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
      $(".toggle-nav-admin").removeClass("active");
      $(".tab-admin-page .admin-nav").hide();
      // add class to the one we clicked
      $(this).addClass("active");
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
      $input.select();
      $input.css("cursor", "text");
      $input.css("resize", "none");
  };
  var switchToSpan = function () {
      var $span = $("<span>", {
          text: $(this).val()
      });
      $span.addClass("editable-text");
      $(this).replaceWith($span);
      $span.on("click", switchToInput);
  }
  $(".editable-text").on("click", switchToInput);
})