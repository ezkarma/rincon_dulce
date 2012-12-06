<?php

class Pedido{
	var  $id_pedido;
	var  $id_cliente;
	var  $direccion;
	
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
}
?>
