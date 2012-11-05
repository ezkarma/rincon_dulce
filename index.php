<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../assets/css/softblue.css" rel="stylesheet" type="text/css">
<!--link href="../assets/css/style6.css" rel="stylesheet" type="text/css"-->
<link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<?php include("views/nav_bar.phtml"); ?>
<br>
<?php

require("models/ConnectionClass.php");
require("models/Universidad.php");
require("models/UniversidadTemporal.php");
require("models/Alumno.php");
require("models/Profesor.php");
require("models/Mensaje.php");
require("models/AlumnoTemporal.php");
require("models/ProfesorTemporal.php");
require("models/Archivo.php");
require("models/Reporte.php");

require("controllers/ControladorUniversidad.php");
require("controllers/ControladorAlumno.php");
require("controllers/ControladorAlumnoTemporal.php");
require("controllers/ControladorMensaje.php");
require("controllers/ControladorProfesor.php");
require("controllers/ControladorUniversidadTemporal.php");
require("controllers/ControladorProfesorTemporal.php");
require("controllers/ControladorReportes.php");
require("controllers/ControladorArchivo.php");
 


if(!empty($_GET["dir"])){
$direccion=$_GET["dir"];

switch($direccion){

case 'mensajes': 
		$var = $_GET["id"];
		ControladorMensaje::desplegar_mensajes($var);
	break;
	
case 'nuevoMsg':
		$id = $_GET["id"];
		ControladorMensaje::nuevo_Mensaje($id);
		break;
		
case 'enviarMsg':
		$id = $_GET["id"];
		ControladorMensaje::enviar_Msg($id);
		break;
		
case 'eliminarMsg':
		$idMsg = $_GET["idMsg"];
		$idAlu = $_GET["idAlu"];
		ControladorMensaje::eliminar_mensajes($idMsg,$idAlu);
		break;
		
case 'detallesMsg':
		$idAlu = $_GET["idAlu"];
		$idMsg = $_GET["idMsg"];
		ControladorMensaje::detalles_mensajes($idMsg,$idAlu);
		break;
		
case 'historial':
		$var = $_GET["id"];
		$ord = $_GET["ord"];
		ControladorMensaje::desplegar_historial($var, $ord);
		break;

case 'editar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='universidades'){
		$var = $_GET["id"];
		ControladorUniversidad::editar_universidad($var);	
		}	
		
		if($_GET["controller"]=='profesores'){
		$var = $_GET["id"];
		ControladorProfesor::editar_profesor($var);	
		}	
		
		if($_GET["controller"]=='alumnos'){
		$var = $_GET["id"];
		ControladorAlumno::editar_alumno($var);	
		}	
		
		if($_GET["controller"]=='alumnostemporal'){
		$var = $_GET["id"];
		ControladorAlumno::editar_alumnotemporal($var);	
		}	
	}

;break;

case 'mostrar': if(!empty($_GET["controller"])){

		if($_GET["controller"]=='alumnos'){
		ControladorAlumno::desplegar_alumnos();	
		}
		if($_GET["controller"]=='alumnoTemporal'){	
			ControladorAlumno::desplegar_alumnosTemporal();				
		}	

		if($_GET["controller"]=='universidades'){
		ControladorUniversidad::desplegar_universidades();	
		}
		
		if($_GET["controller"]=='profesores'){
		ControladorProfesor::desplegar_profesores();
		}
		
		if($_GET["controller"]=='reportesAlumnos'){
		ControladorReportes::reporte_alumnos();
		}
		if($_GET["controller"]=='reportesProfesores'){
		ControladorReportes::reporte_profesores();
		}	
		if($_GET["controller"]=='reportesUniversidades'){
		ControladorReportes::reporte_universidades();
		}
		if($_GET["controller"]=='archivos'){
		ControladorArchivo::desplegar_archivos();	
		}
	}

;break;

case 'vincular': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='universidades'){
		
		$universidades = UniversidadTemporal::cargar();
		foreach($universidades as $uni){
		echo $uni->nombre." : ";
			if(isset($_POST[$uni->id])){
			//UniversidadTemporal::guardar($uni->nombre); 
			echo "yes";
			}
			else echo "no";
		echo "<br>";
		}
		
		//if(isset($_POST[$uni->id]))echo $_POST[$uni->id];
		echo $_POST['uni'];
		//ControladorUniversidadTemporal::vincular_universidades();
		}

}

