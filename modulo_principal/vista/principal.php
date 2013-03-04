<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="es" />
<title>Casas rurales - Alquiler casas rurales, hoteles rurales, turismo rural</title>
<meta name="title" content="Casas rurales - Alquiler casas rurales, hoteles rurales, turismo rural" />
<meta name="description" content="En PlanRural te ofrecemos una completa selección de hoteles y casas rurales, con encanto y calidad, para que disfrutes del turismo rural." />
<meta name="keywords" content="casas rurales, hoteles rurales, turismo rural, alojamientos, ofertas, alquiler" />
	<link rel="stylesheet" type="text/css" href="./modulo_principal/css/calendario.css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />

	<script type="text/javascript" src="jqueryidtabs.js"></script>
	<script type="text/javascript" src="boobletooltips.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type='text/javascript' src='./modulo_principal/Javascript/principal.js'></script>
<script type='text/javascript' src='./modulo_principal/Javascript/loginquery.js'></script>
	<link rel="stylesheet" type="text/css" href="./modulo_principal/css/principal.css" />
	<link rel="stylesheet" type="text/css" href="./modulo_principal/css/login.css" />
	<link rel="stylesheet" type="text/css" href="./modulo_principal/css/all.css" />


</head>
<body>

<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
<a target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.sport.es"><img src="./modulo_principal/img/compartirfb.jpg" border=0 width=82 height=18 /></a>

<!-- ***********************************************CABECERA************************************ -->
			<div id="edgesline" class="edges"></div>
	<div id="tabs">
    <ul id="tabMenu">
  
       <li class="regular"><a href="#login-box" class="login-window">Login</a></li>
        <li class="regular"><a href="#registro-box" class="registro-window">Registro</a></li>
        <li class="dropdown"><a href="#tab3">Olvide la Contraseña</a></li>
        <li class="dropdown"><a href="#tab4">Contacto</a></li>
        <li class="edges">&nbsp;</li>
        
    </ul>

    
	</div>


<!-- *******************************CABECERA***EMERGENTES********************************************************** -->
<div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="./modulo_principal/img/close.gif" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="./modulo_principal/controlador/controlador_principal.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Usuario o email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Usuario">
                </label>
                <label class="password">
                <span>Contraseña</span>
                <input id="password" name="password" value="" type="password" placeholder="Contraseña">
                </label>
                <button class="submit button" type="submit">Login</button>
				<div id="login_redes">
					<a href="./modulo_principal/controlador/login.php?app=facebook">
						<img src="./modulo_principal/img/facebook_login_bt.png" alt="facebook_login_button" />
					</a>
					<a href="./modulo_principal/controlador/login.php?app=twitter">
						<img src="./modulo_principal/img/twitter_login_bt.png" alt="twitter_login_button" />
					</a>
					<a href="./modulo_principal/controlador/login.php?app=google">
						<img src="./modulo_principal/img/googleplus_login_bt.png" alt="googleplus_login_button" />
					</a>
				</div>
                <p>
                <a class="forgot" href="#">¿Olvidaste la Contraseña?</a>
                </p>        
                </fieldset>
          </form>
</div>

<div id="registro-box" class="login-popup">
        <a href="#" class="close"><img src="./modulo_principal/img/close.gif" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="./modulo_principal/controlador/controlador_principal.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Usuario</span>
                <input id="username" name="usuari_usuario" value="" type="text" placeholder="Usuario">
                </label>
                <label class="password">
                <span>Contraseña</span>
                <input id="password" name="password_usuario" value="" type="password" placeholder="Contraseña">
                </label>
				<label class="password">
                <span>Confirmar Contraseña</span>
                <input id="confpass" name="config_passwd" value="" type="password" placeholder="Repetir Contraseña">
                </label>
				<label class="password">
                <span>Correo Electronico</span>
                <input id="correo" name="correo_electronico" value="" type="password" placeholder="Correo Electronico">
                </label>
                <button class="submit button" type="submit">Registro</button>      
                </fieldset>
          </form>
</div>
		

<!-- **********************************Lateral de pagina principal********************************* -->
	<div id="sombra">
	
	<div id="contenido">
		
	<div id="menu-lateral">
		<div class="titulo">Top Casas</div>
		<div class="expande-menu">&nbsp;</div>
			<ul>
				<?php while ($obj = $resultado->fetch_object()){		
					LimpiaResultados($obj);
					echo('<b>'.utf8_encode($obj->nombre_casa).'</b>');
					echo('<br>');
					echo('<img src='.$obj->foto_principal.' height=100px;></img>');
					echo('<br>');	
				} ?>
		  	</ul>


	  	<div class="expande-menu">&nbsp;</div>
	
		<div class="titulo">Top Viajeros</div>
		<div class="expande-menu">&nbsp;</div>
			<ul>
				<?php while ($obj = $resultado2->fetch_object()){		
					LimpiaResultados($obj);
					echo('<b>'.utf8_encode($obj->usuario).'</b>');
					echo('<br>');
					echo('<img src='.$obj->foto.' height=100px;></img>');
					echo('<br>');
				} ?>
			</ul>
		<div class="expande-menu">&nbsp;</div>
	</div>
			
