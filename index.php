<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <title>El Rincon Dulce</title>
  <link rel="shortcut icon" type="image/ico" href="assets/imagenes/fondo1.png"/>
  <script src="/assets/jquery.js"></script>
	
	<!---TEMA -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cart/css/styles.css" />
	<link rel="stylesheet" href="banner/styles.css" />
	
	<!--ACEPTAR SOLO NUMEROS O LETRAS -->
	<script src="/assets/validacion/validacion_nl.js" type="text/javascript"></script>
	
	
	
	<!-- Barra de Menu -->
	<link href="assets/css/softblue.css" rel="stylesheet" type="text/css">	
	
	<!-- Banner-->	
	<link rel="stylesheet" href="banner/style.css" type="text/css" media="screen" />
	<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
	<script type="text/javascript" src="banner/js/jquery.js"></script>
	<script type="text/javascript" src="banner/js/scripts.js"></script>
	
	<!-- Menú Vertical -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<link href="assets/css/dcdrilldown.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/skins/demo.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dcdrilldown.1.2.min.js"></script>


	<div id="logo" align="center" ><img src='assets/imagenes/logo.jpg'>
	<br>
	<br>

	
	<style type="text/css">	 
	.izquierda {  
         padding-left: 5px;  
    } 
   
    .derecha {  
         padding-right: 50px;  
    }  
	.centro
	{
		display: block;
		margin-left: auto;
		margin-right: auto
	}
	}

}
	
  </style>  
		
	
<?php 
	session_start();
	
	require("modelo/ConnectionClass.php");
	require("modelo/Producto.php");
	require("modelo/Admin.php");
	require("modelo/Carrito.php");
		
	require("controlador/ControladorPedido.php");	
	require("controlador/ControladorAdmin.php");

	require("controlador/ControladorCatalogo.php");
	include("assets/horizontal.html");
	
?>






<div class="derecha" style="float:right">
<?php	
	if(!empty($_GET["dir"])){
	$direccion=$_GET["dir"];
		switch($direccion){
			case 'catalogo':{
			if(empty($_GET["categoria"]))ControladorCatalogo::mostrarcatalogo();
			if(!empty($_GET["categoria"])){
			ControladorCatalogo::mostrarbodas();
			}
			};
			break;
			
			case 'broca': if(!empty($_GET["vista"])){
					$pagina = substr($_GET["vista"], -1);
					
					if ($pagina==1)	require("vista/brocas/v001.php");
					if ($pagina==2)	require("vista/brocas/v002.php");
					if ($pagina==3)	require("vista/brocas/v003.php");
					if ($pagina==4)	require("vista/brocas/v004.php");
				}
			;break;
						
			case 'autentificar': ControladorAdmin::autenticar();break;
			case 'registro': ControladorAdmin::registro();break;
			case 'carrito': ControladorPedido::carrito();break;
			case 'ordenar': ControladorPedido::ordenar();break;
			case 'registrar_usuario': ControladorAdmin::registrar_usuario();break;
			case 'cuenta': echo "<font size='4' color='green'>Usted ha ingresado a su cuenta satisfactoriamente<br><br>";break;
			case 'guardar': if(!empty($_GET["controller"])){	
					if($_GET["controller"]=='admin'){
					ControladorAdmin::guardar_usuario();	
					}
				}
			;break;
			case 'salir': {
			
			$_SESSION['logiado'] = 'no';
			header('Location:/');
			
			}
			;break;
			
			case 'agregar_carrito': 
				if(!empty($_GET["cliente"]) && !empty($_GET["producto"])){	
					ControladorPedido::agregar_carrito($_GET["cliente"],$_GET["producto"]);
					}
									
					
				
			;break;	
			
			case 'video': if(!empty($_GET["controller"])){	
					if($_GET["controller"]=='mostra_video'){
					ControladorAdmin::mostrar_video_cliente();	
					}
					if($_GET["controller"]=='mostra_video_productos'){
					ControladorAdmin::mostrar_video_productos();	
					}
				}
			;break;
			
			
			case 'lista': if(!empty($_GET["accion"])){	
					if($_GET["accion"]=='agregar'){
					$clave = $_GET["clave"];
					$ip = $_SERVER['REMOTE_ADDR'];
					ControladorLista::agregar($ip,$clave);	
					}
					
					if($_GET["accion"]=='eliminar'){
					$clave = $_GET["clave"];
					$ip = $_SERVER['REMOTE_ADDR'];
					ControladorLista::eliminar($ip,$clave);	
					}
				}
			;break;

			case 'lista_pedido': if(!empty($_GET["accion"])){	
					if($_GET["accion"]=='lista_eliminar'){
					$ip = $_SERVER['REMOTE_ADDR'];
					ControladorLista::eliminar_lista($ip);	
					}
					
					if($_GET["accion"]=='mostrar'){
					$ip = $_SERVER['REMOTE_ADDR'];
					ControladorLista::mostrar($ip);	
					}
				}
			;break;	
			
			case 'editar_cuenta': ControladorAdmin::editar_cuenta();break;
			
			case 'nosotros': require("vista/nosotros.php");
					
			;break;
			
			case 'contacto': require("vista/contacto.php");
					
			;break;
			
			case 'servicios': require("vista/servicios.php");
					
			;break;
			
			
		}
	}
	
	else {
		echo "<br><font size='3'> Bienvenido al Rincon Dulce Hoy es: ";
date_default_timezone_set('America/Mexico_City');


echo date("j F, Y, g:i a");
echo "<br></font>";
		require("banner/index.html");
	}

	

?>
</div>

<div class="izquierda" style="float:left">
<?php
if(!isset($_SESSION['logiado']) || $_SESSION['logiado']!='si'){
?>
<form name="login" action="/?dir=autentificar"   method="post">
<br><br>
				<font color="orange" size="3">Ingrese a su cuenta:</font><br><br>
				<font color="orange">Usuario:</font><br><input type="text" name="usuario" size="45"/><br>
				<font color="orange">Contrase&ntilde;a:</font><br><input type="password" name="contrasena" size="45"/><br>
				<div class="box3">
				<br>
				<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="submit" value="Ingresar"/>Ingresar</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-danger" type="button"  onClick="parent.location='?dir=registro'" value="Registrarse"/>Registrarse</button>&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
</form>

<?php
}
else {
echo "<font color='green' size='3'>";
echo "Bienvenido ".$_SESSION['nombre'];
echo "</font>";

?>
<br><br>
<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="button"  onClick="parent.location='?dir=carrito'" value="Registrarse"/>Mi Carrito</button>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-info" type="button"  onClick="parent.location='?dir=editar_cuenta'" value="Registrarse"/>Editar Cuenta</button>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="button"  onClick="parent.location='?dir=salir'" value="Registrarse"/>Mis Pedidos</button>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="button"  onClick="parent.location='?dir=salir'" value="Registrarse"/>Mis Cursos</button>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-danger" type="button"  onClick="parent.location='?dir=salir'" value="Registrarse"/>Salir</button>&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}
?>
</div>
<br>

<center>
<table>


	</table>
</center>

<center><img src='images/footer.jpg'></center>


</html>
