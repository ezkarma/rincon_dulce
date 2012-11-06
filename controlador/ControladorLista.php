<?php 
class ControladorLista{

	public static function agregar($ip,$clave){
		$lista = new Lista();
		
		$lista->ip = $ip;
		$lista->clave= $clave;
		
		$lista->guardar();
		header('Location:' . getenv('HTTP_REFERER'));
	}
	
	public static function mostrar($ip){
		$lista =Producto::desplegar($ip);	
		require("vista/lista_productos/v001.php"); 
	}
	
	public static function eliminar($ip,$clave){
		$lista = new Lista();
		
		$lista->ip = $ip;
		$lista->clave= $clave;
		$lista->eliminar();
		header('Location:' . getenv('HTTP_REFERER'));
	}

	
	public static function eliminar_lista($ip){
		$lista = new Lista();
		
		$lista->ip = $ip;
		$lista->eliminar_lista();
		header('Location: /');
	}


}
?>