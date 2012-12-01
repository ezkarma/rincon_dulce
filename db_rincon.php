<?php
$conexion = mysql_connect("localhost","rincon","dulce");

	if(!$conexion){
		die('No se ha podido conectar'.mysql_error());
	}
	

mysql_select_db("pasteleria",$conexion);


mysql_query("CREATE TABLE IF NOT EXISTS clientes (nombre varchar(50) DEFAULT NULL,
  apellidos varchar(100) DEFAULT NULL,
  telefono varchar(11) DEFAULT NULL,
  direccion varchar(200) DEFAULT NULL,
  correo varchar(100) NOT NULL DEFAULT '',
  clave varchar(100) DEFAULT NULL,
  prioridad int,
  PRIMARY KEY (correo)
);");

mysql_query("insert into clientes(nombre,correo,clave,prioridad) values ('admin','admin','".sha1('admin')."',1);");												

mysql_query("

CREATE TABLE IF NOT EXISTS cursos (
  id_cursos varchar(10) NOT NULL DEFAULT '',
  nombre varchar(100) DEFAULT NULL,
  duracion varchar(100) DEFAULT NULL,
  horario varchar(100) DEFAULT NULL,
  costo int(11) DEFAULT NULL,
  descripcion varchar(500) DEFAULT NULL,
  PRIMARY KEY (id_cursos)
);");




mysql_query("

CREATE TABLE IF NOT EXISTS pedidos (
  id_producto varchar(20) DEFAULT NULL,
  id_cliente varchar(50) DEFAULT NULL,
  cantidad int(11) DEFAULT NULL,
  direccion varchar(500) DEFAULT NULL,
  total int(11) DEFAULT NULL)
;");


mysql_query("
CREATE TABLE IF NOT EXISTS producto (
  id_producto int primary key auto_increment,
  nombre varchar(50) DEFAULT NULL,
  precio int(11) DEFAULT NULL,
  categoria int(11) DEFAULT NULL,
  descripcion varchar(500) DEFAULT NULL,
  imagen varchar(100),
  porciones int(11) DEFAULT NULL
);");

mysql_query("
CREATE TABLE IF NOT EXISTS carrito (
id_producto varchar (20),
id_cliente varchar (20),
cantidad int (11),
subtotal int (11)
);");

mysql_query("
CREATE TABLE detalle_pedido (
id_pedido int(11),
id_producto varchar(20),
cantidad int (11),
subtotal int (11)
);
 ");



mysql_close($conexion);

?>
