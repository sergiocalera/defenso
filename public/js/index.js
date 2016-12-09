$gmx(document).ready(function(){
	main();

	$(window).resize(function(){
		ajusteCuadro();
		ajusteColumna();
	});
});

var main = function(){
	ajusteCuadro();
	ajusteColumna();
};

var ajusteCuadro = function(){
	var alto = $('.icono-seccion').height();
	$('.texto').height( alto );
};

var ajusteColumna = function(){
	var alto = $('#col-derecha').height();
	var altoCuadro = (alto - 52) / 3;
	$('#primer-marco').height( altoCuadro );
	$('#segundo-marco').height( altoCuadro * 2 );
};