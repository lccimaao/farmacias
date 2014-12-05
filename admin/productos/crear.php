<?php
	include_once ("conexion.php");
	$titulo_sitio = "";
	
	$id = $_GET['id'];
	$productos = mysql_query("SELECT * FROM productos WHERE categoria_id=$id");
	$categoria = mysql_query("SELECT * FROM categorias WHERE id=$id");
	while ($fila = mysql_fetch_array($categoria)){
		$nombre_categoria = $fila['nombre'];
	};
	$titulo_pagina = "Productos: " . $nombre_categoria;
?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ("head.php"); ?>
</head>
<body> 
	
	<?php include_once ("header.php"); ?>
	
	
	<div class="clear"></div>
	
	<div class="contenderProductos">
		
			
			<p >MEDICAMENTOS DE TIPO: <?php $mayusculas = $nombre_categoria;
																			$mayusculas = strtoupper($mayusculas);
																			echo $mayusculas;		?></p>
	
		<?php
	
	      while ($fila = mysql_fetch_array($productos)){
					echo "<div class='producto' style='background-image:url(img/oral/". $fila['imagen'] . ")'>";
						echo "<div class='infoProducto'>";
							echo "<p class='nombreProducto'>" . $fila['nombreProducto'] . "</p>";
						echo "</div>";
					echo "</div>";
					};
	?>
<div class="clear"></div>
</div>
	
		

	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/cbpHorizontalMenu.min.js"></script>
	<script>

	
		$(function() {
			cbpHorizontalMenu.init();
		});
	</script>
	<?php 
	include_once ("footer.php");
?>
</body>
</html>