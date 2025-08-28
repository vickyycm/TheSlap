<?php
include_once("../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>
    <h1 class="colorg">Registrate</h1>
    
    <form action="../log/reg.php" method="post">

<?php
      if(isset($_GET['error'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            Las contraseñas no son idénticas.
          </div>        
        ";

      }
      if(isset($_GET['edad'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            No superas la edad permitida.
          </div>        
        ";

      }
      if(isset($_GET['usuario'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            Usuario ya existente.
          </div>        
        ";

      }
      if(isset($_GET['mail'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            Correo ya existente.
          </div>        
        ";

      }
    ?>

    <fieldset>
        <div class="formulario">
            <div>
                <label for="nombre" class= "arregloletra">Nombre de usuario</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="correo" class= "arregloletra">Correo electrónico</label>
                <input type="email" name="correo" id="correo" required>
            </div>
            <div>
                <label for="fecha" class= "arregloletra">Fecha de nacimiento</label>
                <input type="date" name="fecha" id="fecha" required>
            </div>
            <div>
                <label for="pass_uno" class= "arregloletra">Contraseña</label>
                <input type="password" name="pass_uno" id="pass_uno" required>
            </div>
            <div>
                <label for="pass_dos" class= "arregloletra">Confirma tu contraseña</label>
                <input type="password" name="pass_dos" id="pass_dos" required>
            </div>
            <div>
                <input type="submit" value="Registrate">
            </div>
        </div> 

    </fieldset>
    </form>

</main>

<?php
include_once("../componentes/footer.php");
?>