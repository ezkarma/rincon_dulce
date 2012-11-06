<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <title>El Rincon Dulce</title>
  <link rel="shortcut icon" type="image/ico" href="assets/imagenes/fondo1.png"/>
	<!---TEMA -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="cart/css/styles.css" />
	<link rel="stylesheet" href="banner/styles.css" />
	
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


	<!---div id="logo" align="center" ><img src='assets/imagenes/logo_herme.png'---IMAGEN-->
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

	require("modelo/ConnectionClass.php");
	require("modelo/Broca.php");
	require("modelo/Producto.php");
	require("modelo/Admin.php");
	require("modelo/Lista.php");	
	require("controlador/ControladorBrocas.php");	
	require("controlador/ControladorAdmin.php");
	require("controlador/ControladorLista.php");
	include("assets/horizontal.html");	
		
	
?>






<div class="derecha" style="float:right">
<?php	
	if(!empty($_GET["dir"])){
	$direccion=$_GET["dir"];
		switch($direccion){
			case 'broca': if(!empty($_GET["vista"])){
					$pagina = substr($_GET["vista"], -1);
					
					if ($pagina==1)	require("vista/brocas/v001.php");
					if ($pagina==2)	require("vista/brocas/v002.php");
					if ($pagina==3)	require("vista/brocas/v003.php");
					if ($pagina==4)	require("vista/brocas/v004.php");
				}
			;break;
			
			case 'machuelo': if(!empty($_GET["vista"])){
					$pagina = substr($_GET["vista"], -1);
					
					if ($pagina==1)	require("vista/machuelos/v001.php");
					if ($pagina==2)	require("vista/machuelos/v002.php");
					if ($pagina==3)	require("vista/machuelos/v003.php");
					if ($pagina==4)	require("vista/machuelos/v004.php");
				}
			;break;
			
				case 'endmill': if(!empty($_GET["vista"])){
					$pagina = substr($_GET["vista"], -1);
					
					if ($pagina==1)	require("vista/endmills/v001.php");
					if ($pagina==2)	require("vista/endmills/v002.php");
					if ($pagina==3)	require("vista/endmills/v003.php");
					if ($pagina==4)	require("vista/endmills/v004.php");
				}
			;break;
			
			case 'rima': if(!empty($_GET["vista"])){
					$pagina = substr($_GET["vista"], -1);
					
					if ($pagina==1)	require("vista/rimas/v001.php");
					if ($pagina==2)	require("vista/rimas/v002.php");
				}
			;break;
			
			case 'autenticar': if(!empty($_GET["controller"])){	
					if($_GET["controller"]=='admin'){
					ControladorAdmin::autenticar();	
					}
				}
			;break;
			
			case 'guardar': if(!empty($_GET["controller"])){	
					if($_GET["controller"]=='admin'){
					ControladorAdmin::guardar_usuario();	
					}
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
			
			case 'nosotros': require("vista/nosotros.php");
					
			;break;
			
			case 'contacto': require("vista/contacto.php");
					
			;break;
			
			case 'servicios': require("vista/servicios.php");
					
			;break;
			
			
		}
	}
	
	//else require("banner/index.html");

	

?>
</div>

<div class="izquierda" style="float:left">
<?php
include("assets/vertical.html"); 
?>
</div>
<br>
<center><img src='images/footer.png'></center>


</html>
