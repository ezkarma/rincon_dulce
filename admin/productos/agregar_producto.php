<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script src="../../assets/jquery.js"></script>
<!--MOSTRAR ERRORES-->
	<script src="../../assets/validacion/jquery.validate.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../../assets/validacion/errores.css" type="text/css">
	
<!--ACEPTAR SOLO NUMEROS O LETRAS -->
	<script src="../assets/validacion/validacion_nl.js" type="text/javascript"></script>	
	
<script>
	$.validator.setDefaults({
		submitHandler:	function submitform()
	{
	  document.myform.submit();
	}
	});
	$().ready(function() {
		var validator = $("#texttests").bind("invalid-form.validate", function() {
			$("#summary").html("Your form contains " + validator.numberOfInvalids() + " errors, see details below.");
		}).validate({
			debug: true,
			errorElement: "em",
			errorContainer: $("#warning, #summary"),
			errorPlacement: function(error, element) {
				error.appendTo( element.parent("td").next("td") );
			},
			success: function(label) {
				label.text("").addClass("success");
			},
			rules: {
				precio:{
				required:true
				},
				
	
			}
		});
	});
	</script>
	
<br>	
<font size="5">&nbsp;&nbsp;Agregar Producto</font>
	</head>

	<body>
	
	<form class="cmxform" id="texttests" action="productos/guardar_archivo.php" method="post" enctype="multipart/form-data">		
			<center>
				<div class="derecha">					
					<table>
					
					
					<tr>
						<td align="right">Nombre del Producto:</td>
						<td><input id="nombre" type="text" name="nombre" maxlength="200"  size="50"/></td>
						
					</tr>
					
		
					<tr>
						<td align="right">Categoria:</td>
						<td><select id="categoria" name="categoria">
						<option value = '1'>Bodas</option>
						<option value = '2'>XV a&ntilde;os</option>		
						<option value = '3'>Eventos Sociales</option>
					</select></td>
					</tr>
					
					<tr>
						<td align="right">Porciones:</td>
						<td><input id="porciones" type="text" name="porciones" maxlength="200" onkeypress="return numeros(event)" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Precio:</td>
						<td><input id="precio" type="text" name="precio" maxlength="200"  onkeypress="return numeros(event)" size="50"/></td>
					</tr>
					<tr>
					<td align="right">Imagen:</td>
			        <td><input type="file" name="file" id="file"></td>
					</tr>
					
					
					</table>
					Descripcion:<br>
						<textarea type="text" name="descripcion"  class="field span5" rows="3"/></textarea>
					
					<div align ="center">
						<br>
						<button text style="font-weight:bold;" type="submit" class="btn btn-success" value="Guardar Cambios"/>Guardar</button>&nbsp;
						<button text style="font-weight:bold;" type="button" class="btn btn-danger" onclick="window.location='/admin/menuadmin.php'">Cancelar</button>&nbsp;
						<br>
					</div><br>
				</div>
			</center>
		</form>
		
		<form class="cmxform" id="texttests" name="myform" action="/?dir=registrar_usuario" method="post">
<br><br>
				
				<font color="orange" size="5">Registre su cuenta:</font><br><br>
				<table>
				<tr><td align="right"><font color="orange">Nombre:</font></td><td><input type="text" name="nombre" onkeypress="return letras(event)" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Apellidos:</font></td><td><input type="text" name="apellidos" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Telefono:</font></td><td><input type="text" name="telefono" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Direccion:</font></td><td><input type="text" name="direccion" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Correo Electronico:</font></td><td><input type="text" name="usuario" size="45"/></td></tr>
				<tr><td align="right"><font color="orange">Contrase&ntilde;a:</font></td><td><input type="password" name="contrasena" size="45"/></td></tr>
				</table>
				<br>
				<button text style="font-weight:bold;" title="ingresar" name="ingresar" class="btn btn-success" type="submit" value="Ingresar"/>Registrar</button>&nbsp;&nbsp;&nbsp;&nbsp;
				
				
</form>


	</body>
</html>