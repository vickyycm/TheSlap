<?php
include_once(__DIR__ . "/../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <h1 class="colorg text-center mb-4">Bienvenido devuelta!</h1>
            
            <?php
            // Sistema de alertas unificado
            $mensaje = "";
            if(isset($_GET['reg'])) $mensaje = "Podés ingresar correctamente.";
            if(isset($_GET['log'])) $mensaje = "No estás registrado, volvé a intentarlo.";
            if(isset($_GET['ban'])) $mensaje = "Tu cuenta está baneada, contactate con un supervisor.";

            if ($mensaje !== "") {
                echo "<div class='alert colorete2 text-white text-center shadow-sm mb-4' role='alert'>$mensaje</div>";
            }
            ?>

            <form action="../log/log.php" method="post" class="colorete p-4 shadow-lg rounded">
                <fieldset class="border-0">
                    <div class="mb-3">
                        <label for="correo" class="arregloletra form-label">Correo electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="tu@mail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass_uno" class="arregloletra form-label">Contraseña</label>
                        <input type="password" name="pass_uno" id="pass_uno" class="form-control" placeholder="••••••••" required>
                    </div>
                    
                    <div class="text-center mb-4">
                        <a class="letra cambio small text-decoration-none" href="../pages/registro.php">¿No tenés cuenta? Regístrate acá</a>
                    </div>
                    
                    <button type="submit" class="btn btn-warning w-100 fw-bold">INGRESAR</button>
                </fieldset>
            </form>
        </div>
    </div>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>