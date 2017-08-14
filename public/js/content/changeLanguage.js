$(document).ready(function(){

	$('#english.language-selection').on("click", function(){
		if (localStorage.getItem("language") === null) {
			localStorage.setItem("language", "english");
		}else{
			localStorage.setItem("language", "english");
		}
    })
    $('#spanish.language-selection').on("click", function(){
		if (localStorage.getItem("language") === null) {
			localStorage.setItem("language", "spanish");
		}else{
			localStorage.setItem("language", "spanish");
		}
    })

});