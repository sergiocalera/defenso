$gmx(document).ready(function(){
	$('#form-data').submit( function( event ){
		validar( event, $(this) );
	});
});

var validar = function( e, formulario ){
	e.preventDefault();
	console.log( formulario.serializeArray() );
	if( revisar( formulario ) ){
		$elementos = formulario.serializeArray();
		enviar( '/mensaje', 'html', $elementos, function( data ){
			console.log("Respuesta del servidor:");
			console.log( data );
		});
	} else{
		console.log("no paso la validación");
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

var revisar = function( formulario ){
	var bandera = false;
	var elementos = formulario.find("input, textarea");
	for (var i = elementos.length - 1; i >= 0; i--) {
		var aux = $(elementos[i]).attr('name');
		switch( aux ){
			case 'nombre' :
			case 'apaterno' :
			case 'edad' :
			case 'pais' :
			case 'estado' :
			case 'correo' :
			case 'mmensaje' :
				if( !revisarElemento( $(elementos[i]) ) ){
					break;
				}
			break;
		}
	}
	// return bandera;
	return false;
};

var revisarElemento = function( elem ){
	var bandera = false;
	elem.parent().removeClass('has-success has-error');
	if( elem.val().length !== 0 ){
		elem.parent().addClass('has-success');
		bandera = true;
	} else{
		elem.parent().addClass('has-error');
		elem.focus();
	}
	return bandera;
};

var longitud = function(){
	var num_caracteres = document.forms[0].mmensaje.value.length;
	$('#total_caracteres').html(num_caracteres);
	console.log('Se tecleo una tecla' + num_caracteres);
}


//http://www.desarrolloweb.com/articulos/no-sobrepasar-caracteres-permitidos-textarea.html
//http://michelletorres.mx/acerca-de-michelle-torres/