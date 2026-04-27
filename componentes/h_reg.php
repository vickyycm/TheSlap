<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="colorhead shadow-sm">
  <div class="container"> <nav class="navbar navbar-expand-lg py-2">
      <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php">
    <img src="../img/theslap.png" alt="logo TheSlap">
</a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navReg" aria-label="Toggle navigation">
    <span style="font-size: 1.8rem; line-height: 1;">🍐</span>
</button>

        <div class="collapse navbar-collapse" id="navReg">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link cambio px-3 fw-bold" href="inicio.php">Inicio</a>
            <a class="nav-link cambio px-3 fw-bold" href="storys.php">Storys</a>
            <a class="nav-link cambio px-3 fw-bold" href="eventos.php">Eventos</a>
            <a class="nav-link cambio px-3 fw-bold" href="escuela.php">Escuela</a>
          </div>

          <div class="d-flex flex-column flex-lg-row gap-2">
            <?php if (!isset($_SESSION['usuario'])): ?>
                <a class="btn btn-outline-light fw-bold text-uppercase px-4" href="login.php" style="border-radius: 8px; border-width: 2px;">
                    Log In
                </a>
                
                <a class="btn btn-warning fw-bold text-uppercase px-4 shadow-sm" href="registro.php" style="background-color: #fbbf24 !important; border: none; border-radius: 8px; color: #1e293b !important;">
                    ¡Registrate!
                </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>