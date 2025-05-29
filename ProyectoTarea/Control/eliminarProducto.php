<?php
	include('../Modelo/conexion.php');

	$id= $_REQUEST['ide'];
	$query="DELETE FROM `iproducto` WHERE id_Producto='$id'";

	$res=$conexion->query($query);
	if ($res) {
		header("location:../Vista/TablaProducto.php");
	}else
	{
		echo "No se pudo carnal";
	}



?>