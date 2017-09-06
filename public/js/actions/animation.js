$(document).ready(function(){
	//Array fotos para slider de home
	//Agregar title y alt
	var arrayPhotos = [];
	for (var i = 0; i < 71; i++){
		if (i < 10){
			arrayPhotos.push("public/img/animation/Comp_1_0000"+i+".png");
		}else{
			arrayPhotos.push("public/img/animation/Comp_1_000"+i+".png");
		}
	}
	var i = 0;
	setInterval(function(){
		if (i == arrayPhotos.length){
			i = 0;
		}
    	$("#slider-images").prop("src", arrayPhotos[i++]);
	}, 24);

});