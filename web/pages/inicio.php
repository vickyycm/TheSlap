<?php
include_once("../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

    <main>
        <section>
            <div class="container-fluid">
                <h1 class="colorg center">Nuevas actualizaciones 👋</h1>
                <div class="row">
                    <div class= "col-3 colorete fixed center fixed1">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/catyjade.jpg" class="card-img-top" alt="dos chicas posando">
                            <div class="card-body colorcard">
                            <h5 class="card-title colorg1">Pose, pose, pose</h5>
                            <p class="card-text arreglo">Cuando el glamour se encuentra con la actitud, el resultado es explosivo. Sam y Jade dominan la escena con sus looks imponentes y esa energía que no se negocia.</p>
                        </div>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item colorcard colorg">Comentarios:</li>
                            <li class="list-group-item colorcard">@carly: Super iconic 💅</li>
                            <li class="list-group-item colorcard">@drake: Full glam ✨</li>
                        </ul>
                        </div>
                    </div>

                    <div class= "col-7 colorete center1 fixed1">
                        <div class="card text-bg-dark">
                            <img src="../img/victorius.jpg" class="card-img" alt="chicos en la escuela">
                        <div class="card-img-overlay">
                            <h5 class="card-title colorete"> 📍HoollywoodArts</h5>
                        </div>
                        </div>
                    </div>
                </div>
                <div class= "row colorete center">
                    <h2 class= "cambio center">Perfiles más vistos!</h2>
                    <div class= "col-3 center colorete1 fixed2">
                        <figure>
                        <img src="../img/cat.jpg" alt="foto de perfil de una chica">
                        </figure>
                        <p>Cat Valentine 😘</p>
                    </div>
                    <div class= "col-3 center colorete2 fixed2">
                        <figure>
                        <img src="../img/andre.jpg" alt="foto de perfil de un chico">
                        </figure>
                        <p>Andre harris 🤘</p>
                    </div>
                    <div class= "col-3 center colorete1 fixed2">
                        <figure>
                        <img src="../img/tori.jpg" alt="foto de perfil de una chica">
                        </figure>
                        <p>Tori Vega 🎤</p>
                    </div>
                    <div class= "col-3 center colorete2 fixed2">
                        <figure>
                        <img src="../img/beck.jpg" alt="foto de perfil de un chico">
                        </figure>
                        <p>Beck Oliver ✌️</p>
                    </div>
                    <div class= "col-3 center colorete1 fixed2">
                        <figure>
                        <img src="../img/jade.jpg" alt="foto de perfil de una chica">
                        </figure>
                        <p>Jade West 🕷️</p>
                    </div>
                    <div class= "col-3 center colorete2 fixed2">
                        <figure>
                        <img src="../img/robbie.jpg" alt="foto de perfil de un chico">
                        </figure>
                        <p>Robbie Shapiro 🕶️</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
<section>
</section>
    </main>

<?php
include_once("../componentes/footer.php");
?>
