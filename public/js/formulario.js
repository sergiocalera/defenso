$gmx(document).ready(function(){
	$('#form-data').submit( function( event ){
		validar( event, $(this) );
	});
});

var validar = function(e, formulario){
	e.preventDefault();
	$elementos = formulario.serializeArray();
	console.log( $elementos );
	if( validar( $elementos ) ){
		enviar( '/mensaje', 'html' );
	} else{
		console.log("no paso la validacioón);
	}
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

var validar = function(datos){
	var bandera = false;

	return bandera;M

}