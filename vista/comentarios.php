
<!DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html;" charset=utf-8" />
	<link href="/assets/css/softblue.css" rel="stylesheet" type="text/css">
	<link href="../../assets/css/scroll.css" rel="stylesheet" type="text/css">
	<script src="/assets/jquery.js"></script>
	<script src="/assets/validacion/jquery.validate.js" type="text/javascript"></script>
	
	<link rel="stylesheet" href="/assets/bootstrap/css/amelia.css">
	
	<!--ACEPTAR SOLO NUMEROS O LETRAS -->
	<script src="/assets/validacion/validacion_nl.js" type="text/javascript"></script>

	<!--MOSTRAR ERRORES-->
	<link rel="stylesheet" href="/assets/validacion/errores.css" type="text/css">
	
	<style>
	
	.contenedor1{
			margin:1% 20% 10%;
			top:0px;
			border:1px solid gray;
			text-align:center;
			font-size:14px;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 0px;
		}
	
	</style>
	
	<script type="text/javascript">

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
					}		
				}
			});
		});
	</script>

</head>

<body>
<?php 

?>

<center>
<?php if(!isset($_SESSION['logiado']) || $_SESSION['logiado']!='si')echo "<font color='orange' size='3'>Ustede necesita ingresar a su cuenta para poder comentar.</font>";

else echo "<font color='orange' size='3'>Bienvenido ".$_SESSION['nombre']." por favor deje su comentario y/o sugerencia</font>";
?>
<br><br>
<form id='texttests' name='myform' action='?dir=comentarios' method='post'>
			
	<br><br>
	Titulo:<input id="nombre" type="text" name="nombre" maxlength="200"  size="50" onkeypress="return letras(event)" title="Ingrese el nombre de la Universidad"/>
	<br><br>
	
	Comentario:<br><textarea type="text" name="comentario" cols="130" class="field span10" rows="7"/></textarea><br><br>
	
	<button text style="font-weight:bold;" onClick="submit()" class="btn btn-success" <?php if(!isset($_SESSION['logiado']) || $_SESSION['logiado']!='si') echo "disabled='disabled'";?>value="Guardar Cambios"/>Comentar</button>
</form>
</center>

<?php 

if (isset($_POST['nombre']) && isset($_POST['comentario']) )
{
$fp=fopen("archivo.dat","a");
fwrite($fp,"<font color='black'><div class='contenedor1'><table class='table table-striped'><tr>");
fwrite($fp,"<td><b>Autor:</b></td><td>".$_SESSION['nombre']."</td>");
fwrite($fp,"</tr>");

fwrite($fp,"<tr>");
fwrite($fp,"<td><b>Titulo:</b></td><td>".$_POST['nombre']."</td>");
fwrite($fp,"</tr>");

fwrite($fp,"<tr>");
fwrite($fp,"<td><b>Fecha:</b></td>");
fwrite($fp,"<td>");
fwrite($fp, date("F j, Y, g:i a"));
fwrite($fp,"</td></tr>");

fwrite($fp,"<tr>");
fwrite($fp,"<td><b>Comentario:</b></td><td>".$_POST['comentario']);
fwrite($fp,"</td></tr></table></div></font>\n");
fclose($fp);
}


$filename = "archivo.dat";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);



?>
</body>

</html>





