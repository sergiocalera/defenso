Tienes un nuevo comentario que revisar <br>
<h3>Datos del Usuario:</h3>
@foreach( $request as $key => $value )
<strong>{{ $key }} : </strong> {{ $value }}<br/>
@endforeach
<br><br>
Entra al sistema para poder aprobar el nuevo comentario: <a href="{{ url( '/home/response/' . $id ) }}">Entrar.</a><br>
Si tienes problemas para entrar, copia y pega el siguiente enlace.<br>
{{ url( '/home/response/' . $id ) }}<br>
ó simplemente entra en la consola de administración.<br>