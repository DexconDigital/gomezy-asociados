<?php

require_once("conexion.php");

$link = Conect();
$array = array();


$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 13 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'Gomez-Admin/admin/' . $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,
    );
}
function modelo_ultima_noticia($r)
{
    if (count($r) > 2) {
        $cantidad_noticias = 3;
    } else {
        $cantidad_noticias = count($r);
    }


    for ($i = 0; $i < $cantidad_noticias; $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 124;
        $limite_de_cadena11 = 120;
        $limite_de_cadena2 = 24;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...';
        }
        echo '
       
               <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                   <div class="card" style="width: 100%;">
                       <img style="object-fit: cover;width: 100%;height: 255px;" src="' . $r[$i]['imagen'] . '" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h4 class="color_titulo">' . $nombre . '</h4>
                           <p class="card-text">' . $r[$i]['fecha'] . '</p>
                           <p class="card-text">' . $descrip . '</p>
                           <hr>
                           <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" class="btn boton_ver_mas rounded">Ver Más</a>
                       </div>
                   </div>
               </div> ';
    }
}

               function modelo_noticias ($r)
               { 

                   for ($i = 0; $i < count($r); $i++) {
                       echo'
                    <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card" style="width: 100%;">
                        <img style="object-fit: cover;width: 100%;height: 255px;" src="' . $r[$i]['imagen'] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="color_titulo">'.$r[$i]['titulo'].'</h4>
                            <p class="card-text">' . $r[$i]['fecha'] . '</p>
                            <p class="card-text">'.$r[$i]['descripcion'].'</p>
                            <hr>
                            <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" class="btn boton_ver_mas rounded">Ver Más</a>
                        </div>
                    </div>
                </div> ';
                   }
               }