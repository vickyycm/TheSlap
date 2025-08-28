<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<header>
  <div class="contenedor">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="../img/theslap.png" alt="logo TheSlap">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

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