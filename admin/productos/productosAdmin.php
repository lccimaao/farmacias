<?php
	include_once ("../../conexion.php");
	$titulo_sitio = "";
	
	$id = $_GET['id'];
	$productos = mysql_query("SELECT * FROM productos");
	$titulo_pagina = "Productos";
?>

<!DOCTYPE HTML>
<html>
<head>
	
</head>
<body> 

	
	<div class="clear"></div>
	
	<div class="contenderProductos">
		
			
			<p>PRODUCTOS</p>
			
			<a href="crear_producto.php">Crear Producto</a>
			
						<table border="1">																												
  	<tr>
      	<th> ID </th>
        <th> NOMBRE PRODUCTO </th>
        <th> CONCENTRACIÓN </th>
        <th> PRECIO PRODUCTO </th>
        <th> CATEGORÍA ID </th>
				<th> ACTUALIZAR </th>
        <th> ELIMINAR </th>
	  </tr>

	
		<?php
	
	      while ($fila = mysql_fetch_array($productos)){
						echo "<tr>";
							echo "<td>". $fila['id'] . " " . "</td>";
							echo "<td>". $fila['nombreProducto'] . " " . "</td>";
							echo "<td>". $fila['concentracion'] . " " ."</td>";
							echo "<td>". $fila['precioProducto'] . " " ."</td>";
							$id_categoria= $fila['categoria_id'];
							$categoria = mysql_query("SELECT * FROM categorias WHERE id=$id_categoria");
							while ($fila2 = mysql_fetch_array($categoria)){
								$nombre_categoria = $fila2['nombre'];
							};
							echo "<td>". $nombre_categoria . " " ."</td>";
							echo "<td><a href='editar.php?id=".$fila['id']."'> EDITAR </a></td>";
							echo "<td><a href='eliminar.php?id=".$fila['id']."'> ELIMINAR </a></td>";
					echo "</tr>";
					};
					
					$im = $_POST['nombre'];
					$id = $_GET['id'];
	?>
	</table>
	
<div class="clear"></div>
</div>
	
</body>
</html>