<!DOCTYPE html>
<html lang="es">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSlap</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>
  
<?php

  include_once("../conf/conf.php");

  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  if (isset($_SESSION['usuario']) && isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
    include_once("h_adm.php");

  } elseif (isset($_SESSION['usuario'])) {
    include_once("h_log.php");

  } else {
    include_once("h_reg.php");

  }

?>
