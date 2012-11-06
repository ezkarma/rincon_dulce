<script type="text/javascript">
		function eliminar(idalu)
		{
				var x;
				var r=confirm("El producto ser\u00e1 eliminado");
				if (r==true)
				{
					x= window.location.href = "?dir=productos&accion=eliminar_machuelo&clave="+idalu;		
				}
					
				else
				{
					x="Cancelar!";
				}		
		}
	</script>

<?php 
require("../modelo/Broca.php");



$productos = Producto::cargar_machuelo();

echo "<font size='5'>";
echo "<br>Machuelos&nbsp&nbsp&nbsp&nbsp&nbsp</b>";
echo "</font>";


echo "<table border='0' class='table table-striped'>";

echo "<tr>
		<th width='100'><font size='2'>Clave</font></th>
		<th width='200'><font size='2'>Nombre</font></th>
		<th width='300'><center><font size='2'>Descripcion</font></center></th>
		<th width='70'><center><font size='2'>Cantidad Pagina Web</font></center></th>
		<th width='70'><center><font size='2'>Existencia</font></center></th>
		<th width='70'><font size='2'>Precio</font></th>
		<th width='70'><font size='2'></font></th>
		<th width='70'><font size='2'></font></th>
	</tr>";
	
foreach($productos as $broca){

echo "<tr>";
	
	echo "<td>".$broca->clave."</td>";
	echo "<td>".$broca->nombre."</td>";
	echo "<td>".$broca->descripcion."</td>";

	echo "<td><center>";
	echo $broca->cantidad;
	echo "</center></td>";
	
	echo "<td><center>";
	echo $broca->cantidad_real;
	echo "</center></td>";
	
	echo "<td>$".$broca->precio."</td>";
	?>
	<td><button type="button" class="btn btn-success" onclick="window.location='?dir=productos&accion=editar_machuelo&clave=<?php echo $broca->clave; ?>'">Editar</button></td>
	<td><button class='btn btn-danger'  onClick="eliminar('<?php echo $broca->clave; ?>')">Eliminar</button></td>
	
	</tr>
<?php } ?>
</table>