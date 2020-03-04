<?php require 'variables/variables.php';
$page = 'Contacto';
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
        <div class="position-relative align-items-center d-flex justify-content-center" style="color: white;">
            
            <div class="imagen_contactanos imagen">
                
            </div>

            <div class="fondo_negro h-100 w-100"></div>

            <div class="d-flex justify-content-center align-items-center flex-column position-relative" style="height:200px" > 
                <h1 class="font-weight-bold"> CONTÁCTANOS </h1>
                <h5 class="justify-content-center row"> Inicio / Contáctanos </h5>
            </div>
        </div>
    </section>

    <section id="formulario" class="mt-5">
        <div class="container">
            <div class="col-12"></div>
            <div class="row">

                <!-- DATOS DE CONTACTO -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="text-left mb-4">
                        Datos de Contacto
                    </h2>
                    <div class="col-12">
                        <ul class="p-0">
                            <li>
                                <i class="mr-2 mb-3 <?php echo $datos_contacto['direccion']['icono'] ?>"></i><?php echo $datos_contacto['direccion']['direccion'] ?>
                            </li>
                            <li>
                                <a class="color_a_datos" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                                    <i class=" mr-2 mb-3 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>
                                </a>
                            </li>
                            <li>
                                <a class="color_a_datos" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                                    <i class=" mr-2 mb-3 <?php echo $datos_contacto['celular']['icono'] ?>"></i><?php echo $datos_contacto['celular']['imprimir'] ?>
                                </a>
                            </li>
                            <li>
                                <a class="color_a_datos" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="blanck">
                                    <i class=" mr-2 mb-3 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?>
                                </a>
                            </li>
                        </ul>
                        <hr>

                        <div class="col-12 align-items-center justify-content-center d-flex">

                            <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>">
                                <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $datos_contacto['whatsapp']['icono'] ?>"></i> </div>
                            </a>

                            <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>">
                                <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['facebook']['icono'] ?>"></i> </div>
                            </a>

                            <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>">
                                <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['instagram']['icono'] ?>"></i> </div>
                            </a>

                            <a target="_blank" href="<?php echo $redes_sociales['youtube']['link'] ?>">
                                <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['youtube']['icono'] ?>"></i> </div>
                            </a>

                        </div>

                    </div>
                </div>
                <!-- DATOS DE CONTACTO -->

                <!-- FORMULARIO DE CONTACTO -->
                <div class="mt-4 mt-md-0 mt-lg-0 mt-xl-0 col-12 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="text-left mb-4">
                        Formulario de contacto
                    </h2>
                    <div class="col-12">
                        <form action="email/enviarCorreo.php" method="Post">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Correo" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text_Area">
                                    <textarea cols="10" rows="7" id="mensaje" name="mensaje" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                    <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_contacto" href="Politicas_de_seguridad.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn rounded col-6 waves-effect waves-light color_boton_contacto p-2" name=""><span style="color:white">Enviar</span></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- FORMULARIO DE CONTACTO -->


                <div class="col-12 mb-4">
                    <hr>
                    <div class="col-12 mt-3">
                        <h2 class="text-center">
                            Escríbenos
                        </h2>
                        <div class="row mt-4">
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['arrendamientos_ventas']['correo'] ?>">
                                    <img src="images/mercadeo.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Arrendamientos ventas</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['cartera']['correo'] ?>">
                                    <img src="images/cartera.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Cartera</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['mantenimientos']['correo'] ?>">
                                    <img src="images/mtto.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Mantenimientos</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['restituciones']['correo'] ?>">
                                    <img src="images/restituciones.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Restituciones</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['pagos']['correo'] ?>">
                                    <img src="images/pagos.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Pagos</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto: <?php echo $datos_contacto['correos']['servicios_publicos']['correo'] ?>">
                                    <img src="images/servicios_publicos.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Servicios Públicos</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['contabilidad']['correo'] ?>">
                                    <img src="images/gestion_financiera.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Contabilidad</p>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 col-xl-3 text-center">
                                <a href="mailto:<?php echo $datos_contacto['correos']['proteccion_datos']['correo'] ?>">
                                    <img src="images/proteccion_datos.png" alt="" style="width: 50%; object-fit: contain;">
                                    <p class="texto_contacto">Protección Datos</p>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>

        <?php include 'layout/footer.php' ?>

    </footer>
    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>