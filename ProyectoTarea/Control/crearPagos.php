<?php
include('../Modelo/conexion.php');

$tip= $_POST['tipago'];
$forp= $_POST['forpago'];

$query="INSERT INTO `tipopago`(`TipoPago`, `Plataforma`) VALUES ('$tip', '$forp')";
$res=$conexion->query($query);
if ($res) 
{
	header("location:../Vista/TablaPago.php");
}
else
{
	echo "No guardo!";
}

?>