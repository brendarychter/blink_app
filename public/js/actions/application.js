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
        $("#username-logged").val(localStorage.getItem("username"));
        $("#password-logged").val(localStorage.getItem("password"));
        $("#mail-logged").val(localStorage.getItem("mail"));
        $("#mobile-logged").val(localStorage.getItem("phoneNumber"));
    })

    $("#delete-user").on("click", function(){
        //No funciona
        window.location.href = "../index.php";

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
})