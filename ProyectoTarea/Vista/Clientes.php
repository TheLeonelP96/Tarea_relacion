<!DOCTYPE html>
<html>
<head>
	<title>tabla 1</title>
</head>
<body>
<?php
 include "menu.php"
?>
<div class="container">
	<h2>Cliente :v</h2>
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="../Control/crearCliente.php">
			 	<div class="form-group">
			 		<label>Nombre</label>
			 		<input class="form-control" type="tex" name="nom">
			 	</div>
			 	<div class="form-group">
			 		<label>Apellido</label>
			 		<input class="form-control" type="tex" name="ape">
			 	</div>
			 	<div class="form-group">
			 		<label>Direccion</label>
			 		<input type="text" name="direc" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label>Codigo Postal</label>
			 		<input type="text" name="codp" class="form-control">
			 	</div>
				<div class="form-group">
			 		<label>Producto: </label>
			 		<select class="form-control"name="producto_id" required>
			 			<?php
							$productos=mysqli_query($conexion, "SELECT id_Producto, `N_producto` FROM `iproducto`");
							while ($row=mysqli_fetch_assoc($productos))
							{
								?>
									<option value="<?php echo $row['id_Producto']?>"><?php echo $row['N_producto']?></option>	
								<?php
							}
			 			
			 			?>
			 		</select>
			 	</div>
			 	<div class="form-group">
			 		<label>Tipo de pago: </label>
			 		<select name="Pago_id" class="form-control" required>
			 			<?php
						$pay=mysqli_query($conexion, "SELECT id_Pago, TipoPago FROM tipopago");
						while($row=mysqli_fetch_assoc($pay))
						{
						?>
							<option value="<?php echo $row['id_Pago']?>"><?php echo $row['TipoPago']?></option>	
						<?php
						}

			 			?>
			 		</select>
			 	</div>
			 	<div class="form-group">
			 		<label>Sucursal: </label>
			 		<select name="Sucursal_id" class="form-control" required>
			 			<?php
			 				$sucur=mysqli_query($conexion, "SELECT `id_sucursal`, `N_sucursal` FROM `sucursal`");
							while($row=mysqli_fetch_assoc($sucur))
							{
								?>
									<option value="<?php echo $row['id_Pago']?>"><?php echo $row['TipoPago']?></option>	
								<?php
							}
			 			?>
			 		</select>
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