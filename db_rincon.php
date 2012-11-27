<?php
$conexion = mysql_connect("localhost","rincon","dulce");

	if(!$conexion){
		die('No se ha podido conectar'.mysql_error());
	}
	

mysql_select_db("pasteleria",$conexion);

/**************************************/			/****************************************************************/
/******                          ******/			/******                                                    ******/
/******   Se crean las Tablas:   ******/			/******          Se crean los procedimientos:              ******/
/******                          ******/			/******                                                    ******/
/******   -> estados             ******/			/******    ->  procedimiento inserta_profesor              ******/
/******   -> profesores          ******/			/******    ->  procedimiento inserta_documento             ******/
/******   -> universidades       ******/			/******    ->  procedimiento elimina_alumno                ******/
/******   -> documentos          ******/			/******    ->  procedimiento selecion_alumno               ******/
/******   -> alumno_temporal     ******/			/******    ->  procedimiento actualiza_universidad         ******/
/******   -> alumnos             ******/			/******    ->  procedimiento inserta_alumno                ******/
/******   -> mensajes            ******/			/******    ->  procedimiento edita_alumno                  ******/
/******   -> alumno              ******/			/******    ->  procedimiento inserta_universidad           ******/
/**************************************/			/******    ->  procedimiento selecciona_un_alumno          ******/
													/******    ->  procedimiento selecciona_universidades      ******/
													/******    ->  procedimiento elimina_universidad           ******/
													/******    ->  procedimiento guarda_mensaje                ******/
													/******    ->  procedimiento selecciona_mensajes           ******/
													/******    ->  procedimiento elimina_mensaje               ******/
													/******    ->  procedimiento selecciona_un_mensajes        ******/
													/******    ->  procedimiento dame_url                      ******/
													/******                                                    ******/
													/****************************************************************/
													

/****** tabla estados ******/
mysql_query("drop table estados");
$estados =("create table estados(
	id int primary key auto_increment,
	nombre varchar(50)
	
) engine = innodb;");
mysql_query($estados,$conexion);

/****** tabla universidades ******/
mysql_query("drop table universidades;");
$universidades =("create table if not exists universidades(
    id int primary key auto_increment,
    nombre varchar(150) unique not null,
    siglas char(15),
	estado_id int null,
    ciudad varchar(40),
    telefono char(10),
    pagina varchar(50),
    status boolean not null,
	
	foreign key (estado_id) references estados(id)
	
) engine = innodb;");
mysql_query($universidades, $conexion);



/****** tabla profesores ******/
mysql_query("drop table profesores;");
$profesores = ("create table if not exists profesores(
	id int primary key auto_increment,
	nombre_completo varchar(70) not null,
	correo char(55),
	telefono char(10),
	universidad_id int null,
	pagina varchar(50),
	status boolean,
	foreign key (universidad_id) references universidades(id)
) engine = innodb;");
mysql_query($profesores, $conexion);



/****** tabla alumno_temporal ******/
mysql_query("drop table alumno_temporal;");
$alumno_temporal =("create table if not exists  alumno_temporal(
	id int primary key auto_increment,
	nombre_completo varchar(100) not null,
	fecha_nacimiento varchar(50) null,
	genero char(9) null,
	universidad varchar(100) not null,
	carrera varchar(100) not null,
	semestre varchar(30) not null,
	promedio varchar(20) null,
	promedio_paep varchar(20) null,
	profesor varchar(60) not null,
	correo char(35) not null,
	telefono char(15) null,
	celular char(15) null,
	direccion varchar(40) null,
	ciudad varchar(30) not null,
	estado_id varchar(70) null,					
	pais char(20) null,
	apoyo varchar(50) null,
	pagina varchar(35) null,
	motivo varchar(200) null,
	correo_profesor char(55) null,
	fecha_ingreso varchar(60) null,
	imagen int default 0,
	alumno_valido int default 0,
	profesor_valido int default 0,
	semestre_valido int default 0,
	universidad_valido int default 0
) engine = innodb;");
mysql_query($alumno_temporal,$conexion);

