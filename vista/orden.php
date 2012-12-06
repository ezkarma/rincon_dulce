<html>

<font size='4' color='black'><b>
Detalle del Pedido
<br><br>
</b></font>
<font size='2' color='black'><b>
Nombre del Cliente:<?php echo $_SESSION['nombre'];?>
<br><br>
</b></font>

<table border='0' class='table table-striped'>

<tr>
		<th width='400'><font size='3'>Producto</font></th>
		<th width='100'><font size='3'>Precio</font></th>
		<th width='100'><center><font size='3'>Cantidad</font></center></th>
		<th width='100'><center><font size='3'>Subtotal</font></center></th>
		
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
<form class="cmxform" id="texttests" name="myform" action="?dir=generar_pedido" method="post">
<font color="orange">Direccion:</font><br><input type="text" name="direccion" value="<?php echo $_SESSION['direccion'];?>" size="45"/><br>
<td><button type="button" class="btn btn-success" onclick="submit()">Comprar</button></td>
</form>

</html>