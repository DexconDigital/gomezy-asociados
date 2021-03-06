<?php

require 'variables/variables.php';
require 'controllers/indexController.php';
require 'controllers/noticiasController.php';
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
                    <img src="images/slide1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="d-block w-100" alt="...">
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

                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 mb-5 mb-lg-0 mb-xl-0 text-justify">
                        <h2 class="mb-5 font-weight-bold text-center"> <?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?> </h2>
                        <p> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['2'] ?> </p>

                        <div class="m-0 row order-3 align-items-center justify-content-center justify-content-lg-left justify-content-xl-left">
                            <h4 class="mr-2 font-weight-bold"> Descarga aquí nuestro brochure:</h4>
                            <a href="brochure_gomez_asociados.pdf" target="blank"><i class="fas fa-file-download"></i></a>
                        </div>

                    </div>

                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <img src="images/custom1.jpg" alt="">
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


                            <a class="col-12 col-md-4 col-lg-4 col-xl-4 row justify-content-center" href="servicios.php#arrendamientos">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['arrendamientos']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                            <a class="col-12 col-md-4 col-lg-4 col-xl-4 row justify-content-center" href="servicios.php#ventas">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['ventas'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['ventas']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                            <a class="col-12 col-md-4 col-lg-4 col-xl-4 row justify-content-center" href="servicios.php#administracion">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['administracion'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['administracion']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="row justify-content-around">

                            <a class="col-12 col-md-4 col-lg-4 col-xl-4 row justify-content-center" href="servicios.php#avaluos">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['avaluos'] ?>"></i>
                                        <h5 class="text-center"> <?php echo $texto_servicios['avaluos']['titulo'] ?> </h5>
                                    </div>

                                </div>
                            </a>

                            <a class="col-12 col-md-4 col-lg-4 col-xl-4 row justify-content-center" href="servicios.php#asesoria">
                                <div class="justify-content-center mb-5 panal row">

                                    <div class="align-items-center flex-column justify-content-center row">
                                        <i class="mb-3 <?php echo $iconos_servicios['asesoria'] ?>"></i>
                                        <h5 class="text-center"> Asesoría Jurídica </h5>
                                    </div>

                                </div>
                            </a>

                            <a class="col-12 col-md-4 col-lg-4 col-xl-4 row justify-content-center" href="servicios.php#inversiones">
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

        <section id="ultimas_noticias" class="mb-5">
            <div class="container espacio_margen">
                <div class="col-12 mb-5">
                    <h2 class="py-5 font-weight-bold text-center"> Últimas Noticias </h2>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center">
                        <?php if (isset($noticias_array)) {
                            modelo_ultima_noticia($noticias_array);
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


        <section id="aliados" class="mb-5">
            <div class="container">

                <h2 class="font-weight-bold text-center mb-5 "> Nuestros Aliados </h2>

                <div class="row align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 col-lg-4">
                        <img src="images/libertador.png" alt="">
                    </div>

                    <div class="d-flex align-items-center justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 col-lg-4">
                        <img src="images/unifianza.png" alt="">
                    </div>

                    <div class="fgi d-flex align-items-center justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 col-lg-4">
                        <img src="images/fgi.png" alt="">
                    </div>

                    <div class="d-flex align-items-center justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 col-xg-4">
                        <img style="margin-top: 20px; width:30%" src="images/fenalco.png" alt="">
                    </div>

                    <div class="berkley1 d-flex align-items-center justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 col-xg-4">
                        <img src="images/logo_11.png" alt="">
                    </div>

                    <div class="berkley1 d-flex align-items-center justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 col-xg-4">
                        <img src="images/gomez_y_loaiza.png" alt="">
                    </div>

                    <!--<div class="berkley d-flex align-items-center justify-content-center col-12">
                        <img src="images/logo_berkley.png" alt="">
                    </div>-->

                </div>

            </div>
        </section>

    </section>

    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>


    <?php include 'layout/archivosfooter.php'; ?>
    <script src="js/menu.js"></script>
    
    <!-- Modal -->
<div class="modal fade" id="modal_emergente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Estimado cliente, a partir del mes de Abril nuestra organización brindará sus servicios en la  CR 43 B # 16-95 Oficina 314, edificio Cámara Colombiana de la Infraestructura PH, esta será nuestra única sede.
      </div>
      <div class="modal-footer">

        <button type="button" class="btn color_boton" data-dismiss="modal"> Cerrar </button>

      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function()
   {
      $("#modal_emergente").modal("show");
   });

</script>

</body>

</html>