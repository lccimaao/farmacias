<?php
	$titulo = "Crear Categorías";
?>
<!DOCTYPE>
<html>
	<head>
    	<meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    
    <body>
    	<h1><?php echo $titulo; ?></h1>
        
        <h3>Nueva categoria</h3>
        
        <form action="insertar_categorias.php" method="POST">
            <label for="id">Nombre de la categoria</label><br>
            <input type="text" name="nombre" value="" id="nombre"><br>
            <br>
            <p><input type="submit" value="continuar"></p>
        </form>
             
    </body>
</html>