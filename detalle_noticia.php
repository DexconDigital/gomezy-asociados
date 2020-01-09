<?php require 'variables/variables.php';
require_once('controllers/detalle_noticiasController.php'); 
$page = 'Noticias';
$nombre_inmobiliaria = 'Gómez Y Asociados' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
   
</head>



<body>

    <header class="position-fixed sticky-top">
        <?php include 'layout/header2.php' ?>
    </header>

    <section id="banner" class="position-relative">
        <div class="align-items-center d-flex justify-content-center" style="color: white;">
            <div class="d-flex justify-content-center align-items-center flex-column position-absolute">
                <h1 class="font-weight-bold"> Detalle de Noticia </h1>
                <h5 class="col-12 justify-content-center row"> Inicio / Noticias / Detalle de Noticia </h5>
            </div>
            <div>
                <img src="images/detalle_banner_inmueble.png" alt="">
            </div>
        </div>
    </section>



    <div class="container-fluid mt-5">
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h2><?php echo $nombre ?></h2>
            </div>
            <div class="col-12 text-break">
                <div class="img_responsive_contacto col-12">
                    <img src="<?php echo $ruta_imagen ?>" alt="" class="h-100 w-100">
                </div>
                <p> <?php echo $noticia ?></p>
            </div>
        </div>
        <div class="container col-10 text-center mb-4 ">
            <div class="row">

                <div class="col-12">

                    <span class="text-muted"> Publicado el: <?php echo $fecha_complete; ?></span>
                </div>

                <div class="col-12">
                    <?php if ($ruta_archivo != $comparador . "") {
                        echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                    } ?>
                </div>
            </div>
        </div>

    </div>


    <footer>
        <?php include 'layout/footer.php' ?>
    </footer>

    <?php include 'layout/archivosfooter.php'; ?>
 



</body>

</html>