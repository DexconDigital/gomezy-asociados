<!-- Codigo del preloader -->
<!-- <style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script> -->
<!-- Fin de codigo preloader -->
<section class="header_iconos">

    <div class="m-0 p-0 align-items-center container-fluid row">

        <div class="container">

            <div class="justify-content-end align-items-center row">
                <div class="d-flex mr-3">

                    <div class="ml-3 telefonos_header">
                        <a href="tel: <?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                            <i class="<?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                            <h6 class="d-inline esconder_telefono"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></h6>
                        </a>
                    </div>

                    <!--<div class="ml-3 telefonos_header">
                        <a href="tel: <?php echo $datos_contacto['celular']['link'] ?>">
                            <i class="<?php echo $datos_contacto['celular']['icono'] ?>"></i>
                            <h6 class="d-inline esconder_telefono"><?php echo $datos_contacto['celular']['imprimir'] ?> </h6>
                        </a>
                    </div>-->
                </div>

                <div class="iconos_responsive ml-5 d-flex">

                    <!--<a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>">
                        <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $datos_contacto['whatsapp']['icono'] ?>"></i> </div>
                    </a>-->

                    <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>">
                        <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['facebook']['icono'] ?>"></i> </div>
                    </a>

                    <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>">
                        <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['instagram']['icono'] ?>"></i> </div>
                    </a>

                    <a target="_blank" href="<?php echo $redes_sociales['youtube']['link'] ?>">
                        <div style="width:35px; height:35px;" class="hover_iconos align-items-center d-flex justify-content-center mr-2 mr-md-2 mr-lg-4 mr-xl-4 border border-light text-center rounded-pill"><i style="font-size:18px;" class="<?php echo $redes_sociales['youtube']['icono'] ?>"></i> </div>
                    </a>
                    
                </div>



            </div>
        </div>
    </div>

</section>

<section class="header_nav bg-transparent" id='menu'>

    <div class="container p-0 py-1">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="index.php"><img class="ml-3 img_logo 
            margen_pse" src="images/logo_blanco.png" alt="" id="imagen_menu"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="align-items center navbar-nav mx-auto">
                    <li class="align-items-center row mx-2 rounded nav-item mt-4 mt-lg-0 mt-xl-0 <?php echo ($page == "Inicio") ? "active" : ""; ?>">
                        <a class="nav-link" href="index.php">
                            <h5 class="m-0">Inicio</h5>
                        </a>
                    </li>
                    <li class="align-items-center row mx-2 rounded nav-item <?php echo ($page == "Quienes Somos") ? "active" : ""; ?>">
                        <a class="nav-link" href="quienes_somos.php">
                            <h5 class="m-0">Quiénes Somos</h5>
                        </a>
                    </li>
                    <li class="align-items-center row mx-2 rounded nav-item <?php echo ($page == "Servicios") ? "active" : ""; ?>">
                        <a class="nav-link" href="servicios.php">
                            <h5 class="m-0">Servicios</h5>
                        </a>
                    </li>
                    <li class="align-items-center row mx-2 rounded nav-item <?php echo ($page == "Inmuebles") ? "active" : ""; ?>">
                        <a class="nav-link" href="inmuebles.php?">
                            <h5 class="m-0">Inmuebles</h5>
                        </a>
                    </li>
                    <li class="clase_menu_hover align-items-center row mx-2 rounded rounded nav-item dropdown">
                        <a class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="m-0"> Mi Cuenta <i class="fas fa-caret-down"></i> </h5>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=447&tipo=1"> Propietarios </a>
                            <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=447&tipo=2"> Arrendatarios </a>
                            <a class="dropdown-item" target="_blank" href="https://www.e-collect.com/customers/PagosInmGomezAsociados.htm"> Pagos PSE </a>
                        </div>
                    </li>

                    <li class="align-items-center row mx-2 rounded nav-item <?php echo ($page == "Blog") ? "active" : ""; ?>">
                        <a class="nav-link" href="blog.php">
                            <h5 class="m-0">Blog</h5>
                        </a>
                    </li>
                    <li class="align-items-center row mx-2 rounded nav-item <?php echo ($page == "Contacto") ? "active" : ""; ?>">
                        <a class="nav-link" href="contactanos.php">
                            <h5 class="m-0">Contáctanos</h5>
                        </a>
                    </li>

                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <a target="_blank" href="https://www.e-collect.com/customers/PagosInmGomezAsociados.htm"><img class="mr-3 img_pse margen_pse" src="images/logopse.png" alt=""></a>
                </div>
            </div>
        </nav>
    </div>
    <div class="espacio-menu"></div>
</section>