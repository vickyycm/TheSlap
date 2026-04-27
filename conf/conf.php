<?php
include_once("env_loader.php"); 

$servidor       = $_ENV['DB_HOST'];
$usuario        = $_ENV['DB_USER'];
$contrasena    = $_ENV['DB_PASS']; 
$base_de_datos  = $_ENV['DB_NAME'];
$puerto         = $_ENV['DB_PORT'];

$conx = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos, $puerto);

if (!$conx) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>