<?php
class Admin{
	var  $nombre;
	var  $apellidos;
	var  $telefono;
	var  $direccion;
	var  $correo;
	var  $clave;
	var  $enlace;
	var  $comentario;

		
	public function autentico(){
		
		$con = new Connection();
		$con->start();
			$query = @mysql_query('select * from clientes where correo="'.mysql_real_escape_string($this->correo).'" AND clave="'.mysql_real_escape_string($this->clave).'"');
			
			if($existe = @mysql_fetch_assoc($query)){
				$_SESSION['logiado'] = 'si';
				$_SESSION['usuario'] = $this->correo;
				$res = mysql_query('select * from clientes where correo="'.mysql_real_escape_string($this->correo).'";');
			
					while($row = mysql_fetch_assoc($res)){
						
						
						$_SESSION['nombre'] = $row["nombre"];
						$_SESSION['direccion'] = $row["direccion"];
						if($row["prioridad"]==1) $_SESSION['admin'] = true;
						else $_SESSION['admin'] = false;
						
					}	
				/*if($_SESSION['admin'] == true){
				 // ensures anything dumped out will be caught
					// clear out the output buffer
						while (ob_get_status()) 
						{
							ob_end_clean();
						}
				header('Location: admin/menuadmin.php');
				}
				else {
					
						
							
						
					header('Location: /?dir=cuenta');
					}*/
			}else{
				$_SESSION['logiado'] = 'no';
				echo "<div style='width:1000'><font color='red' size='4'><center>El usuario o password que ah ingresado son incorrectos, por favor intente de nuevo<center></font><br></div>";
				//header('Location:http://localhost:8080/MyPHP/logeado.php');
			}
			
		}	
	
	public static function editar_cuenta(){
		$con = new Connection();
	$con->start();
	
	$res = mysql_query("select * from clientes where correo='".$_SESSION['usuario']."';");
	$clientes = new Admin();
	while($row = mysql_fetch_assoc($res)){
		$tmp = new Admin();
		
		$tmp->nombre = $row["nombre"];
		$tmp->apellidos = $row["apellidos"];
		$tmp->telefono = $row["telefono"];
		$tmp->direccion = $row["direccion"];
		$tmp->correo= $row["correo"];
		$tmp->clave = $row["clave"];
				
		
		$cliente = $tmp;
		
	}
	return $cliente;
	}

	public function guardar_usuario(){
		$con = new Connection();
		$con->start();
		
		$qry = "insert into clientes values('".$this->nombre."','".$this->apellidos."','".$this->telefono."','".$this->direccion."','".$this->correo."','".$this->clave."',0);";
		
		mysql_query($qry); 
		return true;
	}	
	
	public function guarda_video()
	{
		$con = new Connection();
		$con->start();
		$qry = mysql_query("insert into video(enlace,comentario) values(".$this->enlace.",".$this->comentario.");");
		
		$row = mysql_fetch_assoc($qry);
			$this->enlace = $row["enlace"];
			$this->comentario = $row["comentario"];				
		return true;
	}
	
	public function guarda_video_producto($a)
	{
		$con = new Connection();
		$con->start();
		
		$qry ="update video set enlace='".$this->enlace."', comentario='".$this->comentario."' where id=".$a.";";
	
		mysql_query($qry);
		return true;
			
	}
	
	public function carga_video(){
		$con = new Connection();
		$con->start();
		$qry = mysql_query("select * from video where id=1;");
		
		$row = mysql_fetch_assoc($qry);
			$this->enlace = $row["enlace"];
			$this->comentario = $row["comentario"];				
	
		return true;
	}
	
	public function carga_video_productos2(){
		$con = new Connection();
		$con->start();
		$qry = mysql_query("select * from video where id=2;");
		
		$row = mysql_fetch_assoc($qry);
			$this->enlace2 = $row["enlace"];
			$this->comentario2 = $row["comentario"];				
	
		return true;
	}
	
	public function carga_video_productos3(){
		$con = new Connection();
		$con->start();
		$qry = mysql_query("select * from video where id=3;");
		
		$row = mysql_fetch_assoc($qry);
			$this->enlace3 = $row["enlace"];
			$this->comentario3 = $row["comentario"];				
	
		return true;
	}
		public function carga_video_productos4(){
		$con = new Connection();
		$con->start();
		$qry = mysql_query("select * from video where id=4;");
		
		$row = mysql_fetch_assoc($qry);
			$this->enlace4 = $row["enlace"];
			$this->comentario4 = $row["comentario"];				
	
		return true;
	}
		public function carga_video_productos5(){
		$con = new Connection();
		$con->start();
		$qry = mysql_query("select * from video where id=5;");
		
		$row = mysql_fetch_assoc($qry);
			$this->enlace5 = $row["enlace"];
			$this->comentario5 = $row["comentario"];				
	
		return true;
	}
	
	public function actualizar_video(){
	$con = new Connection();
	$con->start();
	$qry = "update video set enlace = '".$this->enlace."', comentario= '".$this->comentario."'  where id=1;";
	mysql_query($qry);  
	return true;
	}
	
	public function actualizar_video_producto($a){
	$con = new Connection();
	$con->start();
	$qry = "update video set enlace = '".$this->enlace."', comentario= '".$this->comentario."'  where id=".$a;
	mysql_query($qry);  
	return true;
	}

}
?>
