<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tienda_virtual";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("ERROR: " . $conexion->connect_error);
}

echo "CONEXION OK";

?>