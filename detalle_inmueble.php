<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
$page = 'Inmuebles';
$nombre_inmobiliaria = 'Gómez Y Asociados' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/carousel.inmuebles.css">
    <link rel="stylesheet" href="css/carousel.tamanos.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 350px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>

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

    <section id="contenido_detalle_inmueble">

        <div class="container">

            <div class="row">

                <section id="seccion_izquierda" class="col-8">

                    <!-- Inicio carrusel de imagenes -->

                    <div class="container">
                        <div class="col-12">
                            <!-- main slider carousel items -->
                            <section class="mt-3" id="slide-detalle">
                                <?php
                                if (isset($r['fotos'])) {
                                    for ($i = 0; $i < count($r['fotos']); $i++) {
                                        echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                    }
                                } else {
                                    echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                                }
                                ?>
                            </section>
                            <section class="vertical-center-4 slider" id="miniaturas">
                                <?php
                                if (isset($r['fotos'])) {
                                    for ($i = 0; $i < count($r['fotos']); $i++) {
                                        echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                    }
                                } else {
                                    echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                                }
                                ?>
                            </section>
                        </div>
                    </div>
                    <!-- Fin carrusel de imagenes -->

                    <section id="descripcion_inmueble" class="mt-3">

                        <!-- Inicio iconos y ficha de descarga -->
                        <div class="iconos_y_ficha container">

                            <div class="row">

                                <div class="col-6">

                                    <h3> <?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?> </h3>

                                    <div class="container">
                                        <div class="row align-items-baseline">

                                            <div>
                                                <i class="fas fa-chart-area"></i>
                                                <p class="d-inline"><?php echo $area_construida; ?>m<sup>2<sup></p>
                                            </div>

                                            <div>
                                                <i class="ml-3 fas fa-bed"></i>
                                                <p class="d-inline"><?php echo $alcobas; ?></p>
                                            </div>

                                            <div>
                                                <i class="ml-3 fas fa-bath"></i>
                                                <p class="d-inline"><?php echo $banios; ?></p>
                                            </div>

                                            <div>
                                                <i class="ml-3 fas fa-warehouse"></i>
                                                <p class="d-inline"><?php echo $garaje; ?></p>
                                            </div>

                                            <div>
                                                <p class="ml-3 text-muted"> Código: <?php echo $co; ?> </p>
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

                                    </div>

                                    <!----------BOTONES---------->

                                    <!----------INFORMACION BOTONES---------->


                                    <div class="margen_contenedor">

                                        <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                            <h2> Descripción </h2>
                                            <p style="text-align: justify;"><?php echo $descripcion ?></p>
                                        </div>

                                        <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                            <?php
                                            if (count($r['caracteristicasInternas']) > 0) {
                                                echo
                                                    '<div class="col-md-12" style="margin-bottom: 12px;">
                                                      <h2 class="property-single-detail-title"><strong>Características Internas</strong></h2>
                                                        <ul>';
                                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                                    $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                                    echo '<li>' . $caracteristicas . '</li>';
                                                }
                                                echo  '</ul>
                                                 </div>
                                                         ';
                                            }
                                            ?>

                                        </div>

                                        <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">

                                            <?php
                                            if (count($r['caracteristicasExternas']) > 0) {
                                                echo
                                                    '<div class="col-md-12" style="margin-bottom: 12px;">
                                                        <h2 class="property-single-detail-title"><strong>Características Externas</strong></h2>
                                                              <ul>';
                                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                                    echo '<li>' . $caracteristicas . '</li>';
                                                }
                                                echo  '</ul>
                                                             </div>
                                                                     ';
                                            }
                                            ?>

                                        </div>

                                        <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">

                                            <?php
                                            if (count($r['caracteristicasAlrededores']) > 0) {
                                                echo
                                                    '<div class="col-md-12" style="margin-bottom: 12px;">
                                                      <h2 class="property-single-detail-title"><strong>Características de los alrededores</strong></h2>
                                                                  <ul>';
                                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                                    echo '<li>' . $caracteristicas . '</li>';
                                                }
                                                echo  '</ul>
                                                       </div>
                                                                  ';
                                            }
                                            ?>

                                        </div>

                                        <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">

                                            <?php if ($r['video'] != "") {
                                                echo
                                                    ' <h2 class="property-single-detail-title">Video</h2>
                                                            <div class="card">
                                                              <div class="card-body">
                                                                  <h5 class="card-title">Video</h5>
                                                                 <div class="row">
                                                        <div class="col-12 col-md-4">
                                                            <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                          </div>
                                                          </div>
                                                         </div>
                                                         </div>
                                                       ';
                                            } ?>

                                        </div>

                                        <div class="mt-5">
                                            <h2 class="text-center mb-5"> Ubicación del inmueble </h2>
                                            <div class="card mapa_tamaño">
                                                <div class="">
                                                    <div id="map" class="w-100"></div>
                                                </div>
                                            </div>
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

                        <div class="imagen_asesor row justify-content-center"> <img src="<?php echo $asesor['FotoAsesor']; ?>" alt=""> </div>
                        <p class="mt-3 col-12"><i class="fas fa-user mr-2"><span> <?php echo $asesor['ntercero']; ?></span></i></p>
                        <p class="col-12"><i class="fas fa-mobile-alt mr-2"><span><a class="color_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"> <?php echo $asesor['celular']; ?></a></span></i></p>
                        <p class="col-12"><i class="fas fa-envelope mr-2"></i><span><a class="color_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a></span></p>
                    </div>
                    <!--Fin contacto con el asesor -->

                    <!-- Inicio Propiedades similares -->
                    <div id="propiedades_similares">

                        <h5 class="mb-3 text-center"> Propiedades similares </h5>

                        <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>


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
    <script src="js/slick.min.js"></script>
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>

    <!-- MAPA DE INMUEBLES -->

<script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>

</body>

</html>