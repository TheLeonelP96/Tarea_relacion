<!DOCTYPE html>
<html>
<head>
	<title>Tabla Sucursal</title>
</head>
<body>
<?php
	include "menu.php";
?>
<div class="container">
	<h2>tabla lol</h2>
	<div class="row">
		<div class="colm-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Producto</th>
						<th>Precio</th>
						<th class="text-center">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('../Modelo/conexion.php');
						$query="SELECT `id_sucursal`, `N_sucursal`, `Ciudad` FROM `sucursal`";
						$res=$conexion->query($query);
						while ($row=$res->fetch_assoc())
						{
							?>	
							<tr>
								<td><?php echo $row['id_sucursal']?></td>
								<td><?php echo $row['N_sucursal']?></td>
								<td><?php echo $row['Ciudad']?></td>
								<td class="text-center">
									<a class="btn btn-danger" href="../Control/eliminarSucursal.php?id=<?php echo $row['id_sucursal'];?>" 
										class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
										<span class="fas fa-trash"> Eliminar</span>
									</a>
								</td>
							</tr>	
							<?php	
						}
					?>
				</tbody>
			</table>
		</div>
		
	</div>
</div>

</body>
</html>