<?php
$servidor = 'mysql16.000webhost.com';
$bd = 'a8737315_daw2';
$usuario = 'a8737315_daw2';
$contrasenia = 'carmen3mairena';

function LimpiaResultados($objeto){
	foreach ($objeto as $atributo => $valor)
		if(is_string($objeto->$atributo) === true)
			$objeto->$atributo = stripslashes($objeto->$atributo);
}
class ExcepcionEnTransaccion extends Exception{
	public function __construct(){}
}
?>