;break;

case 'verificar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='alumnos'){
		ControladorAlumno::verificar_alumnos();	
		}		
		if($_GET["controller"]=='universidades'){
		ControladorUniversidadTemporal::verificar_universidades();	
		
		}		
		if($_GET["controller"]=='universidades_extra'){		
			if(isset($_POST["vincular"])){ 
				ControladorUniversidadTemporal::vincular();
			}			
			else if(isset($_POST["agregar"])){
				ControladorUniversidadTemporal::guardar();
			}
		
		}		
		if($_GET["controller"]=='profesores_extra'){		
			if(isset($_POST["vincular"])){ 
				ControladorProfesorTemporal::vincular();
			}			
			else if(isset($_POST["agregar"])){
				ControladorProfesorTemporal::guardar();
			}		
		}
		
		if($_GET["controller"]=='profesores'){
		ControladorProfesorTemporal::verificar_profesores();	
		}
	}

;break;

case 'filtrar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='alumnos'){
		ControladorAlumno::filtrar_alumno();
		}
		if($_GET["controller"]=='importaralumnos'){
		ControladorAlumnoTemporal::filtrar_alumno();
		}
		if($_GET["controller"]=='universidades'){
		ControladorUniversidad::filtrar_universidad();	
		}		
		
		if($_GET["controller"]=='universidadestemporales'){
		$opc = $_GET["a"];
		
		ControladorUniversidadTemporal::filtrar($opc);	
		}			
		
		if($_GET["controller"]=='profesores'){
		ControladorProfesor::filtrar_profesor();	
		}			
		if($_GET["controller"]=='profesorestemporales'){
		ControladorProfesorTemporal::filtrar();	
		}	
	}

;break;

case 'agregar': if(!empty($_GET["controller"])){	
		if($_GET["controller"]=='alumnos'){
			$universidades = Universidad::cargar();
			$profesores = Profesor::cargar();
			$estados = Universidad::estados_cargar();
			require("views/alumnos/agregar_alumno.php");		
		}
		if($_GET["controller"]=='universidades'){
			$profesores = Profesor::cargar();
			$estados = Universidad::estados_cargar();
			require("views/universidades/agregar_universidad.php");
		}
		if($_GET["controller"]=='universidades2'){
			$profesores = Profesor::cargar();
			$estados = Universidad::estados_cargar();
			require("views/universidades/agregar_universidad2.php");
		}
		if($_GET["controller"]=='universidades3'){
			$id=$_GET["id"];
			$profesores = Profesor::cargar();
			$estados = Universidad::estados_cargar();
			require("views/universidades/agregar_universidad3.php");
		}
		if($_GET["controller"]=='universidades_alumnos'){
			$var = $_GET["id"];
			require("views/universidades/agregar_universidad_alumnos.php");
		}	
		if($_GET["controller"]=='universidades_agregar'){
			require("views/universidades/agregar_universidad_a.php");
		}			
		if($_GET["controller"]=='profesores'){
			require("views/profesores/agregar_profesor.php");
		}
		if($_GET["controller"]=='profesores2'){
			require("views/profesores/agregar_profesor2.php");
		}
		if($_GET["controller"]=='profesores3'){
			$id=$_GET["id"];
			require("views/profesores/agregar_profesor3.php");
		}
		if($_GET["controller"]=='profesores_alumnos'){
			require("views/profesores/agregar_profesor_alumnos.php");
		}
		if($_GET["controller"]=='profesores_agregar'){
			require("views/profesores/agregar_profesor_a.php");
		}			
		if($_GET["controller"]=='universidadestemporal'){
			require("views/alumnostemporales/agregar_universidad.php");
		}		
		if($_GET["controller"]=='profesorestemporal'){
			require("views/alumnostemporales/agregar_profesor.php");
		}	
	}

;break;


