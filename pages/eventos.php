<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once(__DIR__ . "/../componentes/header.php");
include_once(__DIR__ . "/../conf/conf.php");
?>

<main>
    <div class="container-fluid p-4">
        <h1 class="colorg text-center mb-5">Eventos próximos en HollywoodArts!</h1>

        <?php
        // Hacemos un bucle para procesar los 3 eventos y no repetir código
        $ids_eventos = [1, 2, 3];
        foreach ($ids_eventos as $id):
            $consulta_ev = mysqli_query($conx, "SELECT * FROM eventos WHERE id_eventos = $id");
            $e = mysqli_fetch_assoc($consulta_ev);
            
            $titulo = $e['titulo_evento'] ?? '';
            $participantes = $e['participantes'] ?? '';
            $info = $e['info_evento'] ?? '';
            $fecha_ev = $e['fecha'] ?? '';
            $foto_ev = $e['foto_evento'] ?? '';
        ?>

        <div class="row g-4 mb-5 p-3 colorete2 rounded shadow-lg align-items-stretch">
            
            <div class="col-12 col-lg-5">
                <div class="colorete p-4 h-100 rounded shadow-sm">
                    <h2 class="nombres mb-3"><?php echo $titulo; ?></h2>
                    
                    <figure class="text-center mb-4">
                        <img src="../img/<?php echo $foto_ev; ?>" class="img-fluid rounded border border-white shadow-sm" alt="foto del evento" style="max-height: 250px;">
                    </figure>

                    <div class="colorete1 p-3 rounded">
                        <p class="text-dark mb-2"><strong>👥 Participantes:</strong> <?php echo $participantes; ?></p>
                        <p class="text-dark mb-2"><strong>📅 Día:</strong> <?php echo $fecha_ev; ?></p>
                        <p class="text-dark m-0"><strong>ℹ️ Info:</strong> <?php echo $info; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="colorete p-4 h-100 rounded shadow-sm d-flex flex-column">
                    <h2 class="nombres text-center mb-4">Valoraciones y experiencia:</h2>

                    <div class="flex-grow-1 overflow-auto mb-4" style="max-height: 400px; padding-right: 10px;">
                        <?php
                        $consulta_res = mysqli_query($conx, "SELECT resenias.*, usuarios.nombre FROM resenias LEFT JOIN usuarios ON resenias.fk_usuarios = usuarios.id_usuarios WHERE fk_eventos = $id ORDER BY fecha DESC;");
                        
                        while ($resenia = mysqli_fetch_assoc($consulta_res)) {
                            $u_nombre = !empty($resenia['nombre']) ? $resenia['nombre'] : 'Anónimo';
                            $res_foto = $resenia['img'];
                        ?>
                            <div class="colorete1 p-3 rounded mb-3 shadow-sm border-start border-4 border-info">
                                <p class="text-muted small mb-1">📅 <?php echo $resenia['fecha']; ?></p>
                                <p class="text-dark m-0"><strong><?php echo $u_nombre; ?>:</strong> <?php echo $resenia['resenia_texto']; ?></p>
                                <?php if (isset($res_foto) && $res_foto !== '' && file_exists("../archivos/$res_foto")): ?>
                                    <img src="../archivos/<?php echo $res_foto; ?>" class="img-fluid rounded mt-2 shadow-sm" style="max-width: 150px;" alt="foto reseña">
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="p-3 bg-white bg-opacity-10 rounded">
                        <form action="resenias.php" method="post" enctype="multipart/form-data">
                            <label class="form-label cambio">¿Qué te pareció el evento? 🤔</label>
                            <textarea class="form-control mb-3" name="resenia_texto" rows="2" placeholder="Tu comentario..." required></textarea>
                            
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <input type="file" name="archivo" class="form-control form-control-sm w-auto flex-grow-1">
                                <input type="hidden" name="evento_id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-warning fw-bold">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>