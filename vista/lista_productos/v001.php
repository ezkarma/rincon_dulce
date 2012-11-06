
<script language="javascript">
$(document).ready(function() {
     $("#bton").click(function(event) {
     $("#datos_a_enviar").val( $("<div>").append( $("#excel").eq(0).clone()).html());
     $("#FormularioExportacion").submit();
});
});
</script>


<font size='4' color='black'><b>
<br><br>
</b></font>

<table id="excel" border='0' class='table table-striped'>
<tr>
		<td></td>
		<td></td>
		<td >Lista de Productos Afilados Herme</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
</tr>

<tr>
		<th width='100'><font size='3'>Clave</font></th>
		<th width='200'><font size='3'>Nombre</font></th>
		<th width='400'><center><font size='3'>Descripcion</font></center></th>
		<th width='70'><center><font size='3'>Cantidad</font></center></th>
		<th width='70'><font size='3'>Precio</font></th>
		<th></th>
		<th></th>
</tr>

<?php 

//$brocas=Broca::cargar($_GET["vista"]);

foreach($lista as $list){

echo "<tr>";
	
	echo "<td><font color='black'>".$list->clave."</font></td>";
	echo "<td><font color='black'>".$list->nombre."</font></td>";
	echo "<td><font color='black'>".$list->descripcion."</font></td>";

	echo "<td><center><font color='black'>";
	echo $list->cantidad;
	echo "</center></td>";
	
	echo "<td><font color='black'>$".$list->precio."</td>";
	?>
	<td></td>
	<td><button type="button" class="btn-danger" onclick="window.location='?dir=lista&accion=eliminar&clave=<?php echo $list->clave; ?>'"><img src="assets/imagenes/basura.png"/></button></td>
<?php	
echo "</tr>";
} ?>
</table>

<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<button type="button" id="bton" class="btn" >Descargar Lista<img src="assets/imagenes/download.png"/></button>
<td><button type="button" class="btn btn-danger" onclick="window.location='?dir=lista_pedido&accion=lista_eliminar'">Vaciar Lista<img src="assets/imagenes/recycle-full.png"/></button></td>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>