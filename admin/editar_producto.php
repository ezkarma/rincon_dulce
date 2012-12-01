
<br>	
<font size="5">&nbsp;&nbsp;Editar Producto</font>
	</head>

	<body>
	
<form id='texttests' name='myform' action='?dir=productos&accion=guardaredicion&clave=<?php echo $_GET["clave"];?>' method='post'>;		
			<center>
				<div class="derecha">					
					<table>
					
					
					<tr>
						<td align="right">Nombre del Producto:</td>
						<td><input id="nombre" type="text" name="nombre" maxlength="200" value="<?php echo $producto->nombre;?>"  size="50"/></td>
					</tr>
					
				
					
					
					
				<tr>
						<td align="right">Categoria:</td>
						<td><select id="categoria" name="categoria">
						<OPTION SELECTED VALUE="<?php echo $producto->categoria;?>">
						<?php 
						if($producto->categoria==1){
							echo "Bodas</OPTION>";
							echo "<option value = '2'>XV a&ntilde;os</option>	";
							echo "<option value = '3'>Eventos Sociales</option>";
							}
						else if($producto->categoria==2){ 
							echo "XV a&ntilde;os</OPTION>";
							echo "<option value = '1'>Bodas</option>";
							echo "<option value = '3'>Eventos Sociales</option>";
						}
						else if($producto->categoria==3){
							echo "Eventos Sociales</OPTION>";
							echo "<option value = '1'>Bodas</option>";
							echo "<option value = '2'>XV a&ntilde;os</option>	";
						}
						?>
						
						</select></td>
					</tr>
					
					<tr>
						<td align="right">Porciones:</td>
						<td><input id="porciones" type="text" name="porciones" maxlength="200" value="<?php echo $producto->porciones;?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Precio:</td>
						<td><input id="precio" type="text" name="precio" maxlength="200"  value="<?php echo $producto->precio;?>"size="50"/></td>
					</tr>
					
					
					
					</table>
					Descripcion:<br>
						<textarea type="text" name="descripcion"  class="field span5" rows="3"/><?php echo $producto->descripcion;?></textarea>
					
					<div align ="center">
						<br>
						<button text style="font-weight:bold;" type="submit" class="btn btn-success" value="Guardar Cambios"/>Guardar Cambios</button>&nbsp;
						<button text style="font-weight:bold;" type="button" class="btn btn-danger" onclick="window.location='?dir=productos&accion=mostrar'">Cancelar</button>&nbsp;
						<br>
					</div><br>
				</div>
			</center>
		</form>


	</body>
</html>