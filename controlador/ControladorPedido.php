<?php

class ControladorPedido{

	public static function agregar_carrito($cliente,$producto){
	$con = new Connection();
	$con->start();
		echo $cliente;
		echo $producto;
		mysql_query("insert into pedidos(id_cliente,id_producto) values ('".$cliente."', '".$producto."');");
			
	}
	
	public static function mostrarbodas(){
		require("vista/bodas.php"); 		
	}
			
	}
	
	
?>
