<?php
include_once(__DIR__ . "/../componentes/header.php");
include_once(__DIR__ . "/../conf/conf.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>
    <div class="container-fluid p-4">
        <h1 class="colorg text-center mb-3">Momento Storytime! - by TheSlap 👋</h1>
        <h2 class="text-center mb-5" style="font-size: 1.2rem; color: #1e293b;">Como todos los días, te contamos los estados más relevantes de la vida de unos adolescentes que solo se dedican al drama...</h2>

        <?php
        // Hacemos un bucle para no repetir código. Traemos las 2 historias.
        $ids = [1, 2];
        foreach ($ids as $id):
            $consulta = mysqli_query($conx, "SELECT * FROM historias WHERE id_historias = $id");
            $h = mysqli_fetch_assoc($consulta);
            
            $nombre = $h['nombre'] ?? '';
            $historia = $h['texto'] ?? '';
            $com1 = $h['comentario1'] ?? '';
            $com2 = $h['comentario2'] ?? '';
            $post = $h['posteo'] ?? '';

            // Alternamos el orden para que sea dinámico: la historia 1 (texto izquierda), historia 2 (texto derecha)
            $orden_texto = ($id % 2 != 0) ? 'order-1' : 'order-lg-2';
            $orden_img = ($id % 2 != 0) ? 'order-2' : 'order-lg-1';
        ?>

        <div class="row g-4 mb-5 p-3 colorete2 rounded shadow-lg align-items-stretch">
            
            <div class="col-12 col-lg-5 <?php echo $orden_texto; ?>">
                <div class="colorete p-4 h-100 rounded shadow-sm">
                    <h2 class="nombres mb-4"><?php echo $nombre; ?></h2>
                    
                    <div class="colorete1 p-3 rounded mb-4">
                        <h3 class="colorg1 h5">Contame todo!! 🧏</h3>
                        <p class="text-dark m-0"><?php echo $historia; ?></p>
                    </div>

                    <div class="colorete1 p-3 rounded mt-auto">
                        <h3 class="colorg1 h5">Comentarios:</h3>
                        <p class="text-dark mb-1">💬 <?php echo $com1; ?></p>
                        <p class="text-dark m-0">💬 <?php echo $com2; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7 <?php echo $orden_img; ?>">
                <div class="colorete p-3 h-100 rounded shadow-sm d-flex flex-column">
                    <h2 class="nombres text-center mb-3">Último post:</h2>
                    <figure class="m-0 flex-grow-1 d-flex">
                        <img src="../img/<?php echo $post; ?>" class="img-fluid rounded shadow w-100" alt="post" style="object-fit: cover; max-height: 500px;">
                    </figure>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>