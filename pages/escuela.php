<?php
include_once(__DIR__ . "/../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>
    <div class="container py-5">
        <h1 class="colorg text-center mb-4">¿Querés ser parte de la mejor escuela de Arte?</h1>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form action="datos.php" method="post" enctype="multipart/form-data" class="colorete p-4 shadow-lg rounded">
                    <fieldset class="border-0">
                        <legend class="cambio mb-4 h4 text-center">Envía tu información acá:</legend>
                        
                        <div class="mb-3">
                            <label for="nom" class="arregloletra form-label">Nombre</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Tu nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="ape" class="arregloletra form-label">Apellido</label>
                            <input type="text" name="ape" id="ape" class="form-control" placeholder="Tu apellido" required>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="cum" class="arregloletra form-label">Fecha de nacimiento</label>
                                <input type="date" name="cum" id="cum" class="form-control" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tel" class="arregloletra form-label">Teléfono</label>
                                <input type="tel" name="tel" id="tel" class="form-control" placeholder="11 1234-5678" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="mail" class="arregloletra form-label">Correo</label>
                            <input type="email" name="mail" id="mail" class="form-control" placeholder="ejemplo@mail.com" required>
                        </div>

                        <div class="mb-4">
                            <label for="perfil" class="arregloletra form-label">Cargar foto de talento</label>
                            <input type="file" name="perfil" id="perfil" class="form-control bg-light" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-warning fw-bold px-5 py-2 w-100">¡POSTULARME! 🎭</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>