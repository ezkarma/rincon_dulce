<html>
<body>
<p aling="center">

<?php 

$cursos=Curso::cargar();

foreach($cursos as $curso){



echo "Nombre: ".$curso->nombre."<br>";
echo "Duracion: ".$curso->duracion."<br>";
echo "Horario: ".$curso->horario."<br>";
echo "Costo: ".$curso->costo."<br>";
echo "Descripcion: ".$curso->descripcion."<br>";
if (isset($_SESSION['logiado'])){
if($_SESSION['logiado']=='si'){
?><button text style='font-weight:bold;' type='button'  class='btn btn-warning'  onClick='window.location="?dir=agregar_carrito&cliente=<?php echo $_SESSION['usuario'];?>&producto=<?php echo $curso->id_curso;?>";'>Inscribirse</button>
<?php
}
}
else {
echo "<br><button text style='font-weight:bold;' disabled='disabled' type='button'  class='btn btn-warning'  onClick='window.location='?dir=verificar&controller=alumnos';'>Inscribirse</button>";
echo "<br><i>Por favor ingrese a su cuenta para inscribirse en este curso</i>";
}


echo "<br><br><br>";

}
	?>
	
</body>
	
</html>