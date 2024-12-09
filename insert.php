<?php
include "conexion.php";

$vCod = $_POST['vCodigo'];
$vDes = $_POST['vDescripcion'];
$vPre = $_POST['vPrecio'];

$sql = "Insert into productos (codigoPros,descripcionProd,precioProd) values ('".$vCod."','".$vDes."','".$vPre."')";
mysqli_query($conex,$sql) or die (musqli_error());

?>