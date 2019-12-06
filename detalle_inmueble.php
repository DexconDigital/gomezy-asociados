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
                <h5 class="justify-content-center row">  Inicio / Inmuebles / Detalle de Inmueble / Código </h5>
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

    <div class="caja">
        


    </div>












    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>

    <?php include 'layout/archivosfooter.php'; ?>

</body>

</html>