/****** tabla alumnos ******/
mysql_query("drop table alumnos;");
$alumnos =("create table if not exists alumnos(
	nombre_completo varchar(100) not null,
    fecha_nacimiento date default null,
	genero char(9),
	universidad_id int null,
	carrera varchar(50),
	semestre int,
	promedio int,
	promedio_paep int,
	profesor_id int null,
	correo varchar(35) primary key,
	telefono char(10),
	celular char(10),
	direccion varchar(40),
	ciudad varchar(30),
	estado_id int null,
	pais char(20),
	apoyo varchar(30),
	pagina varchar(35),
	motivo varchar(200),
	status boolean not null,

	foreign key (universidad_id) references universidades(id),
	foreign key (profesor_id) references profesores(id),
	foreign key (estado_id) references estados(id)
) engine = innodb;");
mysql_query($alumnos, $conexion);

/****** tabla documentos ******/
mysql_query("drop table documentos;");
$documentos =("create table if not exists documentos(
	alumno_correo varchar(35),
    tipo_documento varchar(25) not null,
    url varchar(150) not null,
	primary key (alumno_correo, tipo_documento),
	foreign key (alumno_correo) references alumnos(correo)
) engine = innodb;");
mysql_query($documentos, $conexion);

/****** tabla mensajes ******/
mysql_query("drop table mensajes");
$mensajes = ("create table if not exists mensajes(
	id_msg int primary key auto_increment,
	correo_alumno varchar(35),
	mensaje varchar(1000) not null,
	fecha date default null,
	estado varchar(10),
	resumen varchar (30),
	asunto varchar (50),
	destinatario varchar (30),
	remitente varchar (30),
	
	foreign key (correo_alumno) references alumnos (correo)
) engine = innodb;");
mysql_query($mensajes, $conexion);

mysql_query("insert into estados(nombre) values(' ');");
mysql_query("insert into estados(nombre) values('Aguascalientes');");
mysql_query("insert into estados(nombre) values('Baja California');");
mysql_query("insert into estados(nombre) values('Baja California Sur');");
mysql_query("insert into estados(nombre) values('Campeche');");
mysql_query("insert into estados(nombre) values('Chiapas');");
mysql_query("insert into estados(nombre) values('Chihuahua');");
mysql_query("insert into estados(nombre) values('Coahuila');");
mysql_query("insert into estados(nombre) values('Colima');");
mysql_query("insert into estados(nombre) values('Distrito Federal');");
mysql_query("insert into estados(nombre) values('Durango');");
mysql_query("insert into estados(nombre) values('Estado de México');");
mysql_query("insert into estados(nombre) values('Guanajuato');");
mysql_query("insert into estados(nombre) values('Guerrero');");
mysql_query("insert into estados(nombre) values('Hidalgo');");
mysql_query("insert into estados(nombre) values('Jalisco');");
mysql_query("insert into estados(nombre) values('Michoacán');");
mysql_query("insert into estados(nombre) values('Morelos');");
mysql_query("insert into estados(nombre) values('Nayarit');");
mysql_query("insert into estados(nombre) values('Nuevo León');");
mysql_query("insert into estados(nombre) values('Oaxaca');");
mysql_query("insert into estados(nombre) values('Puebla');");
mysql_query("insert into estados(nombre) values('Querétaro');");
mysql_query("insert into estados(nombre) values('Quintana Roo');");
mysql_query("insert into estados(nombre) values('San Luis Potosí');");
mysql_query("insert into estados(nombre) values('Sinaloa');");
mysql_query("insert into estados(nombre) values('Sonora');");
mysql_query("insert into estados(nombre) values('Tabasco');");
mysql_query("insert into estados(nombre) values('Tamaulipas');");
mysql_query("insert into estados(nombre) values('Tlaxcala');");
mysql_query("insert into estados(nombre) values('Veracruz');");
mysql_query("insert into estados(nombre) values('Yucatán');");
mysql_query("insert into estados(nombre) values('Zacatecas');");


