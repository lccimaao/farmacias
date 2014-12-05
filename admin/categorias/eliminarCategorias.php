<?php
	include_once ("../../conexion.php");
	$URL_id = $_GET['id'];
	mysql_query("DELETE FROM categorias WHERE id= $URL_id");
	header('Location:categoriasAdmin.php');
?>