
<br>	
<font size="5">&nbsp;&nbsp;Agregar Machuelo</font>
	</head>

	<body>
	<form id='texttests' name='myform' action='?dir=productos&accion=guardar_machuelo' method='post'>;
			
			<center>
				<div class="derecha">					
					<table>
					<tr>
						<td align="right">Clave del Producto:</align></td>
						<td><input id="clave" type="text" name="clave" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Nombre del Producto:</td>
						<td><input id="nombre" type="text" name="nombre" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
					<td align="right">Tipo de Machuelo:</td>
					<td><select name="a">
						<option value = '1'>Formador</option>
						<option value = '2'>Corte</option>		
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Unidad:</td>
					<td><select name="b">
						<option value = '1'>Milim&eacute;trico</option>
						<option value = '2'>Est&aacute;ndard</option>	
						<option value = '3'>Num&eacute;rico</option>
						<option value = '4'>NPT</option>
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Barreno:</td>
					<td><select name="c">
						<option value = '1'>Pasado</option>
						<option value = '2'>Ciego</option>
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Para:</td>
					<td><select name="d">
						<option value = '1'>Materiales Suaves</option>
						<option value = '2'>Aceros</option>		
						<option value = '3'>Aceros Endurecidos</option>	
						<option value = '4'>Aceros Inoxidables</option>	
					</select></td>
					</tr>
					
					<tr>
						<td align="right">Existencia:</td>
						<td><input id="cantidad" type="text" name="cantidad" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Cantidad Real:</td>
						<td><input id="cantidad_real" type="text" name="cantidad_real" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Precio:</td>
						<td><input id="precio" type="text" name="precio" maxlength="200"  size="50"/></td>
					</tr>
					
					
					
					</table>
					Descripcion:<br>
						<textarea type="text" name="descripcion"  class="field span5" rows="3"/></textarea>
					
					<div align ="center">
						<br>
						<button text style="font-weight:bold;" type="submit" class="btn btn-success" value="Guardar Cambios"/>Guardar</button>&nbsp;
						<button text style="font-weight:bold;" type="button" class="btn btn-danger" onclick="window.location='/admin/menuadmin.php'">Cancelar</button>&nbsp;
						<br>
					</div><br>
				</div>
			</center>
		</form>
	</body>
</html>