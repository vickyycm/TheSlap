<?php
include_once("../conf/conf.php");

if(isset($_POST['nombre']) and isset($_POST['correo']) and isset($_POST['fecha']) and isset($_POST['pass_uno']) and isset($_POST['pass_dos'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $fecha = new DateTime($_POST['fecha']);
    $fecha_dos = $_POST['fecha'];
    $hoy = new DateTime();
    $edad_minima = $hoy->modify("-16 years");
    $pass_uno = $_POST['pass_uno'];
    $pass_dos = $_POST['pass_dos']; 

    if($fecha <= $edad_minima){
        $consulta_nombre = "SELECT nombre FROM usuarios WHERE nombre='$nombre'";

        $respuesta = mysqli_query($conx,$consulta_nombre);
        //si el usuario es unico
        if(mysqli_fetch_array($respuesta)){
                
                header("Location: ../pages/registro.php?usuario=error ");
           
        }else{

             $consulta_correo = "SELECT mail  FROM usuarios WHERE mail='$correo'";

            $respuesta = mysqli_query($conx,$consulta_correo);

            if(mysqli_fetch_array($respuesta)){
                    
                    header("Location: ../pages/registro.php?mail=error");

            }else{

                if($pass_uno == $pass_dos){
                $consulta = "INSERT INTO usuarios(nombre, mail, contrasenia, avatar, fecha_nacimiento, fecha_creacion, fk_role, fk_estado) VALUES ('$nombre', '$correo', MD5('$pass_uno'),'', '$fecha_dos', NOW(), 2, 1)";

                mysqli_query($conx,$consulta);

                header("Location: ../pages/login.php?reg=ok");

            }else{

                header("Location: ../pages/registro.php?error=fallo");

            }
                
            }
 
        }

    }else{

        header("Location: ../pages/registro.php?edad=error");

    }
   
}

?>