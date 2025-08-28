<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once("../componentes/header.php");
include_once("../conf/conf.php");
?>
<main>
<div>
    <h1 class="colorg">Eventos próximos en HollywoodArts!</h1>
    <div class="container-fluid">
        <!-- evento 1 -->
        <div class= "row arreglo1 colorete2 arreglo3">
            <div class= "col-4 colorete separacion">
                <?php
                    $consulta1 = mysqli_query($conx, "SELECT * FROM eventos WHERE id_eventos = 1");
                    $e1 = mysqli_fetch_assoc($consulta1);
                    
                    if (isset($e1['titulo_evento'])) {
                        $titulo = $e1['titulo_evento'];
                    } else {
                        $titulo = '';
                    }

                    if (isset($e1['participantes'])) {
                        $participantes = $e1['participantes'];
                    } else {
                        $participantes = '';
                    }

                    if (isset($e1['info_evento'])) {
                        $info = $e1['info_evento'];
                    } else {
                        $info = '';
                    }

                    if (isset($e1['fecha'])) {
                        $fecha = $e1['fecha'];
                    } else {
                        $fecha = '';
                    }

                    if (isset($e1['foto_evento'])) {
                        $foto = $e1['foto_evento'];
                    } else {
                        $foto = '';
                    }

                    //imprimo datos rescatados
                    print "
                        <h2 class='separo nombres'>$titulo</h2>
                        <figure class= 'center'>
                            <img src='../img/$foto' class='img-thumbnail' alt='foto del evento'>
                        </figure>
                        <div class= 'colorete1 fixed3   '>
                            <p>Participantes: $participantes</p>
                            <p>Día: $fecha</p>
                            <p>Info del evento: $info</p>
                        </div>";
                ?>
            </div>    

            <div class="col-7 colorete">
                <h2 class="separo nombres center">Deja tu valoración y experiencia:</h2>

                <?php
                $consulta = mysqli_query($conx, "SELECT resenias.*, usuarios.nombre FROM resenias LEFT JOIN usuarios ON resenias.fk_usuarios = usuarios.id_usuarios WHERE fk_eventos = 1 ORDER BY fecha DESC;");
                
                while ($resenia = mysqli_fetch_assoc($consulta)) {
                    $texto = $resenia['resenia_texto'];
                    $fecha = $resenia['fecha'];
                    $foto = $resenia['img'];
                    if (!empty($resenia['nombre'])) {
                        $usuario = $resenia['nombre'];
                    } else {
                        $usuario = 'anon';
                    }

                        //imprime
                        print "
                        <div class='colorete1 fixed4'>
                            <p>Fecha: $fecha</p>
                            <p>$usuario: $texto</p>";
                        if (isset($foto) && $foto !== '' && file_exists("../archivos/$foto")) {
                            print "<img src='../archivos/$foto' alt='imagen de reseñas'>";
                        }
                        print "</div>";
                }
                ?>

                <div class="mb-3 colorete2 fixed3 abajo">
                    <form action="resenias.php" method="post" enctype="multipart/form-data">
                    <label class="form-label nombres fixed3">Este evento estuvo🤔..</label>
                    <textarea class="form-control" name="resenia_texto" rows="3" placeholder="Escriba aquí..." required></textarea>
                    <div class="mb-3 separo">
                    <input type="file" name="archivo" id="archivo" class= "arregloletra">
                    </div> 
                    <input type="hidden" name="evento_id" value="1">
                    <input class= "separo2 intento" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>

        <!-- evento 2 -->
        <div class= "row arreglo1 colorete2 arreglo3">
            <div class= "col-4 colorete separacion">
                <!-- se repite por cada uno de los eventos -->
                <?php
                    $consulta2 = mysqli_query($conx, "SELECT * FROM eventos WHERE id_eventos = 2");
                    $e2 = mysqli_fetch_assoc($consulta2);
                    
                    if (isset($e2['titulo_evento'])) {
                        $titulo = $e2['titulo_evento'];
                    } else {
                        $titulo = '';
                    }

                    if (isset($e2['participantes'])) {
                        $participantes = $e2['participantes'];
                    } else {
                        $participantes = '';
                    }

                    if (isset($e2['info_evento'])) {
                        $info = $e2['info_evento'];
                    } else {
                        $info = '';
                    }

                    if (isset($e2['fecha'])) {
                        $fecha = $e2['fecha'];
                    } else {
                        $fecha = '';
                    }

                    if (isset($e2['foto_evento'])) {
                        $foto = $e2['foto_evento'];
                    } else {
                        $foto = '';
                    }

                    print "
                        <h2 class='separo nombres'>$titulo</h2>
                        <figure class= 'center'>
                            <img src='../img/$foto' class='img-thumbnail' alt='foto del evento'>
                        </figure>
                        <div class= 'colorete1 fixed3'>
                            <p>Participantes: $participantes</p>
                            <p>Día: $fecha</p>
                            <p>Info del evento: $info</p>
                        </div>";
                ?>
            </div>
            
            <div class="col-7 colorete">
                <h2 class="separo nombres center">Deja tu valoración y experiencia:</h2>

                <?php
                $consulta = mysqli_query($conx, "SELECT resenias.*, usuarios.nombre FROM resenias LEFT JOIN usuarios ON resenias.fk_usuarios = usuarios.id_usuarios WHERE fk_eventos = 2 ORDER BY fecha DESC;");
                
                while ($resenia = mysqli_fetch_assoc($consulta)) {
                    $texto = $resenia['resenia_texto'];
                    $fecha = $resenia['fecha'];
                    $foto = $resenia['img'];
                    if (!empty($resenia['nombre'])) {
                        $usuario = $resenia['nombre'];
                    } else {
                        $usuario = 'anon';
                    }

                        //imprime
                        print "
                        <div class='colorete1 fixed4'>
                            <p>Fecha: $fecha</p>
                            <p>$usuario: $texto</p>";
                        if (isset($foto) && $foto !== '' && file_exists("../archivos/$foto")) {
                            print "<img src='../archivos/$foto' alt='imagen de reseñas'>";
                        }
                        print "</div>";
                }
                ?>

                <div class="mb-3 colorete2 fixed3 abajo">
                    <form action="resenias.php" method="post" enctype="multipart/form-data">
                    <label class="form-label nombres fixed3">Este evento estuvo🤔..</label>
                    <textarea class="form-control" name="resenia_texto" rows="3" placeholder="Escriba aquí..." required></textarea>
                    <div class="mb-3 separo">
                    <input type="file" name="archivo" id="archivo" class= "arregloletra">
                    </div> 
                    <input type="hidden" name="evento_id" value="2">
                    <input class= "separo2 intento" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>

        <!-- evento 3 -->
        <div class= "row arreglo1 colorete2 arreglo3">
            <div class= "col-4 colorete separacion">
                <?php
                    $consulta3 = mysqli_query($conx, "SELECT * FROM eventos WHERE id_eventos = 3");
                    $e3 = mysqli_fetch_assoc($consulta3);
                    
                    if (isset($e3['titulo_evento'])) {
                        $titulo = $e3['titulo_evento'];
                    } else {
                        $titulo = '';
                    }

                    if (isset($e3['participantes'])) {
                        $participantes = $e3['participantes'];
                    } else {
                        $participantes = '';
                    }

                    if (isset($e3['info_evento'])) {
                        $info = $e3['info_evento'];
                    } else {
                        $info = '';
                    }

                    if (isset($e3['fecha'])) {
                        $fecha = $e3['fecha'];
                    } else {
                        $fecha = '';
                    }

                    if (isset($e3['foto_evento'])) {
                        $foto = $e3['foto_evento'];
                    } else {
                        $foto = '';
                    }

                    print "
                        <h2 class='separo nombres'>$titulo</h2>
                        <figure class= 'center'>
                            <img src='../img/$foto' class='img-thumbnail' alt='foto del evento'>
                        </figure>
                        <div class= 'colorete1 fixed3'>
                            <p>Participantes: $participantes</p>
                            <p>Día: $fecha</p>
                            <p>Info del evento: $info</p>
                        </div>"
                ?>
            </div>
            
            <div class="col-7 colorete">
                <h2 class="separo nombres center">Deja tu valoración y experiencia:</h2>

                <?php
                $consulta = mysqli_query($conx, "SELECT resenias.*, usuarios.nombre FROM resenias LEFT JOIN usuarios ON resenias.fk_usuarios = usuarios.id_usuarios WHERE fk_eventos = 3 ORDER BY fecha DESC;");
            
                while ($resenia = mysqli_fetch_assoc($consulta)) {
                    $texto = $resenia['resenia_texto'];
                    $fecha = $resenia['fecha'];
                    $foto = $resenia['img'];
                    if (!empty($resenia['nombre'])) {
                        $usuario = $resenia['nombre'];
                    } else {
                        $usuario = 'anon';
                    }

                        //imprime
                        print "
                        <div class='colorete1 fixed4'>
                            <p>Fecha: $fecha</p>
                            <p>$usuario: $texto</p>";
                        if (isset($foto) && $foto !== '' && file_exists("../archivos/$foto")) {
                            print "<img src='../archivos/$foto' alt='imagen de reseñas'>";
                        }
                        print "</div>";
                }
                ?>

                <div class="mb-3 colorete2 fixed3 abajo">
                    <form action="resenias.php" method="post" enctype="multipart/form-data">
                    <label class="form-label nombres fixed3">Este evento estuvo🤔..</label>
                    <textarea class="form-control" name="resenia_texto" rows="3" placeholder="Escriba aquí..." required></textarea>
                    <div class="mb-3 separo">
                    <input type="file" name="archivo" id="archivo" class= "arregloletra">
                    </div> 
                    <input type="hidden" name="evento_id" value="3">
                    <input class= "separo2 intento" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
</div>
</main>

<?php
include_once("../componentes/footer.php");
?>