<?php 
class Lista{
	var  $ip;
	var	 $clave;
	
	public function guardar(){
		$con = new Connection();
		$con->start();
		$qry = "insert into venta(idUsuario,idProducto) values('".$this->ip."','".$this->clave."');";
		
		mysql_query($qry); 
		return true;
	}
	
	public function eliminar(){
		$con = new Connection();
		$con->start();
		$qry = "delete from venta where idUsuario='".$this->ip."' and idProducto= '".$this->clave."';";
		mysql_query($qry); 
		return true;
	}
	
	public function eliminar_lista(){
		$con = new Connection();
		$con->start();
		$qry = "delete from venta where idUsuario='".$this->ip."';";
		mysql_query($qry); 
		return true;
	}
	


}?>