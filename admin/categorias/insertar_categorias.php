<?php 
	include_once('../../conexion.php');
	
	$im = $_POST['nombre'];

	
	mysql_query("INSERT INTO categorias (nombre)
	VALUES ('$im')");
		
	header('Location:categoriasAdmin.php');
?>