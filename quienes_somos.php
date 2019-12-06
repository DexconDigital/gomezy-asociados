<?php require 'variables/variables.php';
$page = 'Quienes Somos';
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
    var isTransparent = false;
  </script>
  <!-- ***********************Menu********************** -->

    <header class="position-fixed sticky-top">
        <?php include 'layout/header2.php' ?>
    </header>

    <section id="banner" class="position-relative">
        <div class="align-items-center d-flex justify-content-center" style="color: white;">
        <div class="d-flex justify-content-center align-items-center flex-column position-absolute">
                <h1 class="font-weight-bold" > QUIÉNES SOMOS </h1>
                <h5>  Inicio / Quiénes somos  </h5>
            </div>
            <div>
                <img src="images/banner_quienes_somos.png" alt="">
            </div>
        </div>
    </section>

    <div id="contenedor" class="container-fluid body ">

        <section id="descripcion" class="">
            <div class="container p-0">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img src="images/edificio.png" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <h2 class="mb-4"><?php echo $texto_quienes_somos['quienes_somos']['titulo']  ?></h2>
                            <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
                            <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p>
                            <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][2] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 margen_iconos_imagen">
                                        <img id="imagenes_iconos" src="images/mision_1.png" alt="">
                                    </div>

                                </div>
                                <div class="col-8 text-center">
                                    <h2 class="mb-4"><?php echo $texto_quienes_somos['mision']['titulo']  ?></h2>
                                    <p class="text-justify"><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 margen_iconos_imagen">
                                        <img id="imagenes_iconos" src="images/vision_1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8 text-center">
                                    <h2 class="mb-4"><?php echo $texto_quienes_somos['vision']['titulo']  ?></h2>
                                    <p class="text-justify"><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <section class="fondo">
        <div class="col-12 mt-5 ">
            <h2 class="mb-4 text-center"><?php echo $texto_quienes_somos['valores']['titulo']  ?></h2>
            <div class="row">

                <div class="col-4 text-left d-flex justify-content-center">
                    <ul>
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
                <div class="col-4 d-flex justify-content-center">
                    <ul>
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
                <div class="col-4">
                    <div class="col-12">
                        <img id="imagenes_iconos_mision" src="images/valores_1.png" alt="">
                    </div>
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