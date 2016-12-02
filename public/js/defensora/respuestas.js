$(document).ready(function(){

	$('#responseModalEdit').on('show.bs.modal', function (e) {
		modalEditar(e);
	});

	$('#responseModal').on('show.bs.modal', function (e) {
		$('#boxResponse').val("");
	});


	$('#saveResponse').click(function(){
		console.log("Salvar mensaje");
		var dataResponse = datos( $('#newResponse').find('input, textarea') );
		envio('/home/newresponse', 'html', dataResponse, function( data ){
			console.log("Se mando la información mensaje del cliente");
			console.log( data );
			location.reload();
		});
	});

	$('#saveResponseEdit').click(function(){
		console.log('Editando mensaje');
		var dataResponse = datos( $('#editResponse').find('input, textarea') );
		envio('/home/editarresponse', 'html', dataResponse, function( data ){
			location.reload();
		});
	});

	$('#deleteMessage').click( function(){
		var id = $(this).attr('data-identi');
		var aux = [];
		aux.push( { name: 'message' , value : id } );
		aux.push( { name: $('#accionesBotones input').attr('name') , value: $('#accionesBotones input').attr('value') } );
		envio('/home/deletemessage', 'html', aux, function( data ){
			location.reload();
		});
	});

	$('#approveMessage').click( function(){
		var id = $(this).attr('data-identi');
		var aux = [];
		aux.push( { name: 'message' , value : id } );
		aux.push( { name: $('#accionesBotones input').attr('name') , value: $('#accionesBotones input').attr('value') } );
		envio('/home/approveresponse', 'html', aux, function( data ){
			location.reload();
		});
	});

	$('.publish-response').click(function(){
		var id = $(this).attr('data-identification');
		var aux = [];
		aux.push( { name: 'message', value: id } );
		aux.push( { name: $('#accionesBotones input').attr('name'), value: $('#accionesBotones input').attr('value') } );
		envio('/home/publish', 'html', aux, function(data){
			location.reload();
		});
	});

	$('.delete-response').click( function(){
		var id = $(this).attr('data-identification');
		var aux = [];
		aux.push( { name: 'message', value: id } );
		aux.push( { name: $('#accionesBotones input').attr('name'), value: $('#accionesBotones input').attr('value') } );
		envio('/home/deleteresponse', 'html', aux, function(data){
			location.reload();
		});
	} );
});


var envio = function($url, $dataType, $data, funcion){
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

var datos = function( datos ){
	var info = [];
	datos.each(function(index){
		info.push( { name: $(this).attr('name'), value : $(this).val() } );
	});
	return info;
};

var modalEditar = function(event){
	var button =  $(event.relatedTarget);
	var id = button.data('identification');
	var mensaje = button.data('message');

	$('#boxResponseEdit').val(mensaje);
	$('#token_respuesta').attr('value', id);
};

var longNuevaRespuesta = function(){
	var maximo_c = 200;
	// var num_caracteres = document.forms[0].boxResponse.value.length;
	var num_caracteres = document.forms[1].response.value.length;

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

};

var longEditarRespuesta = function(){
	var maximo_c = 200;
	// var num_caracteres = document.forms[0].boxResponse.value.length;
	var num_caracteres = document.forms[2].response.value.length;
	console.log("Accedio a esta funcion");

	$('#total_caracteres_respuesta').html( maximo_c - num_caracteres );
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

};