<script type="text/javascript">
		function eliminar(idalu)
		{
				var x;
				var r=confirm("El curso ser\u00e1 eliminado");
				if (r==true)
				{
					x= window.location.href = "?dir=cursos&accion=eliminar&clave="+idalu;		
				}
					
				else
				{
					x="Cancelar!";
				}		
		}
	</script>

<?php 




$cursos = Curso::cargar();


echo "<font size='5'>";
echo "<br>Cursos&nbsp&nbsp&nbsp&nbsp&nbsp</b>";
echo "</font>";


echo "<table border='0' class='table table-striped'>";

echo "<tr>
		
		<th width='200'><font size='2'>Nombre</font></th>
		<th width='300'><center><font size='2'>Duracion</font></center></th>
		<th width='100'><center><font size='2'>Horario</font></center></th>
		<th width='100'><center><font size='2'>Costo</font></center></th>
		
		<th width='30'></th>
		
	</tr>";
$total=0;

foreach($cursos as $curso){
$total=$total+1;
echo "<tr>";
	
	
	echo "<td>".$curso->nombre."</td>";
	echo "<td><center>".$curso->duracion."</center></td>";
	echo "<td>".$curso->horario."</td>";
	echo "<td>".$curso->costo."</td>";
			
	?>
	
	<td><button class='btn btn-danger'  onClick="eliminar('<?php echo $curso->id_curso; ?>')">Eliminar</button></td>
	
	</tr>
<?php } ?>

</table>

<?php echo "<div style='float:right;width:200px'><font size='3'>Total de Productos: ".$total."</font></div>"; ?>