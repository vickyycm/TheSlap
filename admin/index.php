<?php
include_once(__DIR__ . "/../componentes/header.php");
include_once(__DIR__ . "/../conf/conf.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Seguridad: Si no es admin, para afuera
if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1 ){
    header("Location: ../index.php");
    exit();
}
?>

<main class="container py-5">
    <?php
    if (isset($_GET['mensaje'])) {
        $mensaje = $_GET['mensaje'];
        $texto = ($mensaje === 'ban') ? "El usuario fue baneado correctamente." : "El usuario fue desbaneado correctamente.";
        echo "<div class='alert alert-warning text-center shadow-sm mb-4' role='alert'>$texto</div>";
    }
    ?>

    <section class="colorete p-4 shadow-lg rounded">
        <h1 class="colorg text-center mb-5">Reportes de usuarios</h1>

        <div class="row g-4 justify-content-center">
            <?php
            $consulta = mysqli_query($conx, "SELECT id_usuarios, nombre, mail, fecha_creacion, fk_estado FROM usuarios WHERE fk_role != 1");

            while ($usuario = mysqli_fetch_assoc($consulta)) {
                $id_usuario = $usuario['id_usuarios'];
                $nombre = $usuario['nombre'];
                $mail = $usuario['mail'];
                $fecha = $usuario['fecha_creacion'];
                $estado_id = $usuario['fk_estado'];
                
                // Definimos el estado visualmente
                $es_baneado = ($estado_id == 2);
                $status_text = $es_baneado ? "BANEADO 🚫" : "ACTIVO ✅";
                $card_class = $es_baneado ? "opacity-75" : "";
            ?>
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="colorete1 p-4 h-100 rounded shadow-sm border-top border-4 <?php echo $es_baneado ? 'border-danger' : 'border-success'; ?> <?php echo $card_class; ?>">
                        <h2 class="colorg1 h5 mb-3">User: @<?php echo $nombre; ?></h2>
                        <div class="text-dark small">
                            <p class="mb-1"><strong>Email:</strong> <?php echo $mail; ?></p>
                            <p class="mb-1"><strong>Creado:</strong> <?php echo $fecha; ?></p>
                            <p class="mb-3"><strong>Estado:</strong> <span class="badge <?php echo $es_baneado ? 'bg-danger' : 'bg-success'; ?>"><?php echo $status_text; ?></span></p>
                        </div>

                        <div class="d-flex gap-2 mt-auto pt-3 border-top">
                            <form action="estados.php" method="post" class="flex-grow-1">
                                <input type="hidden" name="accion" value="ban">
                                <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                                <button type="submit" class="btn btn-danger btn-sm w-100 fw-bold" <?php echo $es_baneado ? 'disabled' : ''; ?>>
                                    BAN
                                </button>
                            </form>

                            <form action="estados.php" method="post" class="flex-grow-1">
                                <input type="hidden" name="accion" value="desban">
                                <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                                <button type="submit" class="btn btn-success btn-sm w-100 fw-bold" <?php echo !$es_baneado ? 'disabled' : ''; ?>>
                                    UNBAN
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </section>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>