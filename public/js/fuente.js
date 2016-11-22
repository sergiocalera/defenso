$gmx(document).ready(function(){
	$(".inc-font").on("click", function(e) {
		cambio( e, this, +1 );
	});


	$(".dec-font").on("click", function(e) {
		cambio( e, this, -1 );
	});

	posicion();

	$( window ).resize( function(){
		posicion();
	});
});

var cambio = function(e, element, dif){
	var that = $(element);
	var curSize = parseInt($('main').find('p').css('font-size')) + dif;
	console.log("Tamañano de curSize: " + curSize);
	console.log("El elemento de p: ");
	console.log( $('main').find('p') );
	if ( 15 <= curSize && curSize <= 25) {

		$('main').find('p, li, dd, dt, a, h1, h2, h3, h4, .form-control, .btn, span, label').each(function(index) {
			$(this).css({
				'font-size': (parseInt($(this).css('font-size')) + dif)
			});

			if ($(this).is('p, h2, h3, h4')) {
				$(this).css({
					'margin-bottom': (parseInt($(this).css('margin-bottom')) + (dif * 2 ) )
				});
			}
		});
		$('#derechos').find('.cuadro-derecho').each(function(index){
			$(this).height( $(this).height() + ( dif * 40 ) );
		});
	}
	e.preventDefault();
};

var posicion = function(){
	var pantalla = $(window).width();
	var contenido = $("main .container").width();
	var columna = ( pantalla - contenido ) / 2;

	var botones = $(".font-changer").width();
	var diferencia = ( columna - botones ) - ( columna * .09 );
	$(".font-changer").css( { "left" : diferencia + "px" } );
}
