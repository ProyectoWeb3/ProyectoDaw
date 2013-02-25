<?php
session_start();
$index = '../../index.php';
require('../modelo/conexion.php');

if ( isset($_POST["username"]) && isset($_POST["password"]) ) {
	require('../modelo/login_usuario.php');
	$resultado = login_usuario($_POST["username"], $_POST["password"]);
        
	if($resultado == "ok"){
		header("Location: $index?user=$resultado");
	}
        else{
       		header("Location: $index?user=error");
	}
}

if ( isset($_POST["usuario_login"]) && isset($_POST["password_login"]) ) {
	require('../modelo/comprobar_login.php');
	$resultado = login_usuario($_POST["usuario_login"], $_POST["password_login"]);
	header("Location: $index");
}
?>
