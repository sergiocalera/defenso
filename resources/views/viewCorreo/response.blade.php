Hola {{$name_to}}.<br>
Tú mensaje a sido contestado con el siguiente correo electr&oacute;nico: {{ $email_to }} .<br>
<h3>Respuesta</h3>
{{ $response }}
<br><br>
Puedes revisarlo en el siguiente enlace <a href="{{ url( '/comunicate#mensajes' ) }}" target="_new">aquí.</a><br><br>
Si tienes problemas con el link proporcionado, copia y pega el siguiente enlace.<br><br>
{{ url( '/comunicate#mensajes' ) }}