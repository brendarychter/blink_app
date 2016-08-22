$(document).ready(function(){
    var username = localStorage.getItem("username");
    $("#logo").append(username);


    $("#log-out").on("click", function(){
        console.log("hola")
        localStorage.removeItem(username);
        window.location.href = "log_in.php";

    });
})