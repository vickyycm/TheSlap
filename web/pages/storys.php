<?php
include_once("../componentes/header.php");
include_once("../conf/conf.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<main>
    <h1 class="colorg">Momento Storytime! - by TheSlap 👋</h1>
    <h2>Como todos los días, te contamos los estados mas relevantes de la vida de unos adolecentes que solo se dedican al drama y llorar por videos de perritos...</h2>
    <div class="container-fluid">
        <div class= "row arreglo1 colorete2 arreglo3">
            <!-- historia 1 -->
            <div class= "col-4 colorete separacion">

                    <?php
                    $consulta1 = mysqli_query($conx, "SELECT * FROM historias WHERE id_historias = 1");
                    $h1 = mysqli_fetch_assoc($consulta1);
                    
                    if (isset($h1['nombre'])) {
                        $nombre = $h1['nombre'];
                    } else {
                        $nombre = '';
                    }

                    if (isset($h1['texto'])) {
                        $historia = $h1['texto'];
                    } else {
                        $historia = '';
                    }

                    if (isset($h1['comentario1'])) {
                        $com1 = $h1['comentario1'];
                    } else {
                        $com1 = '';
                    }

                    if (isset($h1['comentario2'])) {
                        $com2 = $h1['comentario2'];
                    } else {
                        $com2 = '';
                    }
                    if (isset($h1['posteo'])) {
                        $post = $h1['posteo'];
                    } else {
                        $post = '';
                    }

                    //imprimo datos
                    print "
                        <h2 class='separo nombres'>$nombre</h2>
                <div class= 'colorete1 fixed3'>
                <h3 class= 'colorg'>Contame todo!!🧏</h3>
                   <p>$historia</p>
                </div>
                <div class= 'colorete1 fixed3 separo1'>
                <h3 class= 'colorg'>Comentarios: </h3>
                    <p>$com1</p>
                    <p>$com2 😭😭😭</p>
                </div>"
                ?>
            </div>
            <div class="col-7 colorete">
                <h2 class="separo nombres center">Último post:</h2>
                <figure class="figure">
                    <img src="../img/<?php print "$post" ?>" class="figure-img img-fluid rounded" alt="post del personaje">
                </figure>
            </div>
        </div>

                <!-- repite  -->
        <!-- historia 2 -->
        <div class= "row arreglo1 colorete2 arreglo3">
                <?php
                    $consulta2 = mysqli_query($conx, "SELECT * FROM historias WHERE id_historias = 2");
                    $h2 = mysqli_fetch_assoc($consulta2);
                    
                    if (isset($h2['nombre'])) {
                        $nombre = $h2['nombre'];
                    } else {
                        $nombre = '';
                    }

                    if (isset($h2['texto'])) {
                        $historia = $h2['texto'];
                    } else {
                        $historia = '';
                    }

                    if (isset($h2['comentario1'])) {
                        $com1 = $h2['comentario1'];
                    } else {
                        $com1 = '';
                    }

                    if (isset($h2['comentario2'])) {
                        $com2 = $h2['comentario2'];
                    } else {
                        $com2 = '';
                    }
                    if (isset($h2['posteo'])) {
                        $post = $h2['posteo'];
                    } else {
                        $post = '';
                    }

                    print "
                    <div class='col-7 colorete separacion'>
                        <h2 class='separo nombres center'>Último post:</h2>
                        <figure class='figure'>
                            <img src='../img/$post' class='figure-img img-fluid rounded' alt='post del personaje'>
                        </figure>
                    </div>"
                ?>
                <div class= "col-4 colorete">
                    <h2 class="separo nombres"><?php print " $nombre" ?></h2>
                    <div class= "colorete1 fixed3">
                        <h3 class= "colorg">Contame todo!!🧏</h3>
                        <p><?php print "$historia" ?></p>
                    </div>
                <div class= "colorete1 fixed3 separo1">
                    <h3 class= "colorg">Comentarios: </h3>
                    <p><?php print "$com1" ?> 😱😱</p>
                    <p><?php print "$com2" ?> 💤</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once("../componentes/footer.php");
?>