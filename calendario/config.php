<?php

/* Chiphysi programación suscribete */
/* V 0.1 original */
/* Autor: Chiphysi  Autor: Jhonatan Cardona   */
/* Derechos de autor(Suscribete) */



$servidor='localhost';
$usuario='root';
$pass='';
$bd='eventos';


$conexion = new mysqli($servidor, $usuario, $pass, $bd);	


$conexion->set_charset('utf8');


if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}


$base_url="http://localhost/calendario/";

?>
