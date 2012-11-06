
<br>	
<font size="5">&nbsp;&nbsp;Agregar Endmills</font>
	</head>

	<body>
	<form id='texttests' name='myform' action='?dir=productos&accion=guardar_endmills' method='post'>;
			
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
					<td align="right">Material:</td>
					<td><select name="a">
						<option value = '1'>HSS</option>
						<option value = '2'>Carburo</option>
						<option value = '3'>HSS-Cobalto</option>		
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Tipo:</td>
					<td><select name="b">
						<option value = '1'>Plano</option>
						<option value = '2'>Radial</option>		
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Medida:</td>
					<td><select name="c">
						<option value = '1'>Fraccional</option>
						<option value = '2'>Milim&eacute;trica</option>	
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Longitud:</td>
					<td><select name="d">
						<option value = '1'>Estandard(corto)</option>
						<option value = '2'>Largo</option>	
						<option value = '3'>Extra Largo</option>
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Uso:</td>
					<td><select name="e">
						<option value = '1'>Acabado</option>
						<option value = '2'>Desbaste</option>	
						<option value = '3'>Semidesbaste</option>
					</select></td>
					</tr>
					
					<tr>
					<td align="right">Para:</td>
					<td><select name="f">
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