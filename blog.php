<?php require 'variables/variables.php';
require 'controllers/noticiasController.php';
$page = 'Blog';
$nombre_inmobiliaria = 'Gómez Y Asociados' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = true;
    </script>
    <!-- ***********************Menu********************** -->

    <header class="position-fixed sticky-top">
        <?php include 'layout/header2.php' ?>
    </header>

    <section id="banner" class="position-relative">
        <div class="align-items-center d-flex justify-content-center" style="color: white;">
            <div class="d-flex justify-content-center align-items-center flex-column position-absolute">
                <h1 class="font-weight-bold"> BLOG </h1>
                <h5 class="justify-content-center row"> Inicio / Blog </h5>
            </div>
            <div>
                <img src="images/banner_blog.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="ultimas_noticias" class="mb-5">
        <div class="container espacio_margen">
            <div class="col-12 mb-5">
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <?php if (isset($noticias_array)) {
                        modelo_noticias($noticias_array);
                    } else {
                        echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--     <section id="blog">
        <div class="container">

            <h2 class="font-weight-bold text-center my-5"> Últimas Noticias </h2>
            <div class="col-12">
                <div class="row justify-content-center">

                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card" style="width: 100%;">
                            <img style="object-fit: cover;width: 100%;height: 255px;" src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="color_titulo">Últimas Ofertas</h4>
                                <p class="card-text">2019-11-30</p>
                                <p class="card-text">Carta de presentación</p>
                                <hr>
                                <a href="#" class="btn boton_ver_mas rounded">Ver Más</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card" style="width: 100%;">
                            <img style="object-fit: cover;width: 100%;height: 255px;" src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="color_titulo">Últimas Ofertas</h4>
                                <p class="card-text">2019-11-30</p>
                                <p class="card-text">Carta de presentación</p>
                                <hr>
                                <a href="#" class="btn boton_ver_mas rounded">Ver Más</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card" style="width: 100%;">
                            <img style="object-fit: cover;width: 100%;height: 255px;" src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="color_titulo">Últimas Ofertas</h4>
                                <p class="card-text">2019-11-30</p>
                                <p class="card-text">Carta de presentación</p>
                                <hr>
                                <a href="#" class="btn boton_ver_mas rounded">Ver Más</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card" style="width: 100%;">
                            <img style="object-fit: cover;width: 100%;height: 255px;" src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="color_titulo">Últimas Ofertas</h4>
                                <p class="card-text">2019-11-30</p>
                                <p class="card-text">Carta de presentación</p>
                                <hr>
                                <a href="#" class="btn boton_ver_mas rounded">Ver Más</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card" style="width: 100%;">
                            <img style="object-fit: cover;width: 100%;height: 255px;" src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="color_titulo">Últimas Ofertas</h4>
                                <p class="card-text">2019-11-30</p>
                                <p class="card-text">Carta de presentación</p>
                                <hr>
                                <a href="#" class="btn boton_ver_mas rounded">Ver Más</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card" style="width: 100%;">
                            <img style="object-fit: cover;width: 100%;height: 255px;" src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="color_titulo">Últimas Ofertas</h4>
                                <p class="card-text">2019-11-30</p>
                                <p class="card-text">Carta de presentación</p>
                                <hr>
                                <a href="#" class="btn boton_ver_mas rounded">Ver Más</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> -->

    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>


    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>