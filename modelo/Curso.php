<?php

class Curso{
	var  $id_producto;
	var  $nombre;
	var  $precio;
	var  $categoria;
	var  $imagen;
	var  $descripcion;
	var  $porciones;
	
	
  public static function guardar(){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("insert into cursos(nombre,duracion,horario,costo,descripcion) values ()");
	
	
	}
	
}
?>
