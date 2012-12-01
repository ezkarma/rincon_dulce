
<br>	
<font size="5">&nbsp;&nbsp;Agregar Curso</font>
	</head>

	<body>
	<form id='texttests' name='myform' action='?dir=cursos&accion=guardar' method='post'>;
			
			<center>
				<div class="derecha">					
					<table>
					<tr>
						<td align="right">Nombre:</align></td>
						<td><input id="nombre" type="text" name="nombre" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Duracion:</align></td>
						<td><input id="duracion" type="text" name="duracion" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Horario:</align></td>
						<td><input id="horario" type="text" name="horario" maxlength="200"  size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Costo:</align></td>
						<td><input id="costo" type="text" name="costo" maxlength="200"  size="50"/></td>
					</tr>
					</table>
					
					
						<td align="right">Descripcion:</align><br>
					
					
					
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