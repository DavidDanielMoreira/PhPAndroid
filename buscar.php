<?php
include "conexion.php";

$vCod = $_GET['vCodigo'];

$sql = "Select * from productos where codigoProd= '$vCod'";
$resultado = $conex -> query($sql);

while($fila=$resultado->fetch_array()){
    $producto[] = array_map('utf8_encode', $fila);

}
echo json_encode($producto);
?>