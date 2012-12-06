<html>
<body>
<p aling="center">
<table >
<?php 

$pedidos=Pedido::cargar();

foreach($pedidos as $pedido){
echo $pedido->id_pedido;
echo "<br><br><br>";

}
	?>
	</table>
	</p>
</body>
	
</html>