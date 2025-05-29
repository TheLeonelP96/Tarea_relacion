<?php
	include('../Modelo/conexion.php');

	$id= $_REQUEST['ide'];
	$query="DELETE FROM `tipopago` WHERE id_Pago='$id' ";

	$res=$conexion->query($query);
	if ($res) {
		header("location:../Vista/TablaPago.php");
	}else
	{
		echo "No se pudo carnal";
	}



?>