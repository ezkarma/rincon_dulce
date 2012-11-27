<?php
	class Archivo{
	
	var $alumno_correo;
	var $nombre;
	var $tipo;
	var $ruta;
	
	
	public static function guardar_file($alumno_correo, $tipo, $ruta) {
		$con = new Connection();
		$con->start();
		$qry = "call inserta_documento('".$alumno_correo."','".$tipo."','".$ruta."');";
		$res = mysql_query($qry);
		
		if ( ! $res === null){
		
		echo "<script language=\"JavaScript\" type=\"text/javascript\">";
		echo "alert(\"Ha ocurrido un problema al subir el archivo, intenta nuevamente por favor.\");";
		echo "window.location='/?dir=editar&controller=alumnos&id=$alumno_correo';";
		echo "</script>";
		return $res;
		}
		else{

		echo "<script language=\"JavaScript\" type=\"text/javascript\">";
		echo "alert(\"El archivo ha subido exitosamente!\");";
		echo "window.location='/?dir=editar&controller=alumnos&id=$alumno_correo';";
		echo "</script>";
		return true;
		}
		
		
	}
	
	
		public static function update_file($alumno_correo, $tipo, $ruta) {
		$con = new Connection();
		$con->start();
		$qry = "call actualiza_documento('".$alumno_correo."','".$tipo."','".$ruta."');";
		$res = mysql_query($qry);
		
		if ( ! $res === null){
		
		echo "<script language=\"JavaScript\" type=\"text/javascript\">";
		echo "alert(\"Ha ocurrido un problema al subir el archivo, intenta nuevamente por favor.\");";
		echo "window.location='/?dir=editar&controller=alumnos&id=$alumno_correo';";
		echo "</script>";
		return $res;
		}
		else{

		echo "<script language=\"JavaScript\" type=\"text/javascript\">";
		echo "alert(\"El archivo ha subido exitosamente!\");";
		echo "window.location='/?dir=editar&controller=alumnos&id=$alumno_correo';";
		echo "</script>";
		return true;
		}
		
	}

	public static function cargar($alumno_correo, $tipo){
		$con = new Connection();
		$con->start();
		$qry = "call dame_url('".$alumno_correo."','".$tipo."');";
		$res = mysql_query($qry);

		$fila = mysql_fetch_row($res);

		$vinculo= utf8_decode($fila[0]);
		$con -> close();
		//echo "<a href=".$vinculo.">Descargar</a>";
		return $vinculo;
		

		
	}	
	//return $profesores;
	
	
	
	
}
	
	
?>