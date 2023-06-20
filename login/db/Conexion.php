<?php

$host = "localhost";
$user = "root";
$pass = "";

$db = "inciodesesiondb";


$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion ->connect_errno) {
    echo "fallos en conexión";
    exit();
}

?>