case 'eliminar': if(!empty($_GET["controller"])){
		if($_GET["controller"]=='alumnos'){
		$var = $_GET["id"];
		ControladorAlumno::eliminar_alumno($var);	
		}
		if($_GET["controller"]=='tablaTemporal'){
		ControladorAlumno::eliminar_temporal();	
		}		
		if($_GET["controller"]=='universidades'){
		$ide = $_GET["id"];
		ControladorUniversidad::eliminar_universidad($ide);	
		}			
		if($_GET["controller"]=='profesores'){
		$ide = $_GET["id"];
		ControladorProfesor::eliminar_profesor($ide);	
		}
	}

;break;

case 'guardar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='alumnos'){
		ControladorAlumno::guardar_alumno();
		}
		
		if($_GET["controller"]=='universidades'){
		ControladorUniversidad::guardar_universidad();
		}
		if($_GET["controller"]=='universidades2'){
		ControladorUniversidad::guardar_universidad2();
		}		
		
		if($_GET["controller"]=='universidades3'){
		$var=$_GET["id"];
		ControladorUniversidad::guardar_universidad3($var);
		}	
		
		if($_GET["controller"]=='universidadesAlumno'){
		ControladorUniversidad::guardar_universidad_alumno();
		}	
		
		if($_GET["controller"]=='universidadesAgregar'){
		$var = $_GET["id"];
		ControladorUniversidad::guardar_universidad_a();
		}
		if($_GET["controller"]=='alumnostemporal'){
		$var = $_GET["id"];
		ControladorAlumno::guardar_alumnotemporal($var);	
		}
			
		if($_GET["controller"]=='profesores'){
		ControladorProfesor::guardar_profesor();	
		}
		if($_GET["controller"]=='profesores2'){
		ControladorProfesor::guardar_profesor2();	
		}
		
		if($_GET["controller"]=='profesores3'){
		$var=$_GET["id"];
		ControladorProfesor::guardar_profesor3($var);	
		}
		
		if($_GET["controller"]=='profesoresAlumno'){
		$var = $_GET["id"];
			ControladorProfesor::guardar_profesor_alumno($var);	
		}
		
		if($_GET["controller"]=='profesoresAgregar'){
			ControladorProfesor::guardar_profesor_a();	
		}
		
		if($_GET["controller"]=='universidadestemporales'){
		//echo "test";
		ControladorUniversidadTemporal::guardar();
		}
		
		if($_GET["controller"]=='profesorestemporales'){
		ControladorProfesorTemporal::guardar();
		}
		
		if($_GET["controller"]=='universidadtemp'){
		ControladorUniversidadTemporal::guardar_universidad();
		}
		
		if($_GET["controller"]=='profesortemp'){
		//echo "Guardar Profesor";
		ControladorProfesorTemporal::guardar_profesor();
		}	
		
		if($_GET["controller"]=='archivos'){
		ControladorArchivo::guardar_file();
		}	
		
	}

;break;

case 'guardaredicion': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='universidades') {
			$var = $_GET["id"];			
			ControladorUniversidad::guardaredicion_universidad($var);	
		}	
		
		if($_GET["controller"]=='alumnos'){
			$id = $_GET["id"];
			ControladorAlumno::guardaredicion_alumno($id);	
		}
		
			if($_GET["controller"]=='profesores'){
			$var = $_GET["id"];
			//echo "editar prof";
			ControladorProfesor::guardaredicion_profesor($var);	
		}
		
		
	}

;break;

case 'habilitar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='alumnos'){
		$var = $_GET["id"];
		//echo "Habilitar";
		ControladorAlumno::habilitar_alumno($var);	
		}	
		
		if($_GET["controller"]=='universidades'){
		$var = $_GET["id"];
		ControladorAlumno::habilitar_universidad($var);	
		}	
	}

;break;

case 'importarguardar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='alumnos'){
		ControladorAlumno::guardarimportar_alumnos();
		}
	}

;break;


case 'importar': if(!empty($_GET["controller"])){
	
		if($_GET["controller"]=='alumnos'){
		ControladorAlumno::importar_alumnos();
		}
	}

;break;
}

}

else{
	  echo"<br><br>";
	  echo "<center><img src='assets/images/SillaCerroTEC.png'></center>";
	}
?>
