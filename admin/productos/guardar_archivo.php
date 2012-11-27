<?php

require("../../modelo/connectionClass.php");

 $con = new Connection();
		$con->start();
		
		$num_imagen=0;


$res = mysql_query("select count(id_producto) as total from producto;");

	while($row = mysql_fetch_assoc($res)){
	
	$num_imagen = $row["total"];
	
	}
	
	$num_imagen = $num_imagen + 1;
	
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
$nombre_imagen = $num_imagen.".".$extension;
//echo $_FILES["file"]["type"];
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"../../imagenes_pasteles/" . $nombre_imagen);
      echo "Stored in: " . "admin/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
 
 mysql_query("insert into producto(nombre,precio,categoria,descripcion,imagen,porciones) values ('".$_POST['nombre']."',".$_POST['precio'].",".$_POST['categoria'].",'".$_POST['descripcion']."','".$nombre_imagen."',".$_POST['porciones'].");");
header('Location: /admin/menuadmin.php?dir=productos&accion=mostrar');
 
?>