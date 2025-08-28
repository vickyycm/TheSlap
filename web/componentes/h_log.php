<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<header>
  <div class="contenedor">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php"><img src="../img/theslap.png" alt="logo TheSlap"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto">
            <a class="nav-link cambio" aria-current="page" href="inicio.php">Inicio</a>
            <a class="nav-link cambio" href="storys.php">Storys</a>
            <a class="nav-link cambio" href="eventos.php">Eventos</a>
            <a class="nav-link cambio" href="escuela.php">Escuela</a>
          </div>

          <?php
          
          if (isset($_SESSION['usuario'])) {
              print
               "<div class='d-flex'><a class='btn ms-auto nombres nombres1 cambio' href='../log/logout.php'>Cerrar sesión</a></div>";
          } 

          ?>
        </div>
      </div>
    </nav>
  </div>
</header>