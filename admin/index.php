<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!---TEMA -->
	<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	.box{
		margin:150px 0px 30px;
		float:center;
		width:30%;
		height:400px;
		z-index:1; 
		top:0px;
		border:1px solid gray;
		text-align:center;
		font-size:14px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
	.box1{
		margin:10px 0px 30px ;
		float:center;
		width:80%;
		height:150px;
		z-index:1; 
		top:0px;
		border:0px solid gray;
		text-align:right;
		font-size:14px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
	.box2{
		margin:70px 0px 20px;
		float:center;
		width:100%;
		z-index:1; 
		top:0px;
		border:0px solid gray;
		text-align:center;
		font-size:14px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
	.box3{
		margin:10px 0px 20px 40px;
		float:center;
		width:100%;
		z-index:1; 
		top:0px;
		border:0px solid gray;
		text-align:center;
		font-size:14px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
	</style>
	<body>
		<center>
		<div class="box">
		<div class="box2" >
			<blockquote><font color="orange" size="4px" >Ingresa a tu portal:</font></blockquote><br>	
		</div>
		
		<div class="box1">			
			<form name="login" action="/?dir=autenticar&controller=admin"  method="post">
				<font color="orange">Usuario:</font>&nbsp;<input type="text" name="usuario" size="45"/><br>
				<font color="orange">Contrase&ntilde;a:</font>&nbsp;<input type="password" name="contrasena" size="45"/><br>
				<div class="box3">
				<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="submit" value="Ingresa"/>Ingresa</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button text style="font-weight:bold;" title="Cancelar" name="Cancelar" type="button"  class="btn btn-danger" onClick="parent.location='../'" value="Cancelar">Cancelar</button>
				</div>
			</form>
		</div>
		</div>
		</center>
	</body>
</html>