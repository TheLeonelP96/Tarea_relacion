<!DOCTYPE html>
<html>
<head>
	<title>Sucursales</title>
</head>
<body>
<?php
 include "menu.php";
?>
<div class="container">
	<h2>Sucursales :D</h2>
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="../Control/crearSucursal.php">
			 	<div class="form-group">
			 		<label>Nombre de la sucursal</label>
			 		<input class="form-control" type="tex" name="sucu">
			 	</div>
			 	<form method="POST" action="../Control/">
			 	<div class="form-group">
			 		<label>Ciudad</label>
			 		<input class="form-control" type="tex" name="city">
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