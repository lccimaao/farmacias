<?php
	include_once ("../../conexion.php");
	$titulo_sitio = "";
	
	$id = $_GET['id'];
	$productos = mysql_query("SELECT * FROM categorias");
	$titulo_pagina = "Categorias";
?>

<!DOCTYPE HTML>
<html>
<head>

</head>
<body> 
	
	
			
			<p>Categorias</p>
			
			<a href="crear_categorias.php">Crear categorías</a>
			
						<table border="1">																												
  	<tr>
      	<th> ID </th>
        <th> NOMBRE DE LA CATEGORIA</th>
       
     
				<th> ACTUALIZAR </th>
        <th> ELIMINAR </th>
	  </tr>

	
		<?php
	
	      while ($fila = mysql_fetch_array($productos)){
						echo "<tr>";
							echo "<td>". $fila['id'] . " " . "</td>";
							echo "<td>". $fila['nombre'] . " " . "</td>";
					
						
						
							echo "<td><a href='editarCategorias.php?id=".$fila['id']."'> EDITAR </a></td>";
							echo "<td><a href='eliminarCategorias.php?id=".$fila['id']."'> ELIMINAR </a></td>";
					echo "</tr>";
					};
					
					$no = $_POST['nombre'];
					$id = $_GET['id'];
	?>
	</table>
</body>
</html>