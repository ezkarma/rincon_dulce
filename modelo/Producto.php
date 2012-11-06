<?php

class Producto{
	var  $clave;
	var  $nombre;
	var  $categoria;
	var  $descripcion;
	var  $cantidad;
	var  $cantidad_real;
	var  $precio;
	var  $imagen;
	

  public static function cargar_broca(){
		$con = new Connection();
		$con->start();
		
		$res = mysql_query("select * from productos where categoria like '1%';");
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
		
	  public static function cargar_machuelo(){
		$con = new Connection();
		$con->start();
		
		$res = mysql_query("select * from productos where categoria like '2%';");
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
	
	

	public static function desplegar($ip){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select idProducto,
							   nombre,
							   descripcion,
							   cantidad,
							   precio 
						from productos,venta						
						where idUsuario='".$ip."' and productos.clave=venta.idProducto;");
	$lista = array();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Lista();
		$tmp->clave = $row["idProducto"];
		$tmp->nombre = $row["nombre"];
	
		$tmp->descripcion = $row["descripcion"];
		$tmp->cantidad = $row["cantidad"];
		$tmp->precio = $row["precio"];
	
		
		$lista[] = $tmp;
		
	}	
	return $lista;
	
	}

	
	  public static function cargar_endmill(){
		$con = new Connection();
		$con->start();
		
		$res = mysql_query("select * from productos where categoria like '3%';");
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
	
	  public static function cargar_rima(){
		$con = new Connection();
		$con->start();
		
		$res = mysql_query("select * from productos where categoria like '4%';");
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
		
	public function cargar_uno($id){
	$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from productos where clave='".$id."';");
	
	$row = mysql_fetch_assoc($res);
		$this->clave = $row["clave"];
		$this->nombre = $row["nombre"];
		$this->categoria = $row["categoria"];
		$this->descripcion = $row["descripcion"];
		$this->cantidad = $row["cantidad"];
		$this->cantidad_real = $row["cantidad_real"];
		$this->precio = $row["precio"];
		$this->imagen = $row["imagen"];
		
		return true;
	}
	
	public function editar($id){
		$con = new Connection();
		$con->start();
		
		$res = mysql_query("update productos set clave='".$this->clave."',nombre='".$this->nombre."',categoria='".$this->categoria."',descripcion='".$this->descripcion."',cantidad=".$this->cantidad.",cantidad_real=".$this->cantidad_real.",precio=".$this->precio." where clave ='".$id."';");
		return true;
	}
	
	
	
	public function guardar_broca() 
	{
	$con = new Connection();
	$con->start();
	
	mysql_query("insert into productos(clave,nombre,categoria,descripcion,cantidad,cantidad_real,precio) values('".$this->clave."','".$this->nombre."','".$this->categoria."','".$this->descripcion."','".$this->cantidad."',".$this->cantidad_real.",'".$this->precio."');");  
	
	return true;
	}
	
	public function guardar_machuelo() 
	{
	$con = new Connection();
	$con->start();
	
	mysql_query("insert into productos(clave,nombre,categoria,descripcion,cantidad,cantidad_real,precio) values('".$this->clave."','".$this->nombre."','".$this->categoria."','".$this->descripcion."','".$this->cantidad."',".$this->cantidad_real.",'".$this->precio."');");  
	
	return true;
	}
	
	public function guardar_endmills() 
	{
	$con = new Connection();
	$con->start();
	
	mysql_query("insert into productos(clave,nombre,categoria,descripcion,cantidad,cantidad_real,precio) values('".$this->clave."','".$this->nombre."','".$this->categoria."','".$this->descripcion."','".$this->cantidad."',".$this->cantidad_real.",'".$this->precio."');");  
	
	return true;
	}
	
	public function guardar_rima() 
	{
	$con = new Connection();
	$con->start();
	
	mysql_query("insert into productos(clave,nombre,categoria,descripcion,cantidad,cantidad_real,precio) values('".$this->clave."','".$this->nombre."','".$this->categoria."','".$this->descripcion."','".$this->cantidad."',".$this->cantidad_real.",'".$this->precio."');");  
	
	return true;
	}
	
	public function eliminar_producto($var) 
	{
	$con = new Connection();
	$con->start();
	
	mysql_query("delete from productos where clave='".$var."';");  
	return true;
	}
}
?>
