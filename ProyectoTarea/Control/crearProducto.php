<?php
include('../Modelo/conexion.php');

$pro= $_POST['prdto'];
$pre= $_POST['prcio'];

$query="INSERT INTO `iproducto`( `N_producto`, `Precio`) VALUES ('$pro', '$pre')";
$res=$conexion->query($query);
if ($res) 
{
	header("location:../Vista/TablaProducto.php");
}
else
{
	echo "No guardo!";
}

?>