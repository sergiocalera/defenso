@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Nuevo Mensaje</h3>
		</div>
	</div>
	<div class="row">
		<form action="/home/diary/add" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="name_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Nombre: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="name_message" type="text" class="form-control" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label for="last_name_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Apellido Paterno: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="last_name_message" type="text" class="form-control" placeholder="Apellido Paterno">
				</div>
			</div>
			<div class="form-group">
				<label for="last_segund_name_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Apellido Materno: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="last_segund_name_message" type="text" class="form-control" placeholder="Apellido Materno">
				</div>
			</div>
			<div class="form-group">
				<label for="age_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Edad: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="age_message" type="number" class="form-control" placeholder="Edad">
				</div>
			</div>
			<div class="form-group">
				<label for="occupation-event" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Ocupación: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<select class="form-control" id="ocupacion" name="occupation-event">
                            <option selected value="">Selecciona una opci&oacute;n</option>
                            <option value="Otro">Otro</option>
                            <option value="Abogado">Abogado</option>
                            <option value="Abogado">Administrador de proyectos</option>
                            <option value="Alba&ntilde;il">Alba&ntilde;il</option>
                            <option value="Almacenista">Almacenista</option>
                            <option value="Alphabiotista">Alphabiotista</option>
                            <option value="Analista contable">Analista contable</option>
                            <option value="Arquitecto">Arquitecto</option>
                            <option value="Abogado de Software">Abogado de Software</option>
                            <option value="Asesor comercial">Asesor comercial</option>
                            <option value="Asesor financiero">Asesor financiero</option>
                            <option value="Abogado">Abogado</option>
                            <option value="Asistente de direcci&oacute;n">Asistente de direcci&oacute;n</option>
                            <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                            <option value="Auxiliar de recursos humanos">Auxiliar de recursos humanos</option>
                            <option value="Bibliotecario">Bibliotecario</option>
                            <option value="Bolero">Bolero</option>
                            <option value="Cajero">Cajero</option>
                            <option value="Cantinero">Cantinero</option>
                            <option value="Cargador">Cargador</option>
                            <option value="Carnicero">Carnicero</option>
                            <option value="Carpintero">Carpintero</option>
                            <option value="CEO">CEO</option>
                            <option value="Cocinero">Cocinero</option>
                            <option value="Consejero senior">Consejero senior</option>
                            <option value="Contador">Contador</option>
                            <option value="Corrector de estilo">Corrector de estilo</option>
                            <option value="Costurera">Costurera</option>
                            <option value="Bolero">Bolero</option>
                            <option value="Country Manger">Country Manger</option>
                            <option value="Director General">Director General</option>
                            <option value="Diseñador de Interiores">Diseñador de Interiores</option>
                            <option value="Diseñador Gr&aacute;fico">Diseñador Gr&aacute;fico</option>
                            <option value="Editor">Editor</option>
                            <option value="Ejecutivo de ventas">Ejecutivo de ventas</option>
                            <option value="Electricista">Electricista</option>
                            <option value="Escritor">Escritor</option>
                            <option value="Estilista">Estilista</option>
                            <option value="F&iacute;sico">F&iacute;sico</option>
                            <option value="General Manager">General Manager</option>
                            <option value="General de ventas">General de ventas</option>
                            <option value="Ingeniero Civil">Ingeniero Civil</option>
                            <option value="Ingeniero de Diseño">Ingeniero de Diseño</option>
                            <option value="Ingeniero de Software">Ingeniero de Software</option>
                            <option value="Ingeniero en Rob&oacute;tica">Ingeniero en Rob&oacute;tica</option>
                            <option value="Ingeniero Mec&aacute;tronico">Ingeniero Mec&aacute;tronico</option>
                            <option value="Ingeniero Qu&iacute;mico">Ingeniero Qu&iacute;mico</option>
                            <option value="Licenciado en Filosof&iacute;a">Licenciado en Fisof&iacute;a</option>
                            <option value="Licenciado en inform&aacute;tica">Licenciado en inform&aacute;tica</option>
                            <option value="Maestro o docente">Maestro o docente</option>
                            <option value="Managing Parter">Managing Parter</option>
                            <option value="Maquilista">Maquilista</option>
                            <option value="Masajista">Masajista</option>
                            <option value="Mec&aacute;nico">Me&aacute;nico</option>
                            <option value="Mecan&oacute;grafo">Mecan&oacute;grafo</option>
                            <option value="Minero">Minero</option>
                            <option value="Peluquero">Peluquero</option>
                            <option value="Plomero">Plomero</option>
                            <option value="Pod&oacute;logo">Pod&oacute;logo</option>
                            <option value="Publicista">Publicista</option>
                            <option value="Quiropr&aacute;ctico">Quiropr&aacute;ctico</option>
                            <option value="Relaciones p&uacute;blicas">Relaciones p&uacute;blicas</option>
                            <option value="Reportero">Reportero</option>
                            <option value="Secretaria">Secretaria</option>
                            <option value="Tablajero">Tablajero</option>
                            <option value="T&eacute;cnico en audio">T&eacute;cnico en audio</option>
                            <option value="T&eacute;cnico en mantenimiento">T&eacute;cnico en mantenimiento</option>
                            <option value="Vendedor">Vendedor</option>
                            <option value="Zapatero">Zapatero</option>
                        </select>
				</div>
			</div>
			<div class="form-group">
				<label for="country_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">País: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="country_message" type="text" class="form-control" placeholder="Escribe el nombre del País">
				</div>
			</div>
			<div class="form-group">
				<label for="city_messajes" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Estado: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
					<input name="city_messajes" type="text" class="form-control" placeholder="Escriba el nombre del Estado">
				</div>
			</div>
			<div class="form-group">
				<label for="municipio_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Municipio: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input  name="municipio_message" type="text" class="form-control" placeholder="Escriba el nombre del Municipio">
				</div>
			</div>
			<div class="form-group">
				<label for="email_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Correo Electrónico: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input name="email_mssage" type="emai" class="form-control" placeholder="Correo electrónico" >
				</div>
			</div>
			<div class="form-group">
				<label for="feel_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Motivo del Mensaje: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    	<input type="radio" name="motivo[]" id="sugerencia" value="Sugerencia"/> Sugerencia
                	</div>
                	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    	 <input type="radio" name="motivo[]" id="queja" value="Queja" /> Queja
                	</div>
                	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    	 <input type="radio" name="motivo[]" id="peticion" value="Petici&oacute;n" /> Petici&oacute;n
                	</div>
                	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    	<input type="radio" name="motivo[]" id="opinion" value="Opini&oacute;n"/> Opini&oacute;n
                	</div>
                	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    	<input type="radio" name="motivo[]" id="felicitacion" value="Felicitaci&oacute;n" /> Felicitaci&oacute;n
                	</div>
                	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    	<input type="radio" name="motivo[]" id="Consulta" value="Consulta" /> Consulta
                	</div>
                </div>
			</div>
			<div class="form-group">
				<label for="txt_message" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-label">Mensaje: </label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<textarea class="form-control" rows="3" id="mmensaje" name="txt_message" onkeydown="longitud()" onkeyup="longitud()"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
					{{csrf_field()}}
					<input type="submit" value="Agregar a mensajes" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	var longitud = function (){
		console.log("Este es un simple memsaje");
	}
</script>
@endsection

@section('script')
@endsection