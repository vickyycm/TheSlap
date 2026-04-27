<?php

session_start();
include_once("../conf/conf.php");

if(isset($_POST["correo"]) and isset($_POST["pass_uno"])){

    $correo = $_POST["correo"];
    $pass =  $_POST["pass_uno"];

    $consulta_log ="SELECT * FROM usuarios WHERE mail='$correo' AND contrasenia=MD5('$pass')";

    $respuesta = mysqli_query($conx,$consulta_log);

    $datos = mysqli_fetch_array($respuesta);

    if($datos == NULL){
        header("Location: ../pages/login.php?log=no");
          
    }else{

        if ($datos['fk_estado'] == 2) {
            header("Location: ../pages/login.php?ban=si");
            exit();
        }

        $_SESSION['usuario'] = $datos['nombre'];  
        $_SESSION['id_usuario'] = $datos['id_usuarios'];
        $_SESSION['rol'] = $datos['fk_role'];


        if($datos['fk_role'] == 1){
            header("Location: ../admin/index.php");

        }else{
            header("Location: ../pages/inicio.php");

        }
    }

}

?>