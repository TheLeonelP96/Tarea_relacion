<!DOCTYPE html>
<html>
<head>
	<title>Tabla Pago</title>
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
						<th>Tipo de pago</th>
						<th>Plataforma</th>
						<th class="text-center">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('../Modelo/conexion.php');
						$query="SELECT `id_Pago`, `TipoPago`, `Plataforma` FROM `tipopago`";
						$res=$conexion->query($query);
						while ($row=$res->fetch_assoc())
						{
							?>	
							<tr>
								<td><?php echo $row['id_Pago']?></td>
								<td><?php echo $row['TipoPago']?></td>
								<td><?php echo $row['Plataforma']?></td>
								<td class="text-center">
									<a class="btn btn-danger" href="../Control/eliminarPago.php?ide=<?php echo $row['id_Pago'];?>" 
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