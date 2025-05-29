<?php
include('../Modelo/conexion.php');

$nm= $_POST['nom'];
$ap= $_POST['ape'];
$di= $_POST['direc'];
$cod= $_POST['codp'];
$proid= $_POST['producto_id'];
$paid= $_POST['Pago_id'];
$suid= $_POST['Sucursal_id'];

$query="INSERT INTO `cliente`( `Nombre`, `Apellido`, `Direccion`, `CodPostal`, `ProductoID`, `TipoPagoID`, `SucursaID`)
 VALUES ('$nm', '$ap', '$di', $cod, $proid, $paid, $suid )";
$res=$conexion->query($query);
if ($res) 
{
	header("location:../Vista/TablaCliente.php");
}
else
{
	echo "No guardo!";
}

?>