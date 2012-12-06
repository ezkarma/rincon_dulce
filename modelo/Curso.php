<?php

class Curso{
	var  $id_curso;
	var  $nombre;
	var  $duracion;
	var  $horario;
	var  $costo;
	var  $descripcion;
		
  public function guardar(){
	$con = new Connection();
	$con->start();
	
	mysql_query("insert into cursos(nombre,duracion,horario,costo,descripcion) values ('".$this->nombre."','".$this->duracion."','".$this->horario."',".$this->costo.",'".$this->descripcion."')");
	
	}
	
  public static function cargar(){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from cursos;");
	$cursos = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Curso();
		$tmp->id_curso = $row["id_curso"];
		$tmp->nombre = $row["nombre"];
		$tmp->duracion = $row["duracion"];
		$tmp->horario = $row["horario"];
		$tmp->costo = $row["costo"];
		$tmp->descripcion = $row["descripcion"];
				
		$cursos[] = $tmp;
		
	}	
	return $cursos;
	
	}
	
	public function eliminar($var) 
	{
		$con = new Connection();
		$con->start();
		
		mysql_query("delete from cursos where id_curso=".$var.";");  
	return true;
	}
	
}
?>
