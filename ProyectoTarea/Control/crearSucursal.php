<?php
include('../Modelo/conexion.php');

$sc= $_POST['sucu'];
$ct= $_POST['city'];

$query="INSERT INTO  `sucursal`( `N_sucursal`, `Ciudad`) VALUES ('$sc', '$ct')";
$res=$conexion->query($query);
if ($res) 
{
	header("location:../Vista/TablaSucursal.php");
}
else
{
	echo "No guardo!";
}

?>