
<font size='4' color='black'><b>
Fija
<br><br>
</b></font>

<table border='0' class='table table-striped'>

<tr>
		<th width='100'><font size='3'>Clave</font></th>
		<th width='200'><font size='3'>Nombre</font></th>
		<th width='400'><center><font size='3'>Descripcion</font></center></th>
		<th width='70'><center><font size='3'>Cantidad</font></center></th>
		<th width='70'><font size='3'>Precio</font></th>
		<th></th>
</tr>

<?php 

$brocas=Broca::cargar($_GET["vista"]);

foreach($brocas as $broca){

echo "<tr>";
	
	echo "<td><font color='black'>".$broca->clave."</font></td>";
	echo "<td><font color='black'>".$broca->nombre."</font></td>";
	echo "<td><font color='black'>".$broca->descripcion."</font></td>";

	echo "<td><center><font color='black'>";
	echo $broca->cantidad;
	echo "</center></td>";
	
	echo "<td><font color='black'>$".$broca->precio."</td>";
	?>
	<td><button type="button" class="btn btn-success" onclick="window.location='?dir=lista&accion=agregar&clave=<?php echo $broca->clave; ?>'">+</button></td>
<?php	
echo "</tr>";
} ?>
</table>