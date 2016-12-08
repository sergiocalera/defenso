<?php

namespace App\Correo;

use Mail;

class Correo{

	public function enviarMensaje( $name_to, $email_to, $name_from, $email_from,  $type ){

		$data=['name_to' => $name_to];
		$user = ['email_to' => $email_to, 'name_to' => $name_to, 'name_from' => $name_from, 'email_from' => $email_from];
		switch ( $type ) {
			case 1:
				Mail::send(['text'=>'viewCorreo.defensora'], $data, function( $message ) use ($user){
					$message->to( $user['email_to'], $user['name_to'] )->subject('Tienes un nuevo comentario');
					$message->from( $user['email_from'], $user['name_from'] );
				});
				break;

			case 2:
				Mail::send('viewCorreo.defensora', $data, function( $message ){
					$message->to( $email_to, $name_to )->subject('Defensoría de Audiencias Televisión Educativa');
					$message->from( $email_from, $name_from );
				});
				break;
			
			default:
				# code...
				break;
		}
	}
}

