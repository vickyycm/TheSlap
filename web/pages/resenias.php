<?php

session_start();
include_once("../conf/conf.php");

if (isset($_POST["resenia_texto"]) && isset($_POST["evento_id"])) {

    $texto = $_POST["resenia_texto"];
    $evento_id = $_POST["evento_id"];
    $fecha = date("Y-m-d");

    if (isset($_FILES['archivo'])) {
        $nombre = time() .".jpg";
        move_uploaded_file($_FILES['archivo']['tmp_name'], "../archivos/$nombre");
    } else {
        $nombre = NULL;
    }

    //esto esta hecho para mas adelante cuando tenga usuarios
    //para que guarde el usuario que escribe, sino envia el dato null
    if (isset($_SESSION["id_usuario"])) {
        $id_usuario = $_SESSION["id_usuario"];
        $consulta = "INSERT INTO `resenias`(`resenia_texto`, `img`, `fecha`, `fk_eventos`, `fk_usuarios`) VALUES ('$texto','$nombre','$fecha','$evento_id','$id_usuario')";

    } else {
    $consulta = "INSERT INTO `resenias`(`resenia_texto`, `img`, `fecha`, `fk_eventos`, `fk_usuarios`) VALUES ('$texto','$nombre','$fecha','$evento_id', NULL)";

    }
    
    mysqli_query($conx, $consulta);

    header("Location: ../pages/eventos.php");
}


?>