<?php
class ControladorAdmin{

	public static function autenticar(){
		$administrador = new Admin();
		
		$administrador->correo = strip_tags($_POST['usuario']);
		$administrador->clave= strip_tags(sha1($_POST['contrasena']));
	
		$administrador->autentico();
		
	}
	
	public static function editar_cuenta(){
	$cliente=Admin::editar_cuenta();		
	require ("vista/editar_cuenta.php");
	}
		
	
	
	public static function registro(){
		require("vista/registro.php");	
	}
	
	public static function registrar_usuario(){
		$administrador = new Admin();
		
		$administrador->nombre = strip_tags($_POST['nombre']);
		$administrador->apellidos = strip_tags($_POST['apellidos']);
		$administrador->telefono = strip_tags($_POST['telefono']);
		$administrador->direccion = strip_tags($_POST['direccion']);
		$administrador->correo = strip_tags($_POST['usuario']);
		$administrador->clave= strip_tags(sha1($_POST['contrasena']));
		
		
		$administrador->guardar_usuario();	
	}
	
	public static function mostrar_productos(){
		require("mostrar_productos.php");	
	}
	
	public static function mostrar_machuelos(){
		require("mostrar_machuelos.php");	
	}
	
	public static function mostrar_endmills(){
		require("mostrar_endmills.php");
	}
	
	public static function mostrar_rimas(){
		require("mostrar_rimas.php");
	}
	
	public static function agregar_broca(){
		require("productos/agregar_broca.php");	
	}
	public static function agregar_machuelo(){
		require("productos/agregar_machuelo.php");	
	}
	public static function agregar_endmills(){
		require("productos/agregar_endmills.php");	
	}
	public static function agregar_rima(){
		require("productos/agregar_rima.php");	
	}
	
//EDITAR PRODUCTOS	
	public static function editar($var){
		$producto = new Producto();
		$producto->cargar_uno($var);
		require("editar_producto.php");	
	}

		

//GUARDAR EDICIONES	
	public static function guardar_edicion_broca($var){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '1'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	$producto->editar($var);
	
	header('Location: ?dir=productos&accion=mostrar_brocas');	
	}
	
	public static function guardar_edicion_machuelo($var){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '2'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	
	$producto->editar($var);
	
	header('Location: ?dir=productos&accion=mostrar_machuelos');	
	}
	
	public static function guardar_edicion_endmill($var){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '3'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'].$_POST['e'].$_POST['f'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	
	$producto->editar($var);
	
	header('Location: ?dir=productos&accion=mostrar_endmills');	
	}
	
	public static function guardar_edicion_rima($var){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '4'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	
	$producto->editar($var);
	
	header('Location: ?dir=productos&accion=mostrar_rimas');	
	}
	
	
	
/////ELIMINAR	

	public static function eliminar_producto($var){
		Producto::eliminar_producto($var);
		header('Location: ?dir=productos&accion=mostrar');		
	}
	
	public static function eliminar_machuelo($var){
		Producto::eliminar_producto($var);
		header('Location: ?dir=productos&accion=mostrar_machuelos');		
	}
	
	public static function eliminar_endmill($var){
		Producto::eliminar_producto($var);
		header('Location: ?dir=productos&accion=mostrar_endmills');		
	}
	
	public static function eliminar_rima($var){
		Producto::eliminar_producto($var);
		header('Location: ?dir=productos&accion=mostrar_rimas');		
	}
	

///////GUARDAR PRODUCTOS	
	public static function guardar_broca(){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '1'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	$producto->guardar_broca();
	
	header('Location: ?dir=productos&accion=mostrar_brocas');	
	}
	
	public static function guardar_machuelo(){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '2'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	$producto->guardar_machuelo();
	
	header('Location: ?dir=productos&accion=mostrar_machuelos');	
	}
	public static function guardar_endmills(){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '3'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'].$_POST['e'].$_POST['f'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	$producto->guardar_endmills();
	
	header('Location: ?dir=productos&accion=mostrar_endmills');	
	}
	public static function guardar_rima(){
	$producto = new Producto();
	
	$producto->clave = $_POST['clave'];
	$producto->nombre = $_POST['nombre'];
	$producto->categoria = '4'.$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'];
	$producto->descripcion = $_POST['descripcion'];
	$producto->cantidad = $_POST['cantidad'];
	$producto->cantidad_real = $_POST['cantidad_real'];
	$producto->precio = $_POST['precio'];
	
	$producto->guardar_rima();
	
	header('Location: ?dir=productos&accion=mostrar_rimas');	
	}
	
	public static function mostrar_video_producto_admin(){
		$video2 = new Admin();
		$video2->carga_video_productos2();
		$video3 = new Admin();
		$video3->carga_video_productos3();
		$video4 = new Admin();
		$video4->carga_video_productos4();
		$video5 = new Admin();
		$video5->carga_video_productos5();
		require("cambiar_video2.php");
	}
	
	public static function mostrar_video(){
		$video = new Admin();
		$video->carga_video();
		require("cambiar_video.php");
	}	

	public static function guardar_video(){
		$video = new Admin();
		$video->guarda_video();
		require("../admin/cambiar_video.php");
	}
	
	

	public static function mostrar_video_cliente(){
		$video = new Admin();
		$video->carga_video();
		require("vista/video/player.php");
	}
	
	public static function mostrar_video_productos(){
		
		$video2 = new Admin();
		$video2->carga_video_productos2();
		$video3 = new Admin();
		$video3->carga_video_productos3();
		$video4 = new Admin();
		$video4->carga_video_productos4();
		$video5 = new Admin();
		$video5->carga_video_productos5();
		
		require("vista/video/player_productos.php");
	}
	
	public static function cambiar_video(){
		$video = new Admin();
		$video->enlace 			= $_POST['video'];
		$video->comentario		= $_POST['comentario'];
		$video->actualizar_video();
		require("cambiar_video.php");
	}
	
	public static function cambiar_video_producto($a){
		$video = new Admin();
		$video->enlace 			= $_POST['video'];
		$video->comentario		= $_POST['comentario'];
		
		$video->actualizar_video_producto($a);
		header('Location: ?dir=video&accion=mostrar_productos');
	}
	
	

}	
?>