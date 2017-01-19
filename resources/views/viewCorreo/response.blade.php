<p>
	Estimado (a) {{$name_to}}.<br>
	Su mensaje ha sido contestado al siguiente correo electr&oacute;nico: {{ $email_to }} .<br>
</p>
<h3>Respuesta</h3>
<p>
	{{ $response }}
</p>
<br>
<p>
	Usted puede visualizar su mensaje y respuesta <a href="{{ url( '/que-dice-audiencia' ) }}" target="_new">aquí.</a>
	<br>
	Si tiene problemas con el enlace, copie y pegue la siguiente liga:<br><br>
	{{ url( '/que-dice-audiencia' ) }}
</p>