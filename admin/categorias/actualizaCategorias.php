<?php 
	include_once('../../conexion.php');
	
	$nombreProducto = $_POST['nombreProducto'];
	$concentracion =$_POST['concentracion'];
	$precio =$_POST['precioProducto'];
	$categoria =$_POST['categoria_id'];
	$id = $_POST['id'];

	mysql_query("UPDATE productos SET nombreProducto='$nombre', concentracion='$concentracion', precioProducto='$precio', categoria_id='$categoria' WHERE id='$id'");

	header("Location:productosAdmin.php");
?>