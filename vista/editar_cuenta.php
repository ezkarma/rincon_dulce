<html>
<div style="width:1000px">
<form class="cmxform" id="texttests" name="myform" action="/?dir=registrar_usuario" method="post">
<br><br>
				
				<font color="orange" size="5">Edite su cuenta:</font><br><br>
				<font size="3">Datos Generales</font>
				<br><br>
				<table>
				<tr><td align="right"><font color="orange">Nombre:</font></td><td><input type="text" value="<?php echo $cliente->nombre ?>" onkeypress="return letras(event)" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Apellidos:</font></td><td><input type="text" value="<?php echo $cliente->apellidos ?>" name="apellidos" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Telefono:</font></td><td><input type="text" value="<?php echo $cliente->telefono ?>" name="telefono" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Direccion:</font></td><td><input type="text" value="<?php echo $cliente->direccion ?>"name="direccion" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Correo Electronico:</font></td><td><input type="text"value="<?php echo $cliente->correo ?>" name="usuario" size="45"/></td></tr>
				</table>
				<br><br>
				
				<font size="3">Cambiar Contrase&ntilde;a</font>
				<br><br>
				<table>
				<tr><td align="right"><font color="orange">Contrase&ntilde;a:</font></td><td><input type="password" value="" name="contrasena" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Nueva Contrase&ntilde;a:</font></td><td><input type="password" value="" name="contrasena" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Confirmar Contrase&ntilde;a:</font></td><td><input type="password" value="" name="contrasena" size="45"/></td></tr>
				</table>
				<br>
				<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="submit" value="Ingresar"/>Guardar Cambios</button>&nbsp;&nbsp;&nbsp;&nbsp;
				
</form>
</div>
<br><br><br>
</html>