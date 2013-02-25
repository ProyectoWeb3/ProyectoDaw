<?php
/*==========================================*\
|| ##########################################||
|| # SONHLAB.com - SONHlab Social Auth v1 #
|| ##########################################||
\*==========================================*/

// Set the page will be returned
$index = '../index.php';

if ( $app == 'facebook' ) { // Facebook App
	$facebook = new Facebook(array(
		'appId'  => '424607070955243',
		'secret' => '04fc5af42d8d1a5b51fcd998d0294f4b',
	));
}
elseif ( $app == 'twitter' ) { // Twitter App
	$tmhOAuth = new tmhOAuth(array(
	  'consumer_key'    => 'iuiZoT7oROoNT6pQgS7Suw',
	  'consumer_secret' => 'BXOH6WJxGvDXSFDBgx80c8TPu2qz7M6vOuBN64Gs8s',
	));
}
elseif ( $app == 'google' ) { // Google App
	$GoogleApiConfig = array(
		// The application_name is included in the User-Agent HTTP header.
		'application_name' => 'ProyectoDaw',
		
		// OAuth2 Settings, you can get these keys at https://code.google.com/apis/console
		'oauth2_client_id' => '325417113509.apps.googleusercontent.com',
		'oauth2_client_secret' => '0mfq-_7RFz-4HfbAqJv3f-OP',
		'oauth2_redirect_uri' => 'http://proyectodaw3.uphero.com/modulo_principal/controlador/login.php?app=google',

	);
}
