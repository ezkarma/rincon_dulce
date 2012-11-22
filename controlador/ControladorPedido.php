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
	
	public static function ordenar(){
		$carritos = Carrito::cargar();
		require("vista/orden.php"); 		
	}
			
	}
	
	
?>
