<?php
	$titulo = "Crear Producto";
?>
<!DOCTYPE>
<html>
	<head>
    	<meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    
    <body>
    	<h1><?php echo $titulo; ?></h1>
        
        <h3>Producto Nuevo</h3>
        
        <form action="insertar_producto.php" method="POST">
        	<label for="id">Nombre</label><br>
            <input type="text" name="nombreProducto" value="" id="nombreProducto"><br>
            <br>
            <label for="id">Concentracion</label><br>
            <input type="text" name="concentracion" value="" id="concentracion"><br>
            <br>
            <label for="id">Precio del Producto</label><br>
            <input type="text" name="precioProducto" value="" id="precioProducto"><br>
            <br>
            <label for="id">Categoria</label><br>
            <input type="text" name="categoria_id" value="" id="categoria_id"><br>
            <br>
            <p><input type="submit" value="continuar"></p>
        </form>
             
    </body>
</html>