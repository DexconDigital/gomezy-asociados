<?php
// $user = $_SESSION["usuarioactual"];
// $con = Conect();
// $qry = "SELECT * FROM usuarios where usuario ='$user'";
// $sql = mysqli_query($con, $qry);
// $usuario =  mysqli_fetch_array($sql);s
// $imagen_inicio = $usuario[7];
$page = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
    <script src="tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor colorpicker'
            ],
            language: 'es_MX',
            toolbar: 'undo redo cut copy paste selectall |  fontsizeselect | bold italic underline forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | print link',
            fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 42pt'
        });
    </script>
    <style type="text/css">
        #register_form fieldset:not(:first-of-type) {
            display: none;
        }

        .fas {
            color: #B58D10;
        }

        .far {
            color: #B58D10;
        }

        .fondo_imagen {
            background-image: url("../../images/banner_blog.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: absolute;
            width: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.php">
            <img src="images/isotipo-4.png" class="img-fluid">
        </a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" style="margin-left: -10%;" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar -->
        <!-- Agregar icono de logout en este espacio -->
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav bg-dark">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./agregar-publicacion.php">
                    <i class="fas fa-plus-square"></i>
                    <span> Agregar Publicación</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista-publicaciones.php">
                    <i class="fas fa-list-ol"></i>
                    <span>Lista de Publicaciones</span></a>

            <li class="nav-item">
                <a class="nav-link" href="perfil.php">
                    <i class="fas fa-tools"></i>
                    <span>Configuración</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../salir.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar sesión</span></a>
            </li>
        </ul>

        <div id="content-wrapper" style="background: #c8cfda21;position: relative;">
           

    