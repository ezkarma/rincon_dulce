<html>

<link href="fondo.css" rel="stylesheet" type="text/css" media="screen" />
<head>

</head>




<script>
/*
*Borrar Pagina
*Valor Nulo
*/

var inventario=10;
var precio=5;

function agregar_coca() 
{
var nuevo = document.getElementById('cantidad').value;
document.getElementById('cantidad1').value=parseInt(nuevo);
document.getElementById('total').value=parseInt(nuevo)*precio;
}

function credito_coca() 
{
var saldo = document.getElementById('saldo').value;
document.getElementById('credito').value=saldo;
}

function pagar_coca() 
{

var total = parseInt(document.getElementById('total').value);
var credito = parseInt(document.getElementById('credito').value);
var cantidad =parseInt(document.getElementById('cantidad1').value);

if (credito>=total && inventario>=cantidad){
document.getElementById('credito').value=parseInt(credito)-parseInt(total);
inventario=inventario-cantidad;
document.getElementById('cant_inv').value=inventario;
alert("Usted a comprado exitosamente "+cantidad+" Producto(s) Coca- Cola");
}

else if (credito<total){

var total = parseInt(document.getElementById('total').value);
var credito = parseInt(document.getElementById('credito').value);
var faltante= total-credito;
alert("Usted no cuenta con el credito necesario \n Le hace falta $"+faltante);
}

else if (cantidad>inventario){
alert("No tenemos esa cantidad de Productos en el Inventario");
}


}

function inventario_coca() 
{
document.body.innerHTML = '';
document.writeln('<link href="fondo.css" rel="stylesheet" type="text/css" media="screen" />');
document.writeln("<center>");
document.writeln("Inventario Coca Cola");
document.writeln("<br><br>");
document.writeln('<input type="button" class="btn btn-danger" value="Regresar" onclick="menu_principal()"/>');
document.writeln("<br><br><br>");
document.writeln("Inventario Actual: ");
document.writeln('<input id="inv_actual" disabled="disabled" value="'+inventario+'"/>');
document.writeln("<br><br>");
document.writeln("Precio por Unidad Actual: ");
document.writeln('<input id="precio_actual" disabled="disabled" value="'+precio+'"/>');  
document.writeln("<br><br><br>");
document.writeln("Agregar Refrescos a Inventario: ");
document.writeln('<input id="inv_nuevo" />'); 
document.writeln('<input type="button" class="btn btn-success" value="Agregar" onclick="agregar_inventario()"/>');
document.writeln("<br><br>");
document.writeln("Precio Por Unidad: ");
document.writeln('<input id="precio_nuevo" />'); 
document.writeln('<input type="button" class="btn btn-success"  value="Modificar" onclick="precio_coca()"/>');
document.writeln("</center>");
}

function historia() 
{
document.body.innerHTML = '';
document.writeln('<style type="text/css"> .historia{ margin:10px 30px 30px;float:left;width:40%;z-index:1;top:0px;border:2px solid gray;text-align:center;font-size:14px;-webkit-border-radius: 6px;	-moz-border-radius: 6px;border-radius: 6px;}</style>');
document.writeln('<style type="text/css"> .imagen{ margin:0px 0px 30px;float:right;width:50%;z-index:1;top:0px;border:0px solid gray;text-align:center;font-size:14px;-webkit-border-radius: 6px;	-moz-border-radius: 6px;border-radius: 6px;}</style>');
document.writeln('<link href="fondo.css" rel="stylesheet" type="text/css" media="screen" />');
document.writeln("<center>");
document.writeln("Historia");
document.writeln("<br><br>");
document.writeln('<input type="button" class="btn btn-danger" value="Regresar" onclick="menu_principal()"/>');
document.writeln("<br><br>");
document.writeln("<div class='historia'>");
document.writeln("La Coca-Cola fue creada en 1886 por John Pemberton en la farmacia Jacobs de la ciudad de Atlanta, Georgia. Con una mezcla de hojas de coca y semillas de cola quiso crear un remedio, que comenzó siendo comercializado como una medicina que aliviaba el dolor de cabeza y disimulaba las náuseas; luego fue vendida en su farmacia como un remedio que calmaba la sed, a 5 centavos el vaso. Frank Robinson le puso el nombre de Coca-Cola, y con su caligrafía diseñó el logotipo actual de la marca. Al hacerse famosa la bebida en 1886 se le ofreció a su creador venderla en todo Estados Unidos. Pemberton aceptó la oferta (vendió la fórmula y su empresa en 23.300 dólares) y se abrieron varias envasadoras en Estados Unidos. Más tarde un grupo de abogados compró la empresa e hizo que Coca-Cola llegara a todo el mundo. Desde ahí la empresa se convirtió en The Coca-Cola Company.");
document.writeln("</div>");
document.writeln("<div class='imagen'>");
document.writeln("<img src='images/envase.jpg'>");
document.writeln("</div>");
}

