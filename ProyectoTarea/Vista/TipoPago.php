<!DOCTYPE html>
<html>
<head>
	<title>Metodos de pago</title>
</head>
<body>
<?php
 	include "menu.php";
?>
<div class="container">
	<h2>Tipos de pagos</h2>
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="../Control/crearPagos.php">
			 	<div class="form-group">
			 		<label>Tipo de pago</label>
			 		<input class="form-control" type="tex" name="tipago">
			 	</div>
			 	<form method="POST" action="../Control/">
			 	<div class="form-group">
			 		<label>Plataforma de pago</label>
			 		<input class="form-control" type="tex" name="forpago">
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