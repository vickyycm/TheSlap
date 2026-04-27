<?php
include_once(__DIR__ . "/../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            <h1 class="colorg text-center mb-4">Registrate</h1>
            
            <?php
            // Sistema de alertas de error
            $error = "";
            if(isset($_GET['error'])) $error = "Las contraseñas no son idénticas.";
            if(isset($_GET['edad'])) $error = "No superás la edad permitida.";
            if(isset($_GET['usuario'])) $error = "Usuario ya existente.";
            if(isset($_GET['mail'])) $error = "Correo ya existente.";

            if ($error !== "") {
                echo "<div class='alert alert-danger text-center shadow-sm mb-4' role='alert'>$error</div>";
            }
            ?>

            <form action="../log/reg.php" method="post" class="colorete p-4 shadow-lg rounded">
                <fieldset class="border-0">
                    <div class="mb-3">
                        <label for="nombre" class="arregloletra form-label">Nombre de usuario</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: ToriVegaOficial" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="arregloletra form-label">Correo electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="tu@mail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="arregloletra form-label">Fecha de nacimiento</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required>
                    </div>
                    <div class="row">
    <div class="col-12 col-md-6 mb-3">
        <label for="pass_uno" class="arregloletra form-label">Contraseña</label>
        <input type="password" name="pass_uno" id="pass_uno" class="form-control" placeholder="••••••••" required>
    </div>
    
    <div class="col-12 col-md-6 mb-3">
        <label for="pass_dos" class="arregloletra form-label">Confirmar</label>
        <input type="password" name="pass_dos" id="pass_dos" class="form-control" placeholder="••••••••" required>
    </div>
</div>
                    
                    <div class="mt-4">
                        <button type="submit" class="btn btn-warning w-100 fw-bold text-uppercase">Crear mi cuenta</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>