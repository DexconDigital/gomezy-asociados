<?php require 'variables/variables.php';
$page = 'Inmuebles';
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
                <h1 class="font-weight-bold"> INMUEBLES </h1>
                <h5 class="justify-content-center row"> Inicio / Inmuebles / Detalle de Inmueble / Código </h5>
            </div>
            <div>
                <img src="images/detalle_banner_inmueble.png" alt="">
            </div>
        </div>
    </section>

    <!-- ----------BUSCADOR---------- -->

    <section id="buscador" class="my-5">

        <?php include 'layout/buscador.php' ?>

    </section>

    <!-- ----------BUSCADOR---------- -->

    <section id="contenido_detalle_inmueble">

        <div class="container">

            <div class="row">

                <section id="seccion_izquierda" class="col-8">

                    <!-- Inicio carrusel de imagenes -->
                    <section id="carrusel" class="my-3">

                        <h2 class="text-center"> *Carrusel imagenes* </h2>
                        <img class="w-100" src="images/custom1.jpg" alt="">


                    </section>
                    <!-- Fin carrusel de imagenes -->

                    <section id="descripcion_inmueble" class="mt-3">

                        <!-- Inicio iconos y ficha de descarga -->
                        <div class="iconos_y_ficha container">

                            <div class="row">

                                <div class="col-6">

                                    <h3> Nombre de Inmueble </h3>

                                    <div class="container">
                                        <div class="row align-items-baseline">

                                            <div>
                                                <i class="fas fa-chart-area"></i>
                                                <p class="d-inline">100m²</p>
                                            </div>

                                            <div>
                                                <i class="ml-3 fas fa-bed"></i>
                                                <p class="d-inline">4</p>
                                            </div>

                                            <div>
                                                <i class="ml-3 fas fa-bath"></i>
                                                <p class="d-inline">2</p>
                                            </div>

                                            <div>
                                                <i class="ml-3 fas fa-warehouse"></i>
                                                <p class="d-inline">1</p>
                                            </div>

                                            <div>
                                                <p class="ml-3 text-muted"> Código </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-6 row align-items-center justify-content-center">

                                    <div class="d-flex align-items-baseline">
                                        <h6> Comparte en: </h6>
                                        <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>">
                                            <div style="width:35px; height:35px;" class="align-items-center d-flex justify-content-center text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $datos_contacto['whatsapp']['icono'] ?>"></i> </div>
                                        </a>
                                        <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>">
                                            <div style="width:35px; height:35px;" class="align-items-center d-flex justify-content-center text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['facebook']['icono'] ?>"></i> </div>
                                        </a>
                                        <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>">
                                            <div style="width:35px; height:35px;" class="align-items-center d-flex justify-content-center text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['instagram']['icono'] ?>"></i> </div>
                                        </a>
                                        <a target="_blank" href="<?php echo $redes_sociales['twitter']['link'] ?>">
                                            <div style="width:35px; height:35px;" class="align-items-center d-flex justify-content-center text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['twitter']['icono'] ?>"></i> </div>
                                        </a>
                                        <a target="_blank" href="<?php echo $redes_sociales['youtube']['link'] ?>">
                                            <div style="width:35px; height:35px;" class="align-items-center d-flex justify-content-center text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['youtube']['icono'] ?>"></i> </div>
                                        </a>
                                    </div>

                                    <a style="color:black" href="#" download="#" class="btn"> Descargar ficha </a>

                                </div>

                            </div>

                        </div>
                        <!-- Fin iconos y ficha de descarga -->

                        <!--Inicio botones-->
                        <div id="accordion">
                            <div class="container">
                                <div class="col-12 ">

                                    <!----------BOTONES---------->

                                    <div class="row my-3 justify-content-between">

                                        <button class="rounded botones color_boton collapsed" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                            Descripción
                                        </button>

                                        <button class="rounded botones color_boton collapsed" data-toggle="collapse" data-target="#dos" aria-expanded="false" aria-controls="collapseExample">
                                            Características Internas
                                        </button>

                                        <button class="rounded botones color_boton collapsed" data-toggle="collapse" data-target="#tres" aria-expanded="false" aria-controls="collapseExample">
                                            Características Externas
                                        </button>

                                        <button class="rounded botones color_boton collapsed" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                                            Características Alrededores
                                        </button>

                                        <button class="rounded botones color_boton collapsed" data-toggle="collapse" data-target="#cinco" aria-expanded="false" aria-controls="collapseExample">
                                            Video
                                        </button>

                                        <button class="rounded botones color_boton collapsed" data-toggle="collapse" data-target="#seis" aria-expanded="false" aria-controls="collapseExample">
                                            Mapa de ubicación
                                        </button>

                                    </div>

                                    <!----------BOTONES---------->

                                    <!----------INFORMACION BOTONES---------->


                                    <div class="margen_contenedor">

                                        <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                            <h2> Descripción </h2>
                                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fugit tempore soluta? Voluptatum veritatis accusamus alias obcaecati deleniti, culpa expedita laudantium odio. Dolore repudiandae assumenda, quod ab nulla et mollitia. </p>
                                        </div>

                                        <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                            <h2> Características Internas </h2>
                                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                        </div>

                                        <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">

                                            <h2> Características Externas </h2>
                                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                        </div>

                                        <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">

                                            <h2> Características Alrededores </h2>
                                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                        </div>

                                        <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">

                                            <h2> Video </h2>
                                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                        </div>

                                        <div id="seis" class="collapse" aria-labelledby="seis" data-parent="#accordion">

                                            <h2> Mapa de ubicación </h2>
                                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                                        </div>


                                    </div>

                                </div>

                            </div>

                            <!----------INFORMACION BOTONES---------->
                        </div>
                        <!--Fin botones -->

                    </section>

                </section>

                <section id="seccion_derecha" class="col-4 justify-content-center">

                    <!--Inicio contacto con el asesor -->
                    <div class="">
                        <h2 class="my-3 text-center"> Contacto con el asesor </h2>

                        <div class="imagen_asesor row justify-content-center"> <img src="images/no_image.png" alt=""> </div>

                        <p class="mt-3 col-12"> NOMBRE </p>
                        <p class="col-12"> TELEFONO </p>
                        <p class="col-12"> CORREO </p>
                    </div>
                    <!--Fin contacto con el asesor -->

                    <!-- Inicio Propiedades similares -->
                    <div id="propiedades_similares">

                        <h5 class="mb-3 text-center"> Propiedades similares </h5>

                        <div class="mb-3 col-12 border-top border-bottom">
                            <a href="#" class="row align-items-center">
                                <div class="col-6">
                                    <img style="width:100%;" src="images/no_image.png" alt="">
                                </div>
                                <div class="col-6"> *Descripción del apartamento* </div>
                            </a>
                        </div>

                        <div class="mb-3 col-12 border-top border-bottom">
                            <a href="#" class="row align-items-center">
                                <div class="col-6">
                                    <img style="width:100%;" src="images/no_image.png" alt="">
                                </div>
                                <div class="col-6"> *Descripción del apartamento* </div>
                            </a>
                        </div>

                        <div class="mb-3 col-12 border-top border-bottom">
                            <a href="#" class="row align-items-center">
                                <div class="col-6">
                                    <img style="width:100%;" src="images/no_image.png" alt="">
                                </div>
                                <div class="col-6"> *Descripción del apartamento* </div>
                            </a>
                        </div>

                    </div>
                    <!-- Fin Propiedades similares -->


                </section>

            </div>

        </div>




    </section>

    <section>

    </section>












    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>


    <?php include 'layout/archivosfooter.php'; ?>

</body>

</html>