<html>
<body>
<p aling="center">
<table >
<?php 

$pasteles=Producto::cargar();

foreach($pasteles as $pastel){

echo $pastel->nombre;
echo "<br>";
echo $pastel->precio;
echo "<br>";
echo $pastel->categoria;
echo "<br>";
echo $pastel->descripcion;
echo "<br>";
echo $pastel->imagen;
echo "<br>";
echo $pastel->porciones;
echo "<br>";

}
	?>
	</table>
	</p>
</body>
	
</html>