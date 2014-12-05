<?php
	include_once ("conexion.php");
	$titulo_sitio = "";
	$titulo_pagina = "Hogar";
?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ("head.php"); ?>
</head>
<body> 
	
	<?php include_once ("header.php"); ?>
	
	
	<div class="clear"></div>
	
		<div id="imagen-puntos">
		
			<p class="p-contacto">Queremos saber tus opiniones, experiencias e ideas para atender al 100% tus necesidades.</p>
			<p class="p-contacto">Llámanos sin costo al 01-800-911-6666 (SIMITEL) o búscanos en cualquiera de nuestras sucursales.</p>
			<div id="contiene_iframe">
			
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d59569.25888512741!2d-101.7891515!3d21.0695195!3m2!1i1024!2i768!4f13.1!2m1!1sfarmacias+similares!5e0!3m2!1sen!2smx!4v1417396501434" width="960" height="450" frameborder="0" style="border:0"></iframe>
			</div>
		
	</div>

	
	<div class="clear"></div>
	
	<?php 
	include_once ("footer.php");
?>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
</body>
</html>