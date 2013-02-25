<?php session_start();
//require './moduloprincipal/conexion.php';

$accionPredefinida = "mostrar";
	if(empty($_GET['controlador'])){
		if(!empty($_GET['user'])){
			if($_GET['user']=="sn"){
				
				if(!empty($_SESSION["userprofile"]->screen_name)){
					echo $_SESSION["userprofile"]->screen_name;
				}else{
					echo $_SESSION["userprofile"]["name"];
				}
			//header("Location: index.php?user=sn");
			}elseif($_GET['user']=="ok"){
				echo $_SESSION["userBD"];
			}
			echo '<a href=./modulo_principal/controlador/logout.php>Logout</a>';
		}
		require_once './modulo_principal/vista/principal.html';
	}
/*else if(!empty($_GET['controlador'])){
			require_once './moduloprincipal/vistas/html/head.html';
			$controlador = $_GET['controlador'];
			if(! empty($_GET['accion']))
				  $accion = $_GET['accion'];
			else
				  $accion = $accionPredefinida;

			//Ya tenemos el controlador y la accion
			//La carpeta donde buscaremos los controladores
			$carpetaControladores = "./modulo".$controlador."/controladores/";
			//Formamos el nombre del fichero que contiene nuestro controlador
			$controlador = $carpetaControladores . $controlador . 'Controlador.php';

			//Incluimos el controlador o detenemos todo si no existe
			if(is_file($controlador)){
				  require_once $controlador;
				 
			}
			else
				  die('El controlador no existe - 404 not found');

			//Llamamos la accion o detenemos todo si no existe
			if(is_callable($accion))
				  $accion();
			else
				  die('La accion no existe - 404 not found');

	}*/
?>
