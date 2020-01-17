<?php
require 'variables/variables.php';
require 'controllers/inmueblesController.php';
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
                <h5 class="justify-content-center row"> Inicio / Inmuebles </h5>
            </div>
            <div>
                <img src="images/banner_inmuebles.png" alt="">
            </div>
        </div>
    </section>

    <section id="buscador" class="my-5">

        <?php include 'layout/buscador.php' ?>

    </section>

    <section id="propiedades_destacadas">



        <div class="container p-0">
            <div class="col-12">
                <div class="row">
                    <?php $totalinmuebles = 0;
                    if (is_array($api)) {
                        $totalinmuebles = $api['datosGrales']['totalInmuebles'];
                    } ?>
                    <div class="col-12 mb-4">
                        <h4 class="titulo_totalinmuebles text-center">Se han encontrado <?php echo $totalinmuebles ?> inmuebles</h4>
                    </div>
                    <!-- propiedades -->
                    <?php
                    if (is_array($api)) {
                        listar_inmuebles($api['Inmuebles']);
                    } else {
                        echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                    }
                    ?>


                </div>
            </div>
        </div>

        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>

    </section>

    <section>


        <footer>

            <?php include 'layout/footer.php' ?>

        </footer>

        <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>