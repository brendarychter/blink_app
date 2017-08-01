$(document).ready(function(){
	$(".replace-image").each( function() {
	    $(this).attr("src", "../" + $(this).attr("src"));
	});

	var source = $(".locate").prop("href").replace('content/','');
	$(".locate").prop("href", source)
})