function agregar_inventario() 
{
inventario=parseInt(document.getElementById('inv_actual').value)+parseInt(document.getElementById('inv_nuevo').value);
document.getElementById('inv_actual').value=inventario;
}

function precio_coca() 
{
precio=parseInt(document.getElementById('precio_nuevo').value);
document.getElementById('precio_actual').value=precio;
}


function venta_coca() 
{
document.body.innerHTML = '';
document.writeln('<link href="fondo.css" rel="stylesheet" type="text/css" media="screen" />');
document.writeln("<center>");
document.writeln("Venta de Productos Coca Cola");
document.writeln("<br>");
document.writeln('<input type="button" class="btn btn-danger" value="Regresar" onclick="menu_principal()"/>');
document.writeln("<br><br>");
document.writeln("Refrescos a Comprar: ");
document.writeln('<input type="text" name="cantidad" class="cantidad_comprar" id="cantidad"/>'); 
document.writeln('<input type="button" class="btn btn-success" name="btn_obtener" id="btn_obtener" value="Agregar" onclick="agregar_coca()"/>');
document.writeln("<br><br>");
document.writeln("Saldo: ");
document.writeln('<input type="text" class="cantidad_comprar" id="saldo"/>'); 
document.writeln('<input type="button" class="btn btn-success" value="Agregar" onclick="credito_coca()"/>');
document.writeln("<br><br><br>");
document.writeln("Reporte de Compra: ");
document.writeln("<br>");
document.writeln("Catidad a Comprar: ");
document.writeln('<input type="text" disabled="disabled" name="cantidad1" class="cantidad_comprar" id="cantidad1"/>'); 
document.writeln("<br>");
document.writeln("Cantidad en Inventario: ");
document.writeln('<input type="text" id="cant_inv" disabled="disabled" value="'+inventario+'"/>'); 
document.writeln("<br>");
document.writeln("Precio Unitario: ");
document.writeln('<input type="text" disabled="disabled" value="'+precio+'"/>'); 
document.writeln("<br>");
document.writeln("Total a Pagar: ");
document.writeln('<input type="text" disabled="disabled" id="total"/>'); 
document.writeln("<br>");
document.writeln("Credito: ");
document.writeln('<input type="text" disabled="disabled" class="cantidad_comprar" id="credito"/>'); 
document.writeln("<br>");
document.writeln('<input type="button" class="btn btn-warning" name="btn_obtener" id="btn_obtener" value="Pagar" onclick="pagar_coca()"/>');
document.writeln("</center>");
}


function menu_principal() 
{
document.body.innerHTML = '';
document.writeln("<center><h1>Venta de Productos</h1>");
document.writeln('<input type="button" class="btn btn-success" name="btn_obtener" id="btn_obtener" value="Venta Coca Cola" onclick="venta_coca()"/>');
document.writeln('<input type="button" class="btn btn-success" name="vender_coca" id="Vender_coca" value="Historia" onclick="historia()"/>');
document.writeln('<input type="button"  class="btn btn-success" name="vender_coca" id="Vender_coca" value="Inventario" onclick="inventario_coca()"/>');
document.writeln("<br><br><img src='images/coca.jpeg'></center>");
}

</script>


<center>
<!---TEMA -->
	<link href="fondo.css" rel="stylesheet" type="text/css" media="screen" />
	
	<link rel="stylesheet" href="banner/styles.css" />
	
	<!-- Banner-->	
	<link rel="stylesheet" href="banner/style.css" type="text/css" media="screen" />
	<link href="fondo.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
	<script type="text/javascript" src="banner/js/jquery.js"></script>
	<script type="text/javascript" src="banner/js/scripts.js"></script>
	<style type="text/css"> .bienvenida{ margin:10px 30px 30px;width:20%;float:left;z-index:1;top:0px;border:2px solid gray;text-align:center;font-size:14px;-webkit-border-radius: 6px;	-moz-border-radius: 6px;border-radius: 6px;}</style>');
	

<h1><img src="coca1.gif"/>The Coca Cola Company<img src="coca2.jpg"/></h1>
<hr color="red" width="90%">
<input type="button" class="btn btn-success" name="btn_obtener" id="btn_obtener" value="Venta Coca Cola" onclick="venta_coca()"/>
<input type="button" class="btn btn-success" name="vender_coca" id="Vender_coca" value="Inventario" onclick="inventario_coca()"/>
<input type="button" class="btn btn-success" name="vender_coca" id="Vender_coca" value="Historia" onclick="historia()"/>
<br><center>
<hr color="red" width="90%">
<div class="bienvenida">
<br><b><font size="3">WELCOME</font></b><br><br>
A global leader in the beverage industry, the Coca-Cola company offers hundreds of brands, including soft drinks, fruit juices, sports drinks and other beverages<br><br>
	</div>
<?php require("banner/index.html"); ?>
</center>
</center>
</body>
</html>
