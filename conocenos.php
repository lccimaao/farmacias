<?php
	include_once ("conexion.php");
	$titulo_sitio = "";
	$titulo_pagina = "Conócenos";
?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ("head.php"); ?>
</head>
<body> 
	
	<?php include_once ("header.php"); ?>
	
	
	<div class="clear"></div>
	
		<div class="imagen-conocenos">

			<h2>Quienes Somos</h2>
			<div class="parra-conocenos">
			<p class="parrafo">Somos una extensa red que agrupa a empresas e instituciones que investigan, fabrican y comercializan productos farmacéuticos y dermo-cosméticos que cumplen con los más altos estándares de calidad, apegados al cumplimiento de la normatividad nacional: las buenas prácticas de fabricación, de documentación y analíticas.
</p>
			</div>

			<h2>Misión</h2>
			<div class="parra-conocenos">
			<p class="parrafo">Mejorar y preservar la salud y bienestar de las personas mediante productos innovadores, seguros y eficaces, otorgando oportunidades de desarrollo a nuestros colaboradores y rentabilidad a nuestros accionistas e impactando positivamente a la comunidad y al medio ambiente.</p>
		</div>
			<h2>Visión</h2>
			<div class="parra-conocenos">
			<p class="parrafo">Ser la empresa líder en nuestras categorías de medicamentos y productos para el cuidado personal, y ser reconocidos por impactar positivamente en la salud y bienestar de las personas, comunidad y medio ambiente.</p>
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