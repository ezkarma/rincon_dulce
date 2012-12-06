<script type="text/javascript">
		function eliminar(idalu)
		{
				var x;
				var r=confirm("El producto ser\u00e1 eliminado");
				if (r==true)
				{
					x= window.location.href = "?dir=productos&accion=eliminar_producto&clave="+idalu;		
				}
					
				else
				{
					x="Cancelar!";
				}		
		}
	</script>

<?php 




$productos = Producto::cargar(1);

$productos2 = Producto::cargar(2);

$productos3 = Producto::cargar(3);

echo "<font size='5'>";
echo "<br>Productos&nbsp&nbsp&nbsp&nbsp&nbsp</b>";
echo "</font>";


echo "<table border='0' class='table table-striped'>";

echo "<tr>
		
		<th width='400'><font size='2'>Nombre</font></th>
		<th width='300'><center><font size='2'>Categoria</font></center></th>
		<th width='100'><center><font size='2'>Precio</font></center></th>
		<th width='30'></th>
		<th width='30'></th>
		
	</tr>";
$total=0;
foreach($productos as $pastel){
$total=$total+1;
echo "<tr>";
	
	
	echo "<td>".$pastel->nombre."</td>";
	echo "<td><center>Bodas</center></td>";
	echo "<td>".$pastel->precio."</td>";

	
	?>
	<td><button type="button" class="btn btn-success" onclick="window.location='?dir=productos&accion=editar&clave=<?php echo $pastel->id_producto; ?>'">Editar</button></td>
	<td><button class='btn btn-danger'  onClick="eliminar('<?php echo $pastel->id_producto; ?>')">Eliminar</button></td>
	
	</tr>
<?php }
foreach($productos2 as $pastel){
$total=$total+1;
echo "<tr>";
	
	
	echo "<td>".$pastel->nombre."</td>";
	echo "<td><center>XV a&ntilde;os</center></td>";
	echo "<td>".$pastel->precio."</td>";
	

	
	?>
	<td><button type="button" class="btn btn-success" onclick="window.location='?dir=productos&accion=editar&clave=<?php echo $pastel->id_producto; ?>'">Editar</button></td>
	<td><button class='btn btn-danger'  onClick="eliminar('<?php echo $pastel->id_producto; ?>')">Eliminar</button></td>
	
	</tr>
<?php }
foreach($productos3 as $pastel){
$total=$total+1;
echo "<tr>";
	
	
	echo "<td>".$pastel->nombre."</td>";
	echo "<td><center>Eventos Sociales</center></td>";
	echo "<td>".$pastel->precio."</td>";

	
	?>
	<td><button type="button" class="btn btn-success" onclick="window.location='?dir=productos&accion=editar&clave=<?php echo $pastel->id_producto; ?>'">Editar</button></td>
	<td><button class='btn btn-danger'  onClick="eliminar('<?php echo $pastel->id_producto; ?>')">Eliminar</button></td>
	
	</tr>
<?php } ?>

</table>

<?php echo "<div style='float:right;width:200px'><font size='3'>Total de Productos: ".$total."</font></div>"; ?>