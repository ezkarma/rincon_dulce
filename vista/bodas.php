<html>
<body>
<p aling="center">
<table >
<?php 

$pasteles=Producto::cargar(1);

foreach($pasteles as $pastel){

echo "<table>";
echo "<tr>";
echo "<td>";
echo "<img src='".$pastel->imagen."' width='600'>";
echo "</td>";
echo "<td width='20'>";
echo "</td>";
echo "<td width='40%'>";
echo "<font color='black' size='5'><b>".$pastel->nombre."</b></font>";
echo "<br><br>";
echo "Precio: $".$pastel->precio;
echo "<br><br>";
echo "<i>".$pastel->descripcion."</i>";
echo "<br><br>";
echo "Numero de Porciones: ".$pastel->porciones;
echo "<br><br>";
if (isset($_SESSION['logiado'])){
if($_SESSION['logiado']=='si'){
?><button text style='font-weight:bold;' type='button'  class='btn btn-warning'  onClick='window.location="?dir=agregar_carrito&cliente=<?php echo $_SESSION['usuario'];?>&producto=<?php echo $pastel->id_producto;?>";'>Agregar al Carrito</button>
<?php
}
}
else {
echo "<button text style='font-weight:bold;' disabled='disabled' type='button'  class='btn btn-warning'  onClick='window.location='?dir=verificar&controller=alumnos';'>Agregar al Carrito</button>";
echo "<br><i>Por favor ingrese a su cuenta para comprar este producto</i>";
}
echo "</td>";
echo "</tr>";

echo "</table>";

echo "<br><br><br>";

}
	?>
	</table>
	</p>
</body>
	
</html>