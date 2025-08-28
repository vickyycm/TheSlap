<?php
include_once("../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>

    <h1 class="colorg">¿Quéres ser parte de la mejor escuela de Arte?</h1>
    
    <form action="datos.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Envía tu informacion acá:</legend>
        <div class="formulario">
            <div>
                <label for="nom" class= "arregloletra">Nombre</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="ape" class= "arregloletra">Apellido</label>
                <input type="text" name="ape" id="ape" required>
            </div>
            <div>
                <label for="cum" class= "arregloletra">Fecha de nacimiento</label>
                <input type="date" name="cum" id="cum" required>
            </div>
            <div>
                <label for="tel" class= "arregloletra">Teléfono</label>
                <input type="tel" name="tel" id="tel" required>
            </div>
            <div>
                <label for="mail" class= "arregloletra">Correo</label>
                <input type="email" name="mail" id="mail" required>
            </div>
            <div>
                <label for="perfil" class= "arregloletra">Cargar foto</label>
                <input type="file" name="perfil" id="perfil" class= "arregloletra" required>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </div> 
    </fieldset>
    </form>

</main>

<?php
include_once("../componentes/footer.php");
?>