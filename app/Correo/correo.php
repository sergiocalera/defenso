<?php

namespace App\Correo;

use Mail;

class Correo{

	public function enviarMensajeDefensora( $name_to, $email_to, $name_from, $email_from,  $id ){

		$data=['name_to' => $name_to, 'id' => $id];
		$user = ['email_to' => $email_to, 'name_to' => $name_to, 'name_from' => $name_from, 'email_from' => $email_from];
		
		Mail::send(['html'=>'viewCorreo.defensora'], $data, function( $message ) use ($user){
			$message->to( $user['email_to'], $user['name_to'] )->subject('Tienes un nuevo comentario');
			$message->from( $user['email_from'], $user['name_from'] );
		});
	}

	public function enviarMensajeAudiencia( $name_to, $email_to, $name_from, $email_from, $response ){
		$data = ['name_to' => $name_to, 'email_to' => $email_to, 'response' => $response];
		$user = ['email_to' => $email_to, 'name_to' => $name_to, 'name_from' => $name_from, 'email_from' => $email_from];
	
		Mail::send(['html'=>'viewCorreo.response'], $data, function( $message ) use ($user){
			$message->to( $user['email_to'], $user['name_to'] )->subject('Contestación a tu comentario');
			$message->from( $user['email_from'], $user['name_from'] );
		});
	}
}

