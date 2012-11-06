<?php

class Broca{
	var  $clave;
	var  $nombre;
	var  $categoria;
	var  $descripcion;
	var  $cantidad;
	var  $cantidad_real;
	var  $precio;
	var  $imagen;
	
  public static function cargar($categoria){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from productos where categoria='".$categoria."';");
	$brocas = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Broca();
		$tmp->clave = $row["clave"];
		$tmp->nombre = $row["nombre"];
		$tmp->categoria = $row["categoria"];
		$tmp->descripcion = $row["descripcion"];
		$tmp->cantidad = $row["cantidad"];
		$tmp->cantidad_real = $row["cantidad_real"];
		$tmp->precio = $row["precio"];
		$tmp->imagen = $row["imagen"];
		
		$brocas[] = $tmp;
		
	}	
	return $brocas;
	
	}
}
?>
