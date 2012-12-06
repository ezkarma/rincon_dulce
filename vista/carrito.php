<html>

<table border='0' class='table table-striped'>

<tr>
		<th width='400'><font size='3'>Producto</font></th>
		<th width='100'><font size='3'>Precio</font></th>
		<th width='100'><center><font size='3'>Cantidad</font></center></th>
		<th width='100'><center><font size='3'>Subtotal</font></center></th>
		<th></th>
</tr>
<?php
$total=0;

foreach($carritos as $carrito){
$subtotal=$carrito->precio*$carrito->cantidad;
?>


<tr>
<td><?php echo $carrito->nombre;?></td>
<td><?php echo $carrito->precio;?></td>
<td><?php echo $carrito->cantidad;?></td>
<td><?php echo $subtotal;?></td>
<td><button type="button" class="btn btn-danger" onclick="window.location='?dir=carrito_quitar&clave=<?php echo $carrito->producto?>'">Quitar</button></td>
<tr>

<?php
$total=$total+$subtotal;
}

?>
<td></td>
<td></td>

<td>Total:</td>
<td><?php echo $total;?></td>

<td><button type="button" class="btn btn-success" onclick="window.location='?dir=ordenar'">Ordenar Pedido</button></td>
</table>
</html>