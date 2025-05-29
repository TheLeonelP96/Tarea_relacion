<!DOCTYPE html>
<html>
<head>
	<title>Tabla Producto</title>
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
						$query="SELECT `id_Producto`, `N_producto`, `Precio` FROM `iproducto`";
						$res=$conexion->query($query);
						while ($row=$res->fetch_assoc())
						{
							?>	
								<tr>
									<td><?php echo $row['id_Producto']?></td>
									<td><?php echo $row['N_producto']?></td>
									<td><?php echo $row['Precio']?></td>
									<td class="text-center">
										<a class="btn btn-danger" href="../Control/eliminarProducto.php?ide=<?php echo $row['id_Producto'];?>" 
											class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
											<span class="fas fa-trash"> Eliminar</span>
										</a>
									</td>
									<td class="text-center">
										<a class="btn btn-success" href="../Vista/editProducto.php?ide=<?php echo $row['Id_Producto'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Actualizar">
										<span class="fas fa-trash">Actualizar</span>
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