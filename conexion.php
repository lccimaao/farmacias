<?php
$conexion = mysql_connect('mysql10.000webhost.com','a5133475_product','blueblue11');

if (!$conexion){
	die('No se pudo conectar:' . mysql_error());
}	

$bd = mysql_select_db('productos',$conexion);
mysql_set_charset('utf-8', $conexion);
mysql_query("SET NAMES 'utf8'");
?>