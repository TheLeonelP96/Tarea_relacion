<?php
include('../Modelo/conexion.php');
$id=$_REQUEST['ide'];

$pro= $_POST['prdto'];
$pre= $_POST['prcio'];

$query="UPDATE `tipopago` SET `id_Pago`='[$pro]',`TipoPago`='[$pre]'";
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