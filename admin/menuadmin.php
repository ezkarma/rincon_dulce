<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<!---TEMA -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	
	<!-- Barra de Menu -->
	<link href="../assets/css/softblue.css" rel="stylesheet" type="text/css">	
		
	<!-- Menú Vertical -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<link href="assets/css/dcdrilldown.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/skins/demo.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dcdrilldown.1.2.min.js"></script>

	
	<br>
	<center><img src='../assets/imagenes/logo.jpg'/></center>
	<br><br>
	<style type="text/css">	 
	.izquierda {  
         padding-left: 5px;  
    } 
   
    .derecha {  
         padding-right: 50px;  
    }  
	
  </style>  
  
  <?php 
	require("../modelo/Producto.php");
	require("../modelo/connectionClass.php");
	require("../controlador/controladorAdmin.php");	
	require("../modelo/Admin.php");		
	include("../assets/h_admin.html");	
	session_start();
	
	
?>

<?php	
	if(isset($_SESSION['admin'])){

	if(!empty($_GET["dir"])){
	$direccion=$_GET["dir"];
		switch($direccion){
		
			case 'video': if(!empty($_GET["accion"]))
			{
					if($_GET["accion"]=='mostrar'){
						ControladorAdmin::mostrar_video();
					}
					
					if($_GET["accion"]=='mostrar_productos'){
						ControladorAdmin::mostrar_video_producto_admin();
					}
					
					if($_GET["accion"]=='actualizar'){
						ControladorAdmin::cambiar_video();
					}
					if($_GET["accion"]=='guardar'){
						ControladorAdmin::guardar_video();	
					}
					if($_GET["accion"]=='guardar_producto'){
						ControladorAdmin::cambiar_video_producto($_GET['a']);	
					}
				}
			;break;
			
			case 'usuario': if(!empty($_GET["accion"])){
					if($_GET["accion"]=='salir'){
					/*$_SESSION = array(); 
						if (ini_get("session.use_cookies")) {
							$params = session_get_cookie_params();
							setcookie(session_name(), '', time() - 42000,
							$params["path"], $params["domain"],
							$params["secure"], $params["httponly"]);
						}
					*/
					session_destroy();
					
					//$_SESSION['admin']=false;
					
					header('Location: /');	
					}
				}
			;break;
			
			case 'productos': if(!empty($_GET["accion"])){			
					if($_GET["accion"]=='agregar'){
						ControladorAdmin::agregar_broca();
					}
						if($_GET["accion"]=='agregar_machuelo'){
						ControladorAdmin::agregar_machuelo();
					}
						if($_GET["accion"]=='agregar_endmills'){
						ControladorAdmin::agregar_endmills();
					}
						if($_GET["accion"]=='agregar_rima'){
						ControladorAdmin::agregar_rima();
					}
					if($_GET["accion"]=='mostrar'){
						ControladorAdmin::mostrar_productos();
					}
					if($_GET["accion"]=='mostrar_machuelos'){
						ControladorAdmin::mostrar_machuelos();
					}
					if($_GET["accion"]=='mostrar_endmills'){
						ControladorAdmin::mostrar_endmills();
					}
					if($_GET["accion"]=='mostrar_rimas'){
						ControladorAdmin::mostrar_rimas();
					}
						
						
					if($_GET["accion"]=='guardar_broca'){
						ControladorAdmin::guardar_broca();
					}
					if($_GET["accion"]=='guardar_machuelo'){
						ControladorAdmin::guardar_machuelo();
					}
					if($_GET["accion"]=='guardar_endmills'){
						ControladorAdmin::guardar_endmills();
					}
					if($_GET["accion"]=='guardar_rima'){
						ControladorAdmin::guardar_rima();
					}
					
					//ELIMINAR
					
					if($_GET["accion"]=='eliminar_producto'){
						$clave=$_GET["clave"];
						ControladorAdmin::eliminar_producto( $clave);
					}
					
					
					//EDITAR
					
					if($_GET["accion"]=='editar'){
						$clave=$_GET["clave"];
						ControladorAdmin::editar( $clave);						
					}
					
				
					
					//GUARDAR EDICION
					
					if($_GET["accion"]=='guardaredicion_broca'){
						$clave=$_GET["clave"];
						ControladorAdmin::guardar_edicion_broca( $clave);						
					}
					
					if($_GET["accion"]=='guardaredicion_machuelo'){
						$clave=$_GET["clave"];
						ControladorAdmin::guardar_edicion_machuelo( $clave);						
					}
					
					if($_GET["accion"]=='guardaredicion_endmill'){
						$clave=$_GET["clave"];
						ControladorAdmin::guardar_edicion_endmill( $clave);						
					}
					
					if($_GET["accion"]=='guardaredicion_rima'){
						$clave=$_GET["clave"];
						ControladorAdmin::guardar_edicion_rima( $clave);						
					}
				}
			;break;			
			
		}
	}
	else echo "<br><center><img src='../images/admin.png'/></center>";
	
	}
	else{
		header('Location: HTTP/1.0 404 Not Found');
	}
	
	
?>
</div>

	
	

