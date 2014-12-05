<?php 
	include_once('../../conexion.php');
	
	$no = $_POST['nombreProducto'];
	$co = $_POST['concentracion'];
	$pp = $_POST['precioProducto'];
	$im = $_POST['imagen'];
	$ci = $_POST['categoria_id'];
	
	mysql_query("INSERT INTO productos (nombreProducto,concentracion,precioProducto,imagen,categoria_id)
	VALUES ('$no','$co','$pp','$im','$ci')");
		
	header('Location:productosAdmin.php');
?>