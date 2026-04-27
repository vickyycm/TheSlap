<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSlap</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/estilos.css?v=1.2">
</head>

<body>
  
<?php
  include_once(__DIR__ . "/../conf/conf.php");

  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  // Lógica de ruteo de menús
  if (isset($_SESSION['usuario']) && isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
    // Si es Administrador
    include_once(__DIR__ . "/h_adm.php");

  } elseif (isset($_SESSION['usuario'])) {
    // Si es Usuario común logueado
    include_once(__DIR__ . "/h_log.php");

  } else {
    // Si es Invitado (no logueado)
    include_once(__DIR__ . "/h_reg.php");
  }
?>