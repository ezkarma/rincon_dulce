<html>
<body>
<p aling="center">
<table >
<?php 

$pedidos=Pedido::cargar();

foreach($pedidos as $pedido){
echo "Numero de Pedido: ".$pedido->id_pedido;
echo "<br><br><br>";
$total=0;

?>


<table border='0' class='table table-striped'>

<tr>
		<th width='400'><font size='3'>Producto</font></th>
		<th width='100'><font size='3'>Precio</font></th>
		<th width='100'><center><font size='3'>Cantidad</font></center></th>
		<th width='100'><center><font size='3'>Subtotal</font></center></th>
		<th></th>
</tr>

<?php
$detalles = Pedido::cargar_detalle($pedido->id_pedido);
foreach($detalles as $detalle){





$subtotal=$detalle->precio*$detalle->cantidad;
?>


<tr>
<td><?php echo $detalle->nombre;?></td>
<td><?php echo $detalle->precio;?></td>
<td><?php echo $detalle->cantidad;?></td>
<td><?php echo $subtotal;?></td>

<tr>

<?php
$total=$total+$subtotal;
}

?>
<td></td>
<td></td>

<td>Total:</td>
<td><?php echo $total;?></td>

	</table>
	</p>
</body>
<?php } ?>	
</html>