<?php

class Carrito{
	var  $producto;
	var  $nombre;
	var  $cliente;
	var  $precio;
	var  $cantidad;
	var  $subtotal;
	
	
  public static function cargar(){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from carrito,producto where carrito.id_cliente='".$_SESSION['usuario']."' and carrito.id_producto=producto.id_producto;");
	$carritos = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Carrito();
		$tmp->producto = $row["id_producto"];
		$tmp->nombre = $row["nombre"];
		$tmp->precio = $row["precio"];
		$tmp->cliente= $row["id_cliente"];
		$tmp->cantidad = $row["cantidad"];
		$tmp->subtotal = $row["subtotal"];
	
	$carritos[] = $tmp;
		
	}	
	return $carritos;
	
	}
	
	public static function eliminar($clave){
	$con = new Connection();
	$con->start();
	mysql_query("delete from carrito where id_producto='".$clave."' and id_cliente = '".$_SESSION['usuario']."';");
	}
}
?>


