var comentario_texto = "";

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
	var bandera = true;
	var revision = [];
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
					bandera = false;
				}
			break;
		}
	}
	return bandera;
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
	var maximo_c = 200;
	var num_caracteres = document.forms[0].mmensaje.value.length;

	$('#total_caracteres').html( maximo_c - num_caracteres );
	if( num_caracteres > maximo_c ){
		$('#mmensaje').val( comentario_texto );
	} else{
		comentario_texto = $('#mmensaje').val();
	}

	if( num_caracteres >= maximo_c ){
		$('#mmensaje').css('color', '#D0021B');

	}
	else{
		$('#mmensaje').css('color', '#545454');
	}

}


//http://www.desarrolloweb.com/articulos/no-sobrepasar-caracteres-permitidos-textarea.html
//http://michelletorres.mx/acerca-de-michelle-torres/