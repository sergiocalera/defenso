$gmx(document).ready(function(){
	$('#form-data').submit( function( event ){
		validar( event, $(this) );
	});
});

var validar = function(e, formulario){
	e.preventDefault();
	console.log("se va a mandar el mensaje del usuario");
	$elementos = formulario.serializeArray();
	console.log( $elementos );

};

var enviar = function($url, $dataType, $data, funcion){
	$.ajax({
		type: 'POST',
		async: false,
		url: $url,
		dataType: $dataType,
		data: $data,
		success: function(data){
			funcion();
		},
		error: function(data){
			console.log("Mensaje de error: ");
			console.log(data.responseText);
		}
	}); 
};
