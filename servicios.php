<?php require 'variables/variables.php';
$page = 'Servicios';
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
                <h1 class="font-weight-bold" > SERVICIOS </h1>
                  <h5 class="justify-content-center row"> Inicio / Servicios  </h5>
            </div>
            <div>
                <img src="images/banner_servicios.png" alt="">
            </div>
        </div>
    </section>


    <section id="servicios">
        <div class="m-0 p-0 align-items-center container-fluid row">


            <div class="container espacio_top">
                <!-- Arrendamientos -->
                <div class="col-12 borde mt-3">
                    <div class="row">
                        <div class="col-6 p-3">
                            <h2 class="text-center"><?php echo $texto_servicios['arrendamientos']['titulo']  ?> </h2>
                            <div class="col-12 mt-3   text-center">
                                <samp><i class="<?php echo $iconos_servicios['arrendamientos'] ?>"></i></samp>
                            </div>
                        </div>
                        <div class="col-6 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['arrendamientos']['parrafo']  ?> </p>
                        </div>
                    </div>
                </div>
                <!-- ventas -->
                <div class="col-12 borde  mt-3">
                    <div class="row">
                        <div class="col-6  p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['ventas']['parrafo']  ?> </p>
                        </div>
                        <div class="col-6  p-3">
                            <h2 class="text-center"><?php echo $texto_servicios['ventas']['titulo']  ?> </h2>
                            <div class="col-12 mt-3  text-center">
                                <samp><i class="<?php echo $iconos_servicios['ventas'] ?>"></i></samp>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Avaluos -->
                <div class="col-12 borde  mt-3">
                    <div class="row">
                        <div class="col-6  p-3">
                            <h2 class="text-center"><?php echo $texto_servicios['avaluos']['titulo']  ?> </h2>
                            <div class="col-12 mt-3  text-center">
                                <samp><i class="<?php echo $iconos_servicios['avaluos'] ?>"></i></samp>
                            </div>
                        </div>
                        <div class="col-6  p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['avaluos']['parrafo']  ?> </p>
                        </div>
                    </div>
                </div>
                <!-- Asesorias -->
                <div class="col-12 borde  mt-3">
                    <div class="row">
                        <div class="col-6 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['asesoria']['parrafos'][0]  ?> </p>
                            <p class="text-justify"><?php echo   $texto_servicios['asesoria']['parrafos'][1]  ?> </p>
                        </div>
                        <div class="col-6 p-4 ">
                            <h2 class="text-center"><?php echo $texto_servicios['asesoria']['titulo']  ?> </h2>
                            <div class="col-12 mt-3 text-center">
                                <samp><i class="<?php echo $iconos_servicios['asesoria'] ?>"></i></samp>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Administracion -->
                <div class="col-12 borde  mt-3">
                    <div class="row">
                        <div class="col-6 p-5">
                            <h2 class="text-center"><?php echo $texto_servicios['administracion']['titulo']  ?> </h2>
                            <div class="col-12 mt-3 text-center">
                                <samp><i class="<?php echo $iconos_servicios['administracion'] ?>"></i></samp>
                            </div>
                        </div>
                        <div class="col-6 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['administracion']['parrafos'][0]  ?> </p>
                            <p class="text-justify"><?php echo   $texto_servicios['administracion']['parrafos'][1]  ?> </p>
                        </div>
                    </div>
                </div>
                <!-- inversiones -->
                <div class="col-12 borde  mt-3">
                    <div class="row">
                        <div class="col-6  p-2 mt-3">
                            <p class="text-justify"><?php echo   $texto_servicios['inversiones']['parrafos'][0]  ?> </p>
                        </div>
                        <div class="col-6  p-4">
                            <h2 class="text-center"><?php echo $texto_servicios['inversiones']['titulo']  ?> </h2>
                            <div class="col-12 mt-3  text-center">
                                <samp><i class="<?php echo $iconos_servicios['inversiones'] ?>"></i></samp>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-justify"><?php echo   $texto_servicios['inversiones']['parrafos'][1]  ?> </p>
                            <p class="text-justify"><?php echo   $texto_servicios['inversiones']['parrafos'][2]  ?> </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <section id="consignar">
        <div class="container  mt-3">
            <div class="col-12 color_fondo">
                <div class="row">
                    <div class="col-5 mt-3">
                        <h3 class="color_texto">Consigna tu inmueble aquí</h3>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3 margen_boton">
                        <a class="btn color_btn rounded" data-toggle="modal" data-target="#exampleModal">Consignar Inmueble</a>
                    </div>

                    <div class="col-3 margen_boton">
                        <a class="btn color_btn rounded" href="http://gomezloaizarealty.com/" target="blank"> Aliado Estratégico</a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <br>
    <br>


    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>
    

</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>