<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>
<?php
 	include "menu.php";
?>
<div class="container">
	<h2>Productos :V</h2>
	<div class="row">
        <?php
        $id=$_REQUEST['ide'];
            //llamar  a la conexion de base de datos
                include('../Modelo/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT * FROM `iproducto` WHERE id_Producto='$id'";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
               $row= $res->fetch_assoc()
            ?>
		<div class="col-md-6">
			<form method="POST" action="../Control/crearProducto.php?ide=<?php echo $row['id_Producto']?>">
			 	<div class="form-group">
			 		<label>Producto General</label>
			 		<input class="form-control" type="tex" name="prdto" value="<?php echo $row['N_producto']?>">
			 	</div>
			 	<form method="POST" action="../Control/">
			 	<div class="form-group">
			 		<label>Precio</label>
			 		<input class="form-control" type="tex" name="prcio" value="<?php echo $row['Precio']?>">
			 	</div>
			 	<br>
		 		<div class="form-group">
			 		<button class="btn btn-primary" type="submit">Guardar</button>
			 	</div>
			</form>
		</div>
	</div>
	
</div>
</body>
</html>