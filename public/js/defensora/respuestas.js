$(document).ready(function(){
	$('#responseModal').on('hidden.bs.modal', function (e) {
		$('#boxResponse').val("");
	})

	$('#saveResponse').click(function(){
		console.log("Salvar mensaje");
		var dataResponse = datos( $('#newResponse').find('input, textarea') );
		envio('/home/newresponse', 'html', dataResponse, function( data ){
			console.log("Se mando la información mensaje del cliente");
			console.log( data );
		});
	});
});


var envio = function($url, $dataType, $data, funcion){
	$.ajax({
		type: 'POST',
		async: false,
		url: $url,
		dataType: $dataType,
		data: $data,
		// beforeSend: function(data){
		// 	$('#mensaje').html('Enviando datos...');
		// },
		success: function(data){
			funcion();
		},
		error: function(data){
			console.log("Mensaje de error: ");
			console.log(data.responseText);
		}
	}); 
}

var datos = function( datos ){
	var info = [];
	datos.each(function(index){
		info.push( { name: $(this).attr('name'), value : $(this).val() } );
	});
	return info;
}