<!--**************************************************MAPA DEL CENTRO***************************************-->
			<div id="centro">
			<div class="mapa-tope">
				
			<p>Elige tu país de destino</p>
				
			</div>
			<div class="mapa-separa"></div>
			
			
			<div id="tab4">
<img width="450" height="317" src="./modulo_principal/img/Javi.gif" alt="19.554 casas rurales en Europa" usemap="#map">
<map id="map" name="map">
<area coords="194,180,196,178,200,180,202,184,200,188,194,190,192,186,192,182" shape="poly" href="" alt="18 casas rurales en Andorra" title="Andorra">
<area coords="78,158,82,156,86,154,86,158,92,160,98,162,102,162,100,168,102,172,100,176,92,180,92,186,86,190,86,196,82,198,80,204,80,210,78,216,76,220,80,222,72,226,72,232,66,234,56,228,58,220,64,212,64,206,58,206,60,202,58,200,74,176,76,160" shape="poly" href="" alt="518 casas rurales en Portugal" title="Portugal">
<area coords="78,154,82,154,86,154,88,156,94,160,100,160,104,162,102,166,104,170,102,174,98,178,94,180,94,188,88,188,86,194,80,208,82,208,78,218,78,220,78,224,74,226,72,232,80,238,84,246,84,252,88,258,96,254,102,254,104,252,116,256,130,260,134,258,142,254,146,250,150,252,160,240,166,238,162,226,182,204,198,204,204,200,210,198,214,198,214,192,208,190,202,188,198,190,194,190,192,186,192,182,190,178,186,176,184,180,178,176,174,174,166,164,162,160,158,160,148,156,142,154,140,152,130,150,114,144,104,138,96,134,92,132,90,136,82,136,78,138,82,142,84,146,82,150,80,152" shape="poly" href="" alt="9.714 casas rurales en España" title="España">
<area coords="182,236,194,232,204,230,218,230,224,232,220,238,204,242,194,242,180,242,180,238" shape="poly" href="" alt="9.714 casas rurales en España" title="España">
<area coords="262,82,264,74,270,68,274,74,274,82,272,86,266,86,264,86" shape="poly" href="" alt="11 casas rurales en Luxemburgo" title="Luxemburgo">
<area coords="270,178,270,174,264,172,264,162,266,158,264,156,268,152,268,146,266,142,280,142,282,140,290,146,290,148,294,142,302,144,310,132,326,132,330,138,338,142,340,144,338,148,340,156,336,156,332,158,330,158,322,162,324,166,324,172,326,182,338,194,340,208,356,222,364,220,364,226,394,248,392,252,382,246,378,244,368,252,378,262,364,284,356,288,354,306,322,288,324,282,330,282,336,284,350,284,358,282,364,278,368,268,366,262,362,258,362,250,356,250,350,244,350,238,346,240,338,228,332,228,306,198,296,178,288,172,280,172,272,178" shape="poly" href="" alt="1.460 casas rurales en Italia" title="Italia">
<area coords="286,242,288,232,284,222,272,228,270,238,272,252,274,258,276,254,286,256,286,246" shape="poly" href="" alt="1.460 casas rurales en Italia" title="Italia">
<area coords="268,176,262,168,264,158,264,152,268,144,266,138,254,138,260,130,268,122,270,120,272,116,278,116,280,112,288,96,272,88,264,88,254,74,250,74,248,66,244,66,242,58,238,58,236,54,228,52,226,64,210,68,212,72,204,74,192,70,192,64,188,62,190,82,174,80,170,70,156,70,158,78,156,82,176,94,176,100,178,112,184,118,180,128,172,152,166,164,166,162,178,174,184,178,188,176,194,180,202,178,204,186,204,190,214,190,216,182,230,174,246,184,258,184,268,178" shape="poly" href="" alt="2.456 casas rurales en Francia" title="Francia">
<area coords="288,204,282,200,278,206,278,214,284,220,288,212,288,208" shape="poly" href="" alt="2.456 casas rurales en Francia" title="Francia">
<area coords="300,122,306,134,328,132,332,138,344,144,356,144,368,140,372,134,376,124,380,124,378,118,378,114,380,110,366,108,362,104,352,110,346,110,334,114,338,126,334,124,330,124,326,122,314,126,310,122,306,126,304,122" shape="poly" href="" alt="3.875 casas rurales en Austria" title="Austria">
<area coords="272,68,262,80,260,82,254,72,250,70,248,66,246,64,244,56,238,54,242,52,252,56,260,52,268,54,270,64,272,66" shape="poly" href="" alt="116 casas rurales en Bélgica" title="Bélgica">
<area coords="272,62,274,48,282,48,286,40,282,38,286,34,288,28,276,24,274,26,276,32,268,34,270,30,268,26,266,26,264,34,256,42,262,44,260,46,258,46,250,46,262,52,268,54,270,58,272,62,274,48" shape="poly" href="" alt="248 casas rurales en Países Bajos" title="Países Bajos">
<area coords="308,2,310,18,304,20,302,24,296,26,298,22,290,22,292,28,286,36,282,36,286,42,282,48,276,50,272,62,272,72,274,84,276,88,290,96,282,116,288,118,290,116,302,122,306,122,308,124,314,124,318,126,330,122,336,122,334,116,346,108,344,104,342,102,332,90,332,84,330,78,362,70,358,46,354,40,356,36,356,28,352,26,352,22,344,16,324,20,326,18,328,16,318,16,316,10,318,6,310,4" shape="poly" href="" alt="1.138 casas rurales en Alemania" title="Alemania">
</map>
<div id="new-eu">
	<!--NEWS-->
	<?php
		for($i=0; i < 4; i++){
			echo newsEU[0][i];
		}
	?>
