<?php
session_start();
class Admin{
	var  $usuario;
	var  $contrasena;
	var  $enlace;
	var  $comentario;
		
	public function autentico(){
		
		$con = new Connection();
		$con->start();
			$query = @mysql_query('select * from usuarios where usuario="'.mysql_real_escape_string($this->usuario).'" AND contrasena="'.mysql_real_escape_string($this->contrasena).'"');
			
			if($existe = @mysql_fetch_object($query)){
				$_SESSION['logiado'] = 'si';
				$_SESSION['usuario'] = $this->usuario;
				header('Location: ../admin/menuadmin.php');
			}else{
				$_SESSION['logiado'] = 'no';
				echo "entro en no ". $_SESSION['usuario'] = $this->usuario;
				//header('Location:http://localhost:8080/MyPHP/logeado.php');
			}
		}	
		

	public function guardar(){
		$con = new Connection();
		$con->start();
		$qry = "insert into usuarios(usuario,contrasena) values('".$this->usuario."','".$this->contrasena."');";
		
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