mysql_query("insert into universidades (nombre,status) 
values('','0');");

mysql_query("insert into profesores(nombre_completo,status)
 values('','0');"); 

echo "<br> se crearon todas las tablas";



/****************************************************************/
/******                                                    ******/
/******          Se crean los procedimientos:              ******/
/******                                                    ******/
/******    ->  procedimiento inserta_profesor              ******/
/******    ->  procedimiento inserta_documento             ******/
/******    ->  procedimiento elimina_alumno                ******/
/******    ->  procedimiento selecion_alumno               ******/
/******    ->  procedimiento actualiza_universidad         ******/
/******    ->  procedimiento inserta_alumno                ******/
/******    ->  procedimiento edita_alumno                  ******/
/******    ->  procedimiento inserta_universidad           ******/
/******    ->  procedimiento selecciona_un_alumno          ******/
/******    ->  procedimiento selecciona_universidades      ******/
/******    ->  procedimiento elimina_universidad           ******/
/******    ->  procedimiento guarda_mensaje                ******/
/******    ->  procedimiento selecciona_mensajes           ******/
/******    ->  procedimiento elimina_mensaje               ******/
/******    ->  procedimiento selecciona_mensajes           ******/
/******                                                    ******/
/****************************************************************/

mysql_query("insert into clientes (correo,clave,prioridad) values('admin','".sha1('admin')."',1);");

mysql_query("insert into producto values ('1','TOPSY TURVY',3000,1,'".utf8_encode("Pastel hecho a base de pan y fondant, con un bonito diseño para tu fiesta de 15 años. Tu pastel será la sensación de la fiesta.")."','images/pasteles/1.jpg',8);");
mysql_query("insert into producto values ('2','Pastel Cordobes',5000,1,'".utf8_encode("Pastel con su raro diseño, llamado así por ser un pastel deforme, pero muy bien diseñando, para darle un toque diferente a tu fiesta.")."','images/pasteles/2.jpg',8);");
mysql_query("insert into producto values ('3','Pastel de Avellana',6000,1,'".utf8_encode("Pastel con un diseño muy creativo sorprenderá a todos tus invitados cuando lo vean, por su extravagancia y originalidad le pondrá un toque muy especial a tu celebración.")."','images/pasteles/3.jpg',8);");
mysql_query("insert into producto values ('4','Pastel de Cerezas',6000,2,'".utf8_encode("Diseño original a base de pan ya sea de vainilla, platano ó chocolate, y una base de fondant, además adornado con perlas sabor a chocolate.")."','images/pasteles/4.jpg',8);");
mysql_query("insert into producto values ('5','Pastel de Tres Leches',5000,2,'".utf8_encode("Diseño original a base de pan ya sea de vainilla, platano ó chocolate, y una base de fondant, además adornado con perlas sabor a chocolate y flores hechas a base de fondant.")."','images/pasteles/5.jpg',8);");
mysql_query("insert into producto values ('6','Pastel de Chocolate',5500,2,'".utf8_encode("Pastel hecho a base de fondant y pan de diferentes sabores, con un diseño muy extravagante, cabe destacar que todo lo que forma parte de él es comestible.")."','images/pasteles/6.jpg',8);");
mysql_query("insert into producto values ('7','Pastel de Almendra',3000,3,'".utf8_encode("Este pastel elaborado para esa ocasión especial o esa persona especial, elaborado a base de fondant y pan de chocolate.")."','images/pasteles/7.jpg',8);");
mysql_query("insert into producto values ('8','Bolsa Fondant',1500,3,'".utf8_encode("Si lo que deseas es darle una sorpresa a esa persona especial, este hermoso pastel seria el indicado, con su diseño muy creativo, elaborado a base de fondat y pan de platano.")."','images/pasteles/8.jpg',8);");
mysql_query("insert into producto values ('9','Diseño personal Fondant ',1000,3,'".utf8_encode("Tu también puedes darnos tu idea y te crearemos tu pastel, e aquí un claro ejemplo, también elaborado a base de fondant y pan de vainilla este pastel elaborado muy detalladamente será un buen detalle para regalar.")."','images/pasteles/9.jpg',8);");



mysql_close($conexion);

?>
