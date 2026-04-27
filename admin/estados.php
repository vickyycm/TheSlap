<?php
include_once("../conf/conf.php");
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
    header("Location: ../index.php");
    
}

if (isset($_POST['id_usuario']) && isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    $id_usuario = $_POST['id_usuario'];


    if ($accion === 'ban') {
        // Si la acción es "ban", cambia el estado del usuario a 2 (baneado)
        $consulta_sql = "UPDATE usuarios SET fk_estado = 2 WHERE id_usuarios = $id_usuario";

    } elseif ($accion === 'desban') {
        // Si la acción es "desban", cambia el estado del usuario a 1 (no baneado)
        $consulta_sql = "UPDATE usuarios SET fk_estado = 1 WHERE id_usuarios = $id_usuario";

    }

    $resultado = mysqli_query($conx, $consulta_sql);

    if ($accion === 'ban') {
        header("Location: ../admin/index.php?mensaje=ban");
        
    } elseif ($accion === 'desban') {
        header("Location: ../admin/index.php?mensaje=desban");
        
    }

}

