
<br>	
<font size="5">&nbsp;&nbsp;Agregar Producto</font>
	</head>

	<body>
	
	<form action="productos/guardar_archivo.php" method="post"
		enctype="multipart/form-data">		
			<center>
				<div class="derecha">					
					<table>
					
					
					<tr>
						<td align="right">Nombre del Producto:</td>
						<td><input id="nombre" type="text" name="nombre" maxlength="200"  size="50"/></td>
					</tr>
					
				
					
					
					
					<tr>
						<td align="right">Categoria:</td>
						<td><input id="categoria" type="text" name="categoria" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Porciones:</td>
						<td><input id="porciones" type="text" name="porciones" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Precio:</td>
						<td><input id="precio" type="text" name="precio" maxlength="200"  size="50"/></td>
					</tr>
					<tr>
					<td align="right">Imagen:</td>
			        <td><input type="file" name="file" id="file"></td>
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