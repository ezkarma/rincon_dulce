<?php

class Producto{
	var  $id_producto;
	var  $nombre;
	var  $precio;
	var  $categoria;
	var  $imagen;
	var  $descripcion;
	var  $porciones;
	
	
  public static function cargar($tipo){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from producto where categoria=".$tipo.";");
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
	
	public function eliminar_producto($var) 
	{
	$con = new Connection();
	$con->start();
	
	mysql_query("delete from producto where id_producto=".$var.";");  
	return true;
	}
	
	public function cargar_uno($id){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from producto where id_producto='".$id."';");
	
	$row = mysql_fetch_assoc($res);
		$this->id_producto = $row["id_producto"];
		$this->nombre = $row["nombre"];
		$this->precio = $row["precio"];
		$this->categoria = $row["categoria"];
		$this->descripcion = $row["descripcion"];
		$this->porciones = $row["porciones"];
	
		
		return true;
	}
	
		public function editar($id){
		$con = new Connection();
		$con->start();
				
		$res = mysql_query("update producto set nombre='".$this->nombre."',categoria=".$this->categoria.",descripcion='".$this->descripcion."',porciones=".$this->porciones.",precio=".$this->precio." where id_producto=".$id.";");
		return true;
	}
}
?>
