
<?php
include_once(__DIR__ . "/../componentes/header.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main>
    <section>
        <div class="container-fluid">
            <h1 class="colorg center mt-4 mb-4">Nuevas actualizaciones 👋</h1>
            
            <div class="row g-4 justify-content-center align-items-stretch">
                
                <div class="col-12 col-lg-4">
                    <div class="colorete fixed1 h-100 p-3 shadow">
                        <div class="card mx-auto" style="max-width: 18rem;">
                            <img src="../img/catyjade.jpg" class="card-img-top img-fluid" alt="dos chicas posando">
                            <div class="card-body colorcard">
                                <h5 class="card-title colorg1">Pose, pose, pose</h5>
                                <p class="card-text arreglo">Cuando el glamour se encuentra con la actitud, el resultado es explosivo. Sam y Jade dominan la escena con sus looks imponentes y esa energía que no se negocia.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item colorcard colorg">Comentarios:</li>
                                <li class="list-group-item colorcard">@carly: Super iconic 💅</li>
                                <li class="list-group-item colorcard">@drake: Full glam ✨</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="colorete fixed1 h-100 p-3 shadow">
                        <div class="card text-bg-dark border-0 h-100" style="min-height: 400px;">
                            <img src="../img/victorius.jpg" class="card-img img-fluid" alt="chicos en la escuela" style="object-fit: cover; height: 100%; border-radius: 8px;">
                            <div class="card-img-overlay">
                                <h5 class="card-title colorete bg-dark p-2 rounded d-inline-block"> 📍HollywoodArts</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
    <div class="col-12">
        <div class="colorete p-4 shadow-lg" style="border-radius: 20px;">
            <h2 class="cambio center w-100 mb-4">¡Perfiles más vistos!</h2>
            
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-lg-4 center">
                    <div class="colorete1 fixed2 w-100 p-3 shadow-sm">
                        <figure><img src="../img/cat.jpg" class="img-fluid rounded" alt="Cat" style="max-width: 150px;"></figure>
                        <p class="nombres">Cat Valentine 😘</p>
                    </div>
                </div>
                
                <div class="col-12 col-lg-4 center">
                    <div class="colorete2 fixed2 w-100 p-3 shadow-sm">
                        <figure><img src="../img/andre.jpg" class="img-fluid rounded" alt="Andre" style="max-width: 150px;"></figure>
                        <p class="nombres">Andre harris 🤘</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4 center">
                    <div class="colorete1 fixed2 w-100 p-3 shadow-sm">
                        <figure><img src="../img/tori.jpg" class="img-fluid rounded" alt="Tori" style="max-width: 150px;"></figure>
                        <p class="nombres">Tori Vega 🎤</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4 center">
                    <div class="colorete2 fixed2 w-100 p-3 shadow-sm">
                        <figure><img src="../img/beck.jpg" class="img-fluid rounded" alt="Beck" style="max-width: 150px;"></figure>
                        <p class="nombres">Beck Oliver ✌️</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4 center">
                    <div class="colorete1 fixed2 w-100 p-3 shadow-sm">
                        <figure><img src="../img/jade.jpg" class="img-fluid rounded" alt="Jade" style="max-width: 150px;"></figure>
                        <p class="nombres">Jade West 🕷️</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4 center">
                    <div class="colorete2 fixed2 w-100 p-3 shadow-sm">
                        <figure><img src="../img/robbie.jpg" class="img-fluid rounded" alt="Robbie" style="max-width: 150px;"></figure>
                        <p class="nombres">Robbie Shapiro 🕶️</p>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
</div>
    </section>
</main>

<?php
include_once(__DIR__ . "/../componentes/footer.php");
?>
