<?php
	include('../Modelo/conexion.php');

	$id= $_REQUEST['ide'];
	$query="DELETE FROM 'cliente' WHERE id_Cliente='$id'";

	$res=$conexion->query($query);
	if ($res) {
		header("location:../Vista/TablaCliente.php");
	}
	else
	{
		echo "No se pudo carnal";
	}



?>