<?php session_start();

$index = '../../index.php';
// User Logged in
if ( isset($_SESSION["userprofile"]) ) {
	header("Location: $index?user=sn");
}
// Options to Log in
else {
	
	// Get social connect
	$app = $_GET['app'];
	
	if ( !empty($app) ) {
		if ( $app == 'facebook' ) { // Facebook Auth
		require_once('../modelo/login_redes/facebook.php');
		}
		elseif ( ($app == 'twitter') ) { // Twitter Auth
			require_once('../modelo/login_redes/twitter.php');
		}
		elseif ( $app == 'google' ) {  // Google Auth
			require_once('../modelo/login_redes/google.php');
		}
		else {
			header("Location: $index");
		}
	}
	else {
		header("Location: $index");
	}
}
?>
