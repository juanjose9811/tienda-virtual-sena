<?php

include "conexion.php";

$sql = "SELECT id, marca, modelo, precio, capacidad, cantidad FROM lavadoras";

$resultado = $conexion->query($sql);

$datos = [];

while($fila = $resultado->fetch_assoc()){
    $datos[] = $fila;
}

echo json_encode($datos);

?>