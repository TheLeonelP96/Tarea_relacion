<!DOCTYPE html>
<html>
<head>
	<title>Tabla Cliente</title>
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
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Codigo postal</th>
						<th>Producto</th>
						<th>Pago</th>
						<th>Sucursales</th>
						<th class="text-center">Eliminar</th>

					</tr>
				</thead>
				<tbody>
					<?php
						include('../Modelo/conexion.php');
						$query="SELECT `id_Cliente`, `Nombre`, `Apellido`, `Direccion`, `CodPostal`, `ProductoID`, `TipoPagoID`, `SucursaID` FROM `cliente`";
						$res=$conexion->query($query);
						while ($row=$res->fetch_assoc())
						{
							?>	
							<tr>
								<td><?php echo $row['id_Cliente']?></td>
								<td><?php echo $row['Nombre']?></td>
								<td><?php echo $row['Apellido']?></td>
								<td><?php echo $row['Direccion']?></td>
								<td><?php echo $row['CodPostal']?></td>
								<td><?php echo $row['ProductoID']?></td>
								<td><?php echo $row['TipoPagoID']?></td>
								<td><?php echo $row['SucursaID']?></td>
								<td class="text-center">
									<a class="btn btn-danger" href="../Control/eliminarCliente.php?ide=<?php echo $row['id_Cliente'];?>" 
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