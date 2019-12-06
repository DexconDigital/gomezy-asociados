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
                <h5>  Inicio / Inmuebles  </h5>
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

                        <div class="mb-5 col-4 px-3">
                            <div class="card">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="px-3 card-title"> Nombre de Inmueble </h5>
                                    <div>
                                        <ul class="justify-content-around list-group list-group-horizontal">
                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                                <p>Mts</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                                <p>2</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                                <p>4 </p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                                <p> 2</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                                        <p> <span>$</span>100.000.000 </p>
                                        <a href="#" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 col-4 px-3">
                            <div class="card">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="px-3 card-title"> Nombre de Inmueble </h5>
                                    <div>
                                        <ul class="justify-content-around list-group list-group-horizontal">
                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                                <p>Mts</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                                <p>2</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                                <p>4 </p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                                <p> 2</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                                        <p> <span>$</span>100.000.000 </p>
                                        <a href="#" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 col-4 px-3">
                            <div class="card">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="px-3 card-title"> Nombre de Inmueble </h5>
                                    <div>
                                        <ul class="justify-content-around list-group list-group-horizontal">
                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                                <p>Mts</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                                <p>2</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                                <p>4 </p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                                <p> 2</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                                        <p> <span>$</span>100.000.000 </p>
                                        <a href="#" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 col-4 px-3">
                            <div class="card">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="px-3 card-title"> Nombre de Inmueble </h5>
                                    <div>
                                        <ul class="justify-content-around list-group list-group-horizontal">
                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                                <p>Mts</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                                <p>2</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                                <p>4 </p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                                <p> 2</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                                        <p> <span>$</span>100.000.000 </p>
                                        <a href="#" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 col-4 px-3">
                            <div class="card">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="px-3 card-title"> Nombre de Inmueble </h5>
                                    <div>
                                        <ul class="justify-content-around list-group list-group-horizontal">
                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                                <p>Mts</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                                <p>2</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                                <p>4 </p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                                <p> 2</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                                        <p> <span>$</span>100.000.000 </p>
                                        <a href="#" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 col-4 px-3">
                            <div class="card">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="px-3 card-title"> Nombre de Inmueble </h5>
                                    <div>
                                        <ul class="justify-content-around list-group list-group-horizontal">
                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                                <p>Mts</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                                <p>2</p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                                <p>4 </p>
                                            </li>

                                            <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                                <p> 2</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                                        <p> <span>$</span>100.000.000 </p>
                                        <a href="#" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    <section>
        

    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>

    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>