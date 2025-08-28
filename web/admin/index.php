<?php
include_once("../componentes/header.php");
include_once("../conf/conf.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if($_SESSION == NULL or $_SESSION['rol'] != 1 ){
    header("Location: ../index.php");
}
?>

<main>
                <?php
                    if (isset($_GET['mensaje'])) {
                        $mensaje = $_GET['mensaje'];

                    if ($mensaje === 'ban') {
                        print "
                        <div class='colorete2 fixed6 colorfoot letra' role='alert'>
                            El usuario fue baneado correctamente.
                        </div>";
                    }

                    if ($mensaje === 'desban') {
                        echo "
                        <div class='colorete2 fixed6 colorfoot letra' role='alert'>
                            El usuario fue desbaneado correctamente.
                        </div>";
                    }
                    }
                ?>
<section>
            <div class="container-fluid colorete">
                <h1 class="datos center">Reportes de usuarios</h1>



                <div class="row separo">
                    <div class= "adminA">
                        <?php
                        $consulta = mysqli_query($conx, "SELECT id_usuarios, nombre, mail, fecha_creacion, fk_estado FROM usuarios WHERE fk_role != 1");

                        while ($usuario = mysqli_fetch_assoc($consulta)) {
                            $id_usuario = $usuario['id_usuarios'];
                            $nombre = $usuario['nombre'];
                            $mail = $usuario['mail'];
                            $fecha = $usuario['fecha_creacion'];
                            $estado = $usuario['fk_estado'];
                            if ($estado == 1) {
                                $estado = "no banned";
                            }else {
                                $estado = "banned";
                            }

                             print "
                                <div class='adminB'>
                                <h2 class='letra colorg'>User:</h2>
                                <p>Nombre de usuario: $nombre</p>
                                <p>Estado: $estado</p>
                                <p>Nombre de usuario: $mail</p>
                                <p>Fecha de creación: $fecha</p>

                                <div>
                                <form action='estados.php' method='post' class='ver'>
                                    <input type='hidden' name='accion' value='ban'>
                                    <input type='hidden' name='id_usuario' value='$id_usuario'>
                                    <button type='submit' class='letra colorfoot fixed5'" . ($estado == 2 ? " disabled" : "") . ">BAN</button>
                                </form>    
                                <form action='estados.php' method='post' class='ver'>
                                    <input type='hidden' name='accion' value='desban'>
                                    <input type='hidden' name='id_usuario' value='$id_usuario'>
                                    <button type='submit' class='letra colorfoot fixed5'" . ($estado == 1 ? " disabled" : "") . ">QUIT-BAN</button>
                                </form>
                                </div>

                                </div>";

                        }
                        ?>
                    </div>
                </div>
</section>
</main>
<?php
include_once("../componentes/footer.php");
?>
