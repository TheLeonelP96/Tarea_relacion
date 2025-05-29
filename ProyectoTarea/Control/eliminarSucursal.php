<?php
	include('../Modelo/conexion.php');

	$i= $_REQUEST['id'];
	$query="DELETE FROM `sucursal` WHERE id_sucursal='$i'";

	$res=$conexion->query($query);
	if ($res) {
		header("location:../Vista/TablaSucursal.php");
	}else
	{
		echo "No se pudo carnal";
	}



?>