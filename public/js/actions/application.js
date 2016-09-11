var username = localStorage.getItem("username");
$("#logo").append(username);
$(document).ready(function(){


    $("#log-out").on("click", function(){
        console.log("logged out")
        localStorage.clear();
        //No funciona
        window.location.href = "../index.php";

    });

    $("#config-user").on("click", function(){
        $("#grupos").hide();
        $("#ajustes").show();
        //mostrar data en el form
        console.log(localStorage)
        setLocalStorageValues();
    })

    $("#my-groups").on("click", function(){
        $("#grupos").show();
        $("#ajustes").hide();
    })

    $("#delete-user").on("click", function(){
        var formData = $(".user-config").serialize();
        console.log(formData);
        $.ajax({
            url: "../back/user/deleteUser.php",
            type: "POST",
            data: formData
        }).done(function( data ) {
            console.log(data);
            localStorage.clear();
            window.location.href = "log_in.php";
        }).error(function(error, textStatus){
            console.log("No pudo borrar: " + textStatus);
        });
    })

    $("#modify-user").on("click", function(){
        var formData = $(".user-config").serialize();
        console.log(formData);
        $.ajax({
            url: "../back/user/updateUser.php",
            type: "POST",
            data: formData,
            dataType: "json"
        }).done(function( data ) {
            //CHANGE ALL LOCALSTORAGE DATA WITH NEW DATA-> USE $_SESSION

            localStorage.setItem("username", data.username);
            //store password not in localstorage
            localStorage.setItem("password", data.password);
            localStorage.setItem("mail", data.mail);
            localStorage.setItem("phoneNumber", data.phoneNumber);
            setLocalStorageValues();

        }).error(function(error, textStatus){
            console.log("No pudo modificar: " + textStatus);
        });
    })
    $(".menu-item").on("click", function(){
        $(".activo").removeClass("activo");
        $(this).addClass("activo");
    })

    function setLocalStorageValues(){
        $("#username-logged").val(localStorage.getItem("username"));
        $("#password-logged").val(localStorage.getItem("password"));
        $("#mail-logged").val(localStorage.getItem("mail"));
        $("#mobile-logged").val(localStorage.getItem("phoneNumber"));
    }
})