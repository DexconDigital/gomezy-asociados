<?php
$imagen_login = "./admin/images/logo.png";
$color_fondo = "";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Gomez</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <style>
        .altologin {
            height: 100vh;
        }

        .btn-success {
            background-color: #0089CF;
            border-color: #09428E;
        }

        .btn-success:hover {
            background-color: #09428E;
            border-color: #09428E;
        }

        body {
            background-image: url("../images/Nuestros_servicios.jpg");
            background-attachment: fixed;
            height: 700px;
            margin: 0px;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            display: block;
            position: relative;
        }

        .form-control:focus {
            border-color:  #09428E;
            box-shadow: inset 0 1px 1px #0089CF, 0 0 8px #0089CF;
        }
        .img_container{
            padding: 27px;
        }
    </style>
</head>

<body>
    <div class="container-fluid altologin">
        <div class="row justify-content-md-center altologin">
            <div class="col-md-4 col-12 align-self-center">
                <div class="card">
                    <div class="card-header img_container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-12 col-lg-10 text-center">
                                <img style="    object-fit: contain;height: 100%;width: 75%;" src="<?php echo $imagen_login ?>" alt="..." class="" style="width:300px; height:auto;">
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <form method="post" action="validar.php">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Usuario:</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="user" placeholder="Usuario" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" placeholder="Contraseña" name="pass" required>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center mb-0">
                                <div class="col-6 offset-2">
                                    <button type="submit" class="btn btn-success btn-md btn-block">
                                        Ingresar
                                    </button>
                                    <div class="col-6 offset-2"></div>
                                    <a class="btn btn-success btn-md btn-block mt-2" href="../">
                                        Incio
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>