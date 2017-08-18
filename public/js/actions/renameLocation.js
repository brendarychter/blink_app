$(document).ready(function(){
	$(".replace-image").each( function() {
	    $(this).attr("src", "../" + $(this).attr("src"));
	});

	$(".locate-polytics").prop("href", $(".locate-polytics").prop("href").replace('content/',''));
	$(".locate-terms").prop("href", $(".locate-terms").prop("href").replace('content/',''));
	$(".locate-map").prop("href", $(".locate-map").prop("href").replace('content/',''));

})