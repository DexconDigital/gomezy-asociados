<?php 

require 'variables/variables.php';
require 'controllers/indexController.php';
$page = 'Inicio';
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

        <?php include 'layout/header.php' ?>

    </header>

    <section id="carrusel_imagenes_principales">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <section id="buscador" class="my-5">

        <?php include 'layout/buscador.php' ?>

    </section>

    <section id="contenido_pagina_principal" class="border-top mt-5">

        <section id="propiedades_destacadas">



            <div class="container p-0">

                <h2 class="font-weight-bold text-center my-5"> Propiedades Destacadas </h2>

                <div class="col-12">

                    <div class="row">
                        <?php
                        if (is_array($api)) {
                            inmuebles_destacados($api);
                        } else {
                            echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                        }
                        ?>

                    </div>

                </div>

            </div>

        </section>

        <section id="descripcion_nosotros" class="border">

            <div class="my-5 container">




                <div class="text-justify row">
                    <div class="col-6">
                        <img src="images/custom1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <h2 class="mb-5 font-weight-bold text-center"> <?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?> </h2>
                        <p> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['2'] ?> </p>


                        <div class="m-0 row align-items-center">
                            <h4 class="mr-2 font-weight-bold"> Descarga aquí nuestro brochure:</h4>
                            <a href="brochure-gomez-y-asociados.pdf" download="brochure-gomez-y-asociados.pdf"><i class="fas fa-file-download"></i></a>
                        </div>

                    </div>

                </div>


            </div>

        </section>

        <section id="nuestros_servicios" class="border-bottom mb-5">

            <div class="container-fluid mb-5">

                <h2 class="py-5 font-weight-bold text-center"> Nuestros Servicios </h2>

                <div class="container">

                    <div class="col-12">

                        <div class="row justify-content-around">


                            <a href="servicios.php">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['arrendamientos']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                            <a href="servicios.php">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['ventas'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['ventas']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                            <a href="servicios.php">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['administracion'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['administracion']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="row justify-content-around">

                            <a href="servicios.php">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['avaluos'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['avaluos']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                            <a href="servicios.php">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['asesoria'] ?>"></i>
                                        <h5 class="text-center"> Asesoría Jurídica </h5>
                                    </div>

                                </div>
                            </a>

                            <a href="servicios.php">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['inversiones'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['inversiones']['titulo'] ?> </h5>
                                    </div>
                                </div>
                            </a>

                        </div>


                    </div>

                </div>




            </div>


        </section>

        <section id="propiedades_destacadas">



            <div class="container p-0">

                <h2 class="font-weight-bold text-center my-5"> Últimas Noticias </h2>

                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 21rem;">
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
                        <div class="col-4">
                            <div class="card" style="width: 21rem;">
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
                        <div class="col-4">
                            <div class="card" style="width: 21rem;">
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

        </section>

        <section id="aliados" class="my-5">
            <div class="container">

                <h2 class="font-weight-bold text-center mb-5 "> Nuestros Aliados </h2>

                <div class="row justify-content-around">

                    <div class="">
                        <img src="images/libertador.png" alt="">
                    </div>

                    <div class="">
                        <img src="images/unifianza.png" alt="">
                    </div>

                    <div class="">
                        <img src="images/fgi.png" alt="">
                    </div>

                </div>
                <div class="row justify-content-around">

                    <div class="">
                        <img src="images/fenalco.png" alt="">
                    </div>

                    <div class="">
                        <img src="images/icontec.png" alt="">
                    </div>

                </div>
            </div>
        </section>

    </section>

    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>


    <?php include 'layout/archivosfooter.php'; ?>
    <script src="js/menu.js"></script>
</body>

</html>