</div>

</div>

<!--***************************************PARTE DE DEBAJO DEL MAPA*****************************************************-->
<div class="mapa-separa"></div>						
		<div class="destacados-portada-tope">
				<p>Alojamientos rurales en oferta</p>
			</div>
			<div class="destacados">
			  
				<div class="destacado">
					<a href="http://www.planrural.com/avila/las-dos-gargantas-de-gredos/"><img src="imagenesbd/89595142_d.jpg" alt="Las Dos Gargantas de Gredos - Casa rural Ávila" /></a>
					<p><b><span>Ávila</span></b></p>
					<p><a href="http://www.planrural.com/avila/las-dos-gargantas-de-gredos/">Las Dos Gargantas de Gredos</a></p>
					<p class="descripcion">
						428<br />
						Casa completa 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/avila/la-nave-de-gredos/"><img src="imagenesbd/52006833_d.jpg" alt="La Nave de Gredos - Casa rural Ávila" /></a>
					<p><b><span>Ávila</span></b></p>
					<p><a href="http://www.planrural.com/avila/la-nave-de-gredos/">La Nave de Gredos</a></p>
					<p class="descripcion">
						428<br />
						Casa completa 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/lleida/hotel-tierras-de-aran/"><img src="imagenesbd/23007113_d.jpg" alt="Hotel Tierras de Arán - Hotel rural Lleida" /></a>
					<p><b><span>Lleida</span></b></p>
					<p><a href="http://www.planrural.com/lleida/hotel-tierras-de-aran/">Hotel Tierras de Arán</a></p>
					<p class="descripcion">
						8295<br />
						Alquiler por habitaciones 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/granada/casas-rurales-benarum/"><img src="imagenesbd/33732950_d.jpg" alt="Casas Rurales Benarum - Casa rural Granada" /></a>
					<p><b><span>Granada</span></b></p>
					<p><a href="http://www.planrural.com/granada/casas-rurales-benarum/">Casas Rurales Benarum</a></p>
					<p class="descripcion">
						8257<br />
						Casa completa 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/avila/la-vega-de-vitae/"><img src="imagenesbd/18627133_d.jpg" alt="La vega de Vitae - Casa rural Ávila" /></a>
					<p><b><span>Ávila</span></b></p>
					<p><a href="http://www.planrural.com/avila/la-vega-de-vitae/">La vega de Vitae</a></p>
					<p class="descripcion">
						642<br />
						Casa completa 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/granada/cortijo-el-plantio/"><img src="imagenesbd/58265535_d.jpg" alt="Cortijo El Plantio - Cortijo Granada" /></a>
					<p><b><span>Granada</span></b></p>
					<p><a href="http://www.planrural.com/granada/cortijo-el-plantio/">Cortijo El Plantio</a></p>
					<p class="descripcion">
						2740<br />
						Casa completa 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/avila/casa-rural-el-cordel/"><img src="imagenesbd/48208687_d.jpg" alt="Casa Rural El Cordel - Casa rural Ávila" /></a>
					<p><b><span>Ávila</span></b></p>
					<p><a href="http://www.planrural.com/avila/casa-rural-el-cordel/">Casa Rural El Cordel</a></p>
					<p class="descripcion">
						8213<br />
						Casa completa 
					</p>
				</div>
				
  
				<div class="destacado">
					<a href="http://www.planrural.com/avila/el-calderillo/"><img src="imagenesbd/19597823_d.jpg" alt="El Calderillo - Casa rural Ávila" /></a>
					<p><b><span>Ávila</span></b></p>
					<p><a href="http://www.planrural.com/avila/el-calderillo/">El Calderillo</a></p>
					<p class="descripcion">
						428<br />
						Casa completa 
					</p>
				</div>
				
				<div class="expande">&nbsp;</div>
			</div>

          </div>
			<!--fin centro-->
		</div>
					<p>&nbsp;</p>
			
		</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-348646-1");
pageTracker._trackPageview();
} catch(err) {}</script>
		
</body>
</html>

