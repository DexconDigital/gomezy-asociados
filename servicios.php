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
                <h1 class="font-weight-bold"> SERVICIOS </h1>
                <h5 class="justify-content-center row"> Inicio / Servicios </h5>
            </div>
            <div>
                <img src="images/banner_servicios.jpg" alt="">
            </div>
        </div>
    </section>


    <section id="servicios">
        <div class="m-0 p-0 align-items-center container-fluid row">


            <div class="container espacio_top">

                <!-- Arrendamientos -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="position-absolute ancla" id="arrendamientos"></div>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h2 class="text-center"><?php echo $texto_servicios['arrendamientos']['titulo']  ?> </h2>
                            <div class="col-12 mt-3 text-center">
                                <span><i class="<?php echo $iconos_servicios['arrendamientos'] ?>"></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['arrendamientos']['parrafo']  ?> </p>
                        </div>
                    </div>
                </div>

                <!-- ventas -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="position-absolute ancla" id="ventas"></div>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-2 order-md-1 order-lg-1 order-xl-1 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['ventas']['parrafo']  ?> </p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-1 order-md-2 order-lg-2 order-xl-2 mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h2 id="ventas" class="text-center"><?php echo $texto_servicios['ventas']['titulo']  ?> </h2>
                            <div class="col-12 mt-3  text-center">
                                <span><i class="<?php echo $iconos_servicios['ventas'] ?>"></i></span>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Avaluos -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="position-absolute ancla" id="avaluos"></div>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h2 id="avaluos" class="text-center"><?php echo $texto_servicios['avaluos']['titulo']  ?> </h2>
                            <div class="col-12 mt-3  text-center">
                                <span><i class="<?php echo $iconos_servicios['avaluos'] ?>"></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['avaluos']['parrafo']  ?> </p>
                        </div>
                    </div>
                </div>

                <!-- Matenimiento -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-2 order-md-1 order-lg-1 order-xl-1 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['mantenimientos']['parrafo']  ?> </p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-1 order-md-1 order-lg-1 order-xl-1 mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h2 class="text-center"><?php echo $texto_servicios['mantenimientos']['titulo']  ?> </h2>
                            <div class="col-12 mt-3   text-center">
                                <span><i class="<?php echo $iconos_servicios['mantenimiento'] ?>"></i></span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Asesorias -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="position-absolute ancla" id="asesoria"></div>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-4 mt-md-0 mt-lg-0 mt-mt-xl-0">
                            <h2 id="asesoria" class="text-center"><?php echo $texto_servicios['asesoria']['titulo']  ?> </h2>
                            <div class="col-12 mt-3 text-center">
                                <span><i class="<?php echo $iconos_servicios['asesoria'] ?>"></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['asesoria']['parrafos'][0]  ?> </p>
                            <p class="text-justify"><?php echo   $texto_servicios['asesoria']['parrafos'][1]  ?> </p>
                        </div>
                    </div>
                </div>
                <!-- Administracion -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="position-absolute ancla" id="administracion"></div>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-2 order-md-1 order-lg-1 order-xl-1 p-4">
                            <p class="text-justify"><?php echo   $texto_servicios['administracion']['parrafos'][0]  ?> </p>
                            <p class="text-justify"><?php echo   $texto_servicios['administracion']['parrafos'][1]  ?> </p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-1 order-md-1 order-lg-1 order-xl-1 mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h2 id="administracion" class="text-center"><?php echo $texto_servicios['administracion']['titulo']  ?> </h2>
                            <div class="col-12 mt-3 text-center">
                                <span><i class="<?php echo $iconos_servicios['administracion'] ?>"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- inversiones -->
                <div class="col-12 borde mt-3 position-relative">
                    <div class="position-absolute ancla" id="inversiones"></div>
                    <div class="row align-items-center">

                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h2 id="inversiones" class="text-center"><?php echo $texto_servicios['inversiones']['titulo']  ?> </h2>
                            <div class="col-12 mt-3  text-center">
                                <span><i class="<?php echo $iconos_servicios['inversiones'] ?>"></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-4 mt-3">
                            <p class="text-justify"><?php echo   $texto_servicios['inversiones']['parrafos'][0]  ?> </p>
                        </div>
                        <div class="mb-3 col-12 p-0">
                            <p class="text-justify p-4"><?php echo   $texto_servicios['inversiones']['parrafos'][1]  ?> </p>
                            <div class="row px-4">
                                <p class="order-2 col-12 text-justify pt-4 mt-3"> <?php echo $texto_servicios['inversiones']['parrafos'][2]  ?> </p>
                                <div class="order-1 col-12 row align-items-center justify-content-center m-0"><img src="images/gomez_y_loaiza.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>


        </div>
    </section>

    <section id="consignar">
        <div class="container  mt-3">
            <div class="col-12 color_fondo rounded">
                <div class="p-2 row">

                    <div class="d-flex align-items-center justify-content-center col-12 col-md-12 col-lg-5 col-xl-5">
                        <h3 class="color_texto text-center">Consigna tu inmueble aquí:</h3>
                    </div>

                    <div class="p-0 col-12 col-lg-3 col-xl-3 m-0 margen_boton mb-2 mb-lg-0 mb-xl-0 ">
                        <a class="m-0 w-100 btn color_btn rounded" data-toggle="modal" data-target="#exampleModal">Consignar Inmueble</a>
                    </div>

                    <div class="p-0 col-12 col-lg-3 col-xl-3 m-0 margen_boton mb-2 mb-lg-0 mb-xl-0">
                        <a class="m-0 w-100 btn color_btn rounded" href="http://gomezloaizarealty.com/" target="blank"> Aliado Estratégico</a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <br>
    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>
    <section>
        <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form action="email/consignainmueble.php" class="row" method="post">
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="mail" placeholder="Correo" name="email" class="form-control" required="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <select class="form-control select_color" name="transaccion" requiered="">
                                        <option selected="" disabled="">Tipo de Transacción</option>
                                        <option value="arriendo">Arriendo</option>
                                        <option value="arriendo/venta">Arriendo/venta</option>
                                        <option value="venta">Venta</option>
                                        <option value="avaluos">avalúos</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered="">
                                        <option selected="" disabled="">Tipo de Inmueble</option>
                                        <option value="Apartamento">Apartamento</option>
                                        <option value="Casa">Casa</option>
                                        <option value="Consultorio">Consultorio</option>
                                        <option value="Oficina">Oficina</option>
                                        <option value="Local">Local</option>
                                        <option value="Bodega">Bodega</option>
                                        <option value="Lote">Lote</option>
                                        <option value="Finca">Finca</option>
                                        <option value="Parqueadero">Parqueadero</option>
                                        <option value="Edificio">Edificio</option>
                                        <option value="Apartaestudio">Apartaestudio</option>
                                        <option value="Hotel">Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <input type="number" placeholder="Valor" name="valor" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Área" name="area" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered=""></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered="">
                                        <label class="form-check-label" for="exampleCheck1">Acepto <a class="politicas_contac" href="Politicas_de_seguridad.pdf" class="a-terminos" target="_blank">la política y tratamiento de datos</a></label>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block color_azul">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn color_gris" data-dismiss="modal">Cancelar</button>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>