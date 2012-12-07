<?php

class Pedido{
	var  $id_pedido;
	var  $id_cliente;
	var  $direccion;
	
	var $id_producto;
	var $cantidad;
	var $subtotal;
	
	var $nombre;
	var $precio;
	
  public static function cargar(){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from pedidos where pedidos.id_cliente='".$_SESSION['usuario']."'");
	$pedidos = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Pedido();
		$tmp->id_pedido = $row["id_pedido"];
		$tmp->id_cliente = $row["id_cliente"];
		$tmp->direccion = $row["direccion"];
	
	$pedidos[] = $tmp;
		
	}	
	return $pedidos;
	
	}
	
	public static function cargar_detalle($id_pedido){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from detalle_pedido,producto where detalle_pedido.id_pedido=".$id_pedido." and detalle_pedido.id_producto=producto.id_producto;");
	$pedidos = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Pedido();
		$tmp->nombre = $row["nombre"];
		$tmp->precio = $row["precio"];
		$tmp->cantidad = $row["cantidad"];
		$tmp->subtotal = $row["subtotal"];
	
	$pedidos[] = $tmp;
		
	}	
	return $pedidos;
	
	}
}
?>
