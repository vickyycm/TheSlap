<?php
include_once("../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>

    <h1>Formulario enviado con éxito.</h1>
    <h2>Información enviada:</h2>
    <div class="formulario">
    <?php
        $nom;
        $ape;
        $mail;
        $cum;
        $tel;
        $perfil;

        if(isset($_POST["nom"])){
            $nom = $_POST["nom"];
            print "<p class=cambio>Nombre: $nom</p>";
        }

        if(isset($_POST["ape"])){
            $ape = $_POST["ape"];
            print "<p class=cambio>Apellido: $ape</p>";
        }

        if(isset($_POST["cum"])){
            $cum = $_POST["cum"];
            print "<p class=cambio>Fecha de nacimiento: $cum</p>";
        }

        if(isset($_POST["tel"])){
            $tel = $_POST["tel"];
            print "<p class=cambio>Teléfono: $tel</p>";
        }

        if(isset($_POST["mail"])){
            $mail = $_POST["mail"];
            print "<p class=cambio>Correo: $mail</p>";
        }

        if(isset($_FILES["perfil"])){
            $perfil = time(). "jpg";
            move_uploaded_file($_FILES["perfil"]["tmp_name"],"../archivos/$perfil");

            print "<img src=../archivos/$perfil alt='Curriculum vitae de $nom'>";
        }

        print "<p class=datos>En un lapso de 72 horas una persona se contactará con vos. Muchas gracias $nom !";
    ?>
    </div>
    
</main>

<?php
include_once("../componentes/footer.php");
?>