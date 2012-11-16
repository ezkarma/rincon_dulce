<?php

class Producto{
	var  $id_producto;
	var  $nombre;
	var  $precio;
	var  $categoria;
	var  $imagen;
	var  $descripcion;
	var  $porciones;
	
	
  public static function cargar(){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from producto;");
	$productos = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Producto();
		$tmp->id_producto = $row["id_producto"];
		$tmp->nombre = $row["nombre"];
		$tmp->precio = $row["precio"];
		$tmp->categoria = $row["categoria"];
		$tmp->imagen = $row["imagen"];
		$tmp->descripcion = $row["descripcion"];
		$tmp->porciones = $row["porciones"];
		
		
		$productos[] = $tmp;
		
	}	
	return $productos;
	
	}
}
?>
