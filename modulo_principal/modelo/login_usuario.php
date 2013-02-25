<?php session_start();
function login_usuario($usuario1,$password){

	global $servidor, $bd, $usuario, $contrasenia;
	try{
		@ $db = new mysqli($servidor, $usuario, $contrasenia);
		if (mysqli_connect_errno() != 0)
			throw new Exception('Error conectando:'.mysqli_connect_error(), mysqli_connect_errno());
			
		$db->select_db($bd);
		if ($db->errno != 0)
			throw new Exception('Error seleccionando bd:'.$db->error, $db->errno);
			
		$consulta = "select * from usuarios where usuario = '".$usuario1."' AND password = '".$password."'";
		
		$resultado = $db->query($consulta);
		if ($db->errno != 0)
			throw new Exception('Error realizando consulta:'.$db->error, $db->errno);
		if ($resultado->num_rows > 0){
			$obj = $resultado->fetch_object();
			$_SESSION['userBD'] = $obj->usuario;
			return 'ok';
		}
		$db->close();
	}catch (ExcepcionEnTransaccion $e){
		return 'error';
		$db->rollback();
		$db->close();
	}catch (Exception $e){
		echo $e->getMessage();
		if (mysqli_connect_errno() == 0)
			$db->close();
		exit();
	}
}

?>
