<?php
$titulo_pagina = "Editar";
include_once('../../conexion.php');
$url_id = $_GET['id'];
	
$productos = mysql_query("SELECT * FROM productos WHERE id = $url_id");
while($fila = mysql_fetch_array($productos)){

	$nombreProducto = $fila['nombreProducto'];
	$concentracion =$fila['concentracion'];
	$precio =$fila['precioProducto'];
	$categoria =$fila['categoria_id'];
}
?>
<!doctype html>
<html>
<head>
</head>
<body>
	<!-- CABEZA DE LA PÁGINA-->
	<header>
	</header>
    
	<!-- MENU GENERAL-->
		<form action="actualiza.php" method="POST">
		<input type="hidden" name="id" id="id" value="<?php echo $id ?>"></input>
		    
		<label>Nombre del producto:</label>
		<input type="text" name="id" id="id" value="<?php echo $nombreProducto ?>"></input>
		
		<label>Concentración:</label>
		<input type="text" name="nombreProducto" id="id" value="<?php echo $concentracion ?>"></input>
		
		<label>Precio del producto:</label>
		<input type="text" name="concentracion" id="id" value="<?php echo $precio ?>"></input>
		
		<label>Categoría:</label>
		<input type="text" name="categoria" id="id" value="<?php echo $categoria ?>"></input>
	
		<input type="submit" value="Actualizar"></input>
		</form>
</body>