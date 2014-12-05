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
	
	<div class="flexslider">
			<ul class="slides">
				<li><img src="img/slider/slider_1.jpg" /></li>
	  		<li><img src="img/slider/slider_2.jpg"  /></li>
	  		<li><img src="img/slider/slider_3.jpg"  /></li>
	  		<li><img src="img/slider/slider_4.jpg"  /></li>
			</ul>
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