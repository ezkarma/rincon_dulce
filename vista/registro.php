<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--MOSTRAR ERRORES-->
	<script src="/assets/validacion/jquery.validate.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/assets/validacion/errores.css" type="text/css">

	
		
	
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
				nombre:{
				required:true
				},
				usuario:{
				email:true,
				required:true
				},
	
			}
		});
	});
	</script>
	
<div style="width:1000px">
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
				<button text style="font-weight:bold;" type="submit" class="btn btn-success" value="Guardar Cambios"/>Guardar</button>&nbsp;
				
</form>
</div>
<br><br>
</html>