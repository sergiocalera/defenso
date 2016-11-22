var datoserch = [];

$gmx(document).ready(inicio);
$gmx(document).ready(inicios);

function inicio(){
	$("#btn").click(function(event){
		event.preventDefault();
		datoserch["val"] = $("#delegacion").val();
		datoserch["attr"] = $("#delegacion").attr("name");
        if (evaluar()==false)return false;
		$.ajax({
			type: 'POST',
			async: false,
//url:  'http://www.televisioneducativa.gob.mx/swb/DGTVE/correodefensoria',
//url: 'http://www.televisioneducativa.gob.mx/work/models/DGTVE/Template/resource/defensoria/php/validar.php',
			//url: '/webservice/peticion/cete',
			url: "/mensaje",
			dataType: "html",
			data: datos(datoserch),
			beforeSend: function(data){
				$('#mensaje').html('Enviando datos...');
			},
			success: function(data){
				$('#mensaje').html("<center><span class='bg-success'>Tus datos fueron enviados exitosamente."+data+"</span></center>");
			},
			error: function(data){
				console.log("Mensaje de error: ");
			}
		}); 
	});

	$("#nombre").keyup(nombre);
	$("#apaterno").keyup(mapaterno);
	$("#amaterno").keyup(mamaterno);
	$("#edad").keyup(medad);
	$("#ocupacion").change(mocupacion);
	$("#delegacion").change(mdelegacion);
	$("#pais").change(mpais);
	$("#estado").change(mestado);
	$("#correo").keyup(mcorreo);
	$("#motivo").change(mmotivo);
	$("#mmensaje").keyup(mmensaje);
}
//******************************Nombre***************************************
function nombre(){
	var nombre = $("#nombre").val();
	var reg =/^([a-z ñáéíóú]{2,60})$/i;
	if( nombre == null || nombre == ''){ $("#form-nombre").addClass("has-error has-feedback text-danger");
		return false;
	}else if(!reg.test(nombre)){ $("#form-nombre").addClass("has-error has-feedback text-danger");
		return false;
	}else if(nombre.length < 2 || nombre.length>50){ $("#form-nombre").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-nombre").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//****************************Apellido Paterno********************************
function mapaterno(){
	var paterno = $("#apaterno").val();
	var reg =/^([a-z ñáéíóú]{2,60})$/i;
	if( paterno == null || paterno == ''){ $("#form-apaterno").addClass("has-error has-feedback text-danger");
		return false;
	}else if(!reg.test(paterno)){ $("#form-apaterno").addClass("has-error has-feedback text-danger");
		return false;
	}else if(paterno.length<2 || paterno.length>50){ $("#form-apaterno").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-apaterno").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//*****************************Apellido Materno*************************************
function mamaterno(){
	var materno = $("#amaterno").val();
	var reg =/^([a-z ñáéíóú]{2,60})$/i;
	if( materno == null || materno == ''){ $("#form-amaterno").addClass("has-error has-feedback text-danger");
		return false;
	}else if(!reg.test(materno)){ $("#form-amaterno").addClass("has-error has-feedback text-danger");
		return false;
	}else if(materno.length<2 || materno.length>50){ $("#form-amaterno").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-amaterno").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//*******************************Edad***************************************************
function medad(){
	var edad = $("#edad").val();
	if( edad == null || edad == ''){ $("#form-edad").addClass("has-error has-feedback text-danger");
		return false;
	}else if(isNaN(edad)){ $("#form-edad").addClass("has-error has-feedback text-danger");
		return false;
	}else if(edad < 10 || edad > 999){ $("#form-edad").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-edad").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//********************************************Ocupacion*********************************************
function mocupacion(){
	var ocupacion = $("#ocupacion").val();
	if( ocupacion == null || ocupacion == ''){
	 $("#form-ocupacion").addClass("has-error has-feedback text-danger");	
		return false;
	}else{ $("#form-ocupacion").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//*******************************************Pais*****************************************************
function mpais(){
	var pais = $("#pais").val();
    if(!(pais=="Mexico")){
       $("#form-pais").removeClass("has-error has-feedback text-danger");
	   $("#estado").attr('disabled', 'disabled');
	   $("#delegacion").attr('disabled', 'disabled');
	   $("#estado").val("");
	   $("#delegacion").val("");
	   $("#form-delegacion").removeClass("has-error has-feedback text-danger");
	   $("#form-estado").removeClass("has-error has-feedback text-danger");
    }else if(pais =="Mexico"){
      $("#estado").removeAttr("disabled");
      $("#delegacion").removeAttr("disabled");
	}

	if( pais == null || pais == ''){
		$("#form-pais").addClass("has-error has-feedback text-danger");
		//$("#apaterno").focus();
		return false;
	}else{
		$("#form-pais").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//************************************************Estado***************************************************
function mestado(){
    var pais = $("#pais").val();
	var estado = $("#estado").val();
    if(!(estado =="Ciudad de Mexico")){ $("#form-delegacion").removeClass("has-error has-feedback text-danger");
    }else if(pais =="Mexico"){ $("#delegacion").removeAttr("disabled"); }

    if(!(pais=="Mexico")){ $("#estado").val(null);
        return true;
	}else if(estado == null || estado == ''){ $("#form-estado").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-estado").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//**********************************************Delegacion o Municipio*****************************************
function mdelegacion(){
    var pais = $("#pais").val();
	var delegacion = $("#delegacion").val();
	if(!(pais== "Mexico")){ $("#delegacion").val(null);
        return true;
	}else if( delegacion == null || delegacion == ''){ $("#form-delegacion").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-delegacion").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//************************************************Correo**************************************************
function mcorreo(){
	var correo = $("#correo").val();
	var reg = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if( correo == null || correo == ''){ $("#form-correo").addClass("has-error has-feedback text-danger");
		return false;
	}else if(!reg.test(correo)){ $("#form-correo").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-correo").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//****************************************************Motivo*****************************************
function mmotivo(){
 if($('input[name="motivo"]').is(':checked')){ return true;
 }else{ return true; }
}
//****************************************************Mensaje****************************************
function mmensaje(){
	var mmensaje = $("#mmensaje").val();
	var reg = /^[a-zA-Z\s./,/\-s0-9\[a-z ñáéíóúÑÁÉÍÓÚ]*$/;
	if( mmensaje == null || mmensaje == ''){ $("#form-mmensaje").addClass("has-error has-feedback text-danger");
		return false;
	}
	// else if(!reg.test(mmensaje)){ $("#form-mmensaje").addClass("has-error has-feedback text-danger");
	// 	return false;
	// }
	else if(mmensaje.length < 2 || mmensaje.length > 200){ $("#form-mmensaje").addClass("has-error has-feedback text-danger");
		return false;
	}else{ $("#form-mmensaje").removeClass("has-error has-feedback text-danger");
		return true;
	}
}
//************************************************Datos para ajax inicio********************************
var datos = function(v){
	var data = [];
	data.push( { name: $('#nombre').attr('name'), value : $('#nombre').val() } );
	data.push( { name: $('#apaterno').attr('name'), value : $('#apaterno').val() } );
	data.push( { name: $('#amaterno').attr('name'), value : $('#amaterno').val() } );
	data.push( { name: $('#edad').attr('name'), value : $('#edad').val() } );
	data.push( { name: $('#ocupacion').attr('name'), value : $('#ocupacion').val() } );
    data.push( { name: v["attr"], value : v["val"] } );
	data.push( { name: $('#pais').attr('name'), value : $('#pais').val() } );
	data.push( { name: $('#estado').attr('name'), value : $('#estado').val() } );
	data.push( { name: $('#correo').attr('name'), value : $('#correo').val() } );
    $('input:radio:checked').each(function(index){
		// data.push( { name : $(this).attr( 'name' ) + '_' + ( index + 1 ) , value : $( this ).val() } );
		data.push( { name : $(this).attr( 'name' ), value : $( this ).val() } );
	});
	data.push( { name: $('#mmensaje').attr('name'), value : $('#mmensaje').val() } );
	data.push( { name: $('#form-data input:hidden').attr('name'), value: $('#form-data input:hidden').val() });
	console.log(data);
	console.log("Valor del token: " + $('#form-data input:hidden').val() );
	return data; }
//******************************************Evaluando si alguna funcion mande falso************************
function evaluar(){
	if(nombre()==false || mapaterno()==false || mamaterno()==false || medad()==false || mocupacion()==false
		|| mdelegacion()==false || mpais()==false || mestado()==false || mcorreo()==false 
		|| mmensaje()==false || mmotivo()== false){ 
		$("span#v").remove();
		$("#mensaje").html("<span id='v' class='text-center text-danger'><h5>Error verifica tus campos.</h5></span>");    
		return false;
	} else { 
		$("span#v").remove();
		$("#mensaje").html("<span id='v' class='text-success'>Exito.</span>");    
		return true;
	}
}
//****************************************Inicios para el boton select option Ajax ***********************************
function inicios(){
	$("#estado").change(function(){
		$("#delegacion").removeAttr("disabled");
		$.ajax({
			type: 'POST',
			async: false,
			url:  '/v',
			dataType: "html",
			data: $("#form-data").serializeArray(),
			beforeSend: function(data){			
			},
			success: function(data){
				$('#delegacion').html(data);
			},
			error: function(data){ 
				console.log("Mensaje de error: ");
			}
		});
	});
}
//*****************************************datos para inicios en Ajax**********************************
var datoss = function(){
	var data = [];
	data.push( { name: $('#estado').attr('name'), value : $('#estado').val() } );
	console.log(data);
	return data;
}
