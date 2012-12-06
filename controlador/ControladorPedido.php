<?php

class ControladorPedido{

	public static function agregar_carrito($cliente,$producto){
	$con = new Connection();
	$con->start();
		echo $cliente;
		echo $producto;
		mysql_query("insert into carrito values ('".$producto."','".$cliente."', 1,1);");
			
	}
	
	public static function mostrarbodas(){
		require("vista/bodas.php"); 		
	}
	
	public static function carrito(){
		$carritos = Carrito::cargar();
		require("vista/carrito.php"); 		
	}
	
	public static function eliminar_carrito($clave){
		Carrito::eliminar($clave);
		$carritos = Carrito::cargar();
		require("vista/carrito.php"); 		
	}
	
	public static function ordenar(){
		$carritos = Carrito::cargar();
		require("vista/orden.php"); 		
	}
	
	public static function generar_pedido(){
		$con = new Connection();
		$con->start();
		$carritos = Carrito::cargar();
		
		mysql_query("insert into pedidos(id_cliente,direccion) values ('".$_SESSION['usuario']."','".$_POST['direccion']."');");
		
		$res =  mysql_query("select count(id_pedido) as contador from pedidos;");
		while($row = mysql_fetch_assoc($res)){
				$contador = $row["contador"];
	}
		$res = mysql_query("select * from carrito,producto where carrito.id_cliente='".$_SESSION['usuario']."' and carrito.id_producto=producto.id_producto;");
	$carritos = array();
	while($row = mysql_fetch_assoc($res)){
		mysql_query("insert into detalle_pedido values (".$contador.",'".$row["id_producto"]."',1,".$row["precio"].");");
	
	
		
	}	
		mysql_query("delete from carrito where carrito.id_cliente='".$_SESSION['usuario']."';");
				
	}
			
	}
	
	
?>
