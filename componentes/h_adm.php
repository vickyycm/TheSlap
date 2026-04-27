<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="colorhead shadow-sm" style="border-bottom: 4px solid #fbbf24;">
  <div class="container">
    <nav class="navbar navbar-expand-lg py-2">
      <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php">
    <img src="../img/theslap.png" alt="logo TheSlap">
</a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navReg" aria-label="Toggle navigation">
    <span style="font-size: 1.8rem; line-height: 1;">🍐</span>
</button>

        <div class="collapse navbar-collapse" id="navAdm">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link cambio px-3 fw-bold" href="inicio.php">Inicio</a>
            <a class="nav-link cambio px-3 fw-bold" href="storys.php">Storys</a>
            <a class="nav-link cambio px-3 fw-bold" href="eventos.php">Eventos</a>
            <a class="nav-link cambio px-3 fw-bold" href="escuela.php">Escuela</a>
            <a class="nav-link text-white px-3 fw-bold bg-danger rounded ms-lg-2" href="#" style="--bs-bg-opacity: .4;">PANEL CONTROL</a>
          </div>

          <div class="d-flex align-items-center gap-3">
            <?php if (isset($_SESSION['usuario'])): ?>
                <span class="badge bg-dark text-warning p-2 px-3 fw-bold">ADMIN: <?php echo strtoupper($_SESSION['usuario']); ?></span>
                
                <a class="btn btn-outline-light fw-bold text-uppercase px-4" 
                   href="../log/logout.php" 
                   style="border-radius: 8px; border-width: 2px;">
                   Salir
                </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>