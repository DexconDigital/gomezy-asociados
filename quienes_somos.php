<?php require 'variables/variables.php';
$page = 'Quienes Somos';
$nombre_inmobiliaria = 'Gómez Y Asociados' ?>

<!DOCTYPE html>
<html lang="es">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = false;
    </script>
    <!-- ***********************Menu********************** -->

    <header class="position-fixed sticky-top">
        <?php include 'layout/header2.php' ?>
    </header>

    <section id="banner" class="position-relative">
        <div class="align-items-center d-flex justify-content-center" style="color: white;">
            <div class="d-flex justify-content-center align-items-center flex-column position-absolute">
                <h1 class="font-weight-bold"> QUIÉNES SOMOS </h1>
                <h5 class="justify-content-center row"> Inicio / Quiénes somos </h5>
            </div>
            <div>
                <img class="quienes" src="images/banner_quienes_somos.jpg" alt="">
            </div>
        </div>
    </section>


    <section id="contenedor" class="container-fluid body ">

        <div id="descripcion" class="mt-5">
            <div class="container p-0">

                <!-- QUIENES SOMOS -->
                <div class="col-12">
                    <div class="row">
                        <div class="mb-4 mb-md-0 mb-lg-0 mg-xl-0 col-12 col-md-6 col-lg-6 col-xl-6">
                            <img src="images/edificio.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6  text-center d-flex flex-column">
                            <h2 class="mb-4"><?php echo $texto_quienes_somos['quienes_somos']['titulo']  ?></h2>
                            <div class="order-1 order-md-1 order-lg-1 order-xl-1 "><p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p></div>
                            <div class="order-2 order-md-2 order-lg-2 order-xl-2 "><p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p></div>
                            <div class="order-4 order-md-3 order-lg-3 order-xl-3 "><p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][2] ?></p></div>
                                
                            <!--<div class="order-3 mb-2 mb-md-0 mb-lg-0 mb-xl-0 order-md-4 order-lg-4 order-xl-4 text-center norma_iso">
                                <div class="row">

                                    <div class="p-0 d-flex justify-content-end col-6 cont_iso">
                                        <img src="images/icontec_color.png" alt="">
                                    </div>
                                    <div class="p-0 d-flex justify-content-start col-6 cont_Qa ">
                                        <img src="images/IQNET.png" alt="">
                                    </div>

                                    <div class="col-12 text-center">
                                        <span style="font-family: ArialNarrow" ; class="etiqueta">SC4356-1</span>
                                    </div>

                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <!-- QUIENES SOMOS -->


                <!-- MISION VISION -->
                <div class="col-12 mt-5">
                    <div class="row">

                        <div class="mt-4 mt-md-0 mt-lg-0 mt-xl-0 col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">

                                <div class="mb-3 col-12 text-center row justify-content-center align-items-center ">

                                    <div class="col-6 d-flex justify-content-end align-items-center">
                                        <img id="imagenes_iconos" src="images/mision_1.png" alt="">
                                    </div>
                                    <div class="col-6 d-flex justify-content-start align-items-center p-0">
                                        <h2 class="m-0"><?php echo $texto_quienes_somos['mision']['titulo']  ?></h2>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <p class="text-justify"><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
                                </div>

                            </div>

                        </div>

                        <div class="mt-4 mt-md-0 mt-lg-0 mt-xl-0 mb-5 mb-md-0 mb-lg-0 mb-xl-0 col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">

                                <div class="mb-3 col-12 text-center row justify-content-center align-items-center ">

                                    <div class="col-6 d-flex justify-content-end align-items-center">
                                        <img id="imagenes_iconos" src="images/vision_1.png" alt="">
                                    </div>
                                    <div class="col-6 d-flex justify-content-start align-items-center p-0">
                                        <h2 class="m-0"><?php echo $texto_quienes_somos['vision']['titulo']  ?></h2>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <p class="text-justify"><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- MISION VISION -->

            </div>
        </div>

    </section>


    <section class="fondo">
        <div class="col-12 mt-5 ">
            <h2 class="mb-4 text-center"><?php echo $texto_quienes_somos['valores']['titulo']  ?></h2>
            <div class="row">

                <div class="mt-3 mt-md-0 mt-lg-0 mt-xl-0 col-12 col-md-4 col-lg-4 col-xl-4 order-2 order-md-1 order-lg-1 order-xl-1 text-left d-flex justify-content-center">
                    <ul class="d-flex flex-column col-10 m-md-0 m-lg-0 m-xl-0 m-auto">
                        <li>
                            <p><?php echo $texto_quienes_somos['valores']['parrafos'][0] ?></p>
                        </li>
                        <li>
                            <p><?php echo $texto_quienes_somos['valores']['parrafos'][1] ?></p>
                        </li>
                        <li>
                            <p><?php echo $texto_quienes_somos['valores']['parrafos'][2] ?></p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 order-3 order-md-2 order-lg-2 order-xl-2 text-left d-flex justify-content-center">
                    <ul class="d-flex flex-column col-10 m-md-0 m-lg-0 m-xl-0 m-auto">
                        <li>
                            <p><?php echo $texto_quienes_somos['valores']['parrafos'][3] ?></p>
                        </li>
                        <li>
                            <p><?php echo $texto_quienes_somos['valores']['parrafos'][4] ?></p>
                        </li>
                        <li>
                            <p><?php echo $texto_quienes_somos['valores']['parrafos'][5] ?></p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 order-1 order-md-3 order-lg-3 order-xl-3 d-flex justify-content-center align-items-center">
                    <img id="imagenes_iconos_mision" src="images/valores_1.png" alt="">
                </div>

            </div>
        </div>
    </section>

    </div>
    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>




</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>