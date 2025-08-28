<?php
include_once("../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>
    <h1 class="colorg">Inicia sesión!!</h1>
    
    <form action="../log/log.php" method="post">

<?php
      if(isset($_GET['reg'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            Podes ingresar correctamente.
          </div>        
        ";

      }
      if(isset($_GET['log'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            No esta registrado, vuelva a intentarlo.
          </div>        
        ";

      }

      if(isset($_GET['ban'])){

        print "
          <div class='colorete2 fixed6 colorfoot letra' role='alert' >
            Tu cuenta esta banneada, contactate con un supervisor.
          </div>        
        ";

      }
?>

    <fieldset>
        <div class="formulario">
            <div>
                <label for="correo" class= "arregloletra">Correo electrónico</label>
                <input type="email" name="correo" id="correo" required>
            </div>
            <div>
                <label for="pass_uno" class= "arregloletra">Contraseña</label>
                <input type="password" name="pass_uno" id="pass_uno" required>
            </div>
            <div>
            <a class= "arregloletra datos letra separo3" href="../pages/registro.php">Regístrate si no tenes cuenta</a> 
            </div>
            <div>
                <input type="submit" value="Ingresar">
            </div>
        </div> 

    </fieldset>
    </form>

</main>

<?php
include_once("../componentes/footer.php");
?>