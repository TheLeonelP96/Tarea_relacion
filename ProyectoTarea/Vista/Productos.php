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
		<div class="col-md-6">
			<form method="POST" action="../Control/crearProducto.php">
			 	<div class="form-group">
			 		<label>Producto General</label>
			 		<input class="form-control" type="tex" name="prdto">
			 	</div>
			 	<form method="POST" action="../Control/">
			 	<div class="form-group">
			 		<label>Precio</label>
			 		<input class="form-control" type="tex" name="prcio">
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