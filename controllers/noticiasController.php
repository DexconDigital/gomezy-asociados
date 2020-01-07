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
    $url = $field['video_url'];
    $insta_url = $field['instagram_url'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'Maestranza-Admin/admin/'.$imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,
        'video_url' => $url,
        'instagram_url' => $insta_url,
    );
}
function modelo_ultima_noticia($r)
{      
        if(count($r) > 2){
            $cantidad_noticias = 3;
        }else{
            $cantidad_noticias = count($r);
        }

    for($i=0; $i<$cantidad_noticias; $i++){
      $nombre = $r[$i]['titulo'];
      $descrip = $r[$i]['descripcion'];
      $limite_de_cadena1 = 124;
      $limite_de_cadena11 = 120;
      $limite_de_cadena2 = 24;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
         if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        }else {
            $nombre = $nombre . '...';
        }if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        }else {
            $descrip = $descrip . '...';
        }
       echo'
    <div class="col-4">
      <div class="card" style="width: 21rem;">
       <img style="object-fit: cover;width: 100%;height: 255px;" src="'.$r[$i]['imagen'].'" class="card-img-top" alt="...">  
        <div class="card-body">
            <h4>' .$nombre.'</h4>
            <p class="card-text">' . $r[$i]['fecha'] .'</p>
            <p class="card-text">'.$descrip.'</p>
            <hr>
           ';
             if ($r[$i]['video_url'] != "" ) {
                 echo '
            <a href="' . $r[$i]['video_url'] .'" target="_blank" class="btn boton_ver_mas rounded-0">Ver en Youtube</a>';
            }
            elseif($r[$i]['instagram_url'] != "" ){
              echo' 
                <a href="' . $r[$i]['instagram_url'] .'" target="_blank" class="btn boton_ver_mas rounded-0">Ver en Instagram</a>';
            }
            elseif($r[$i]['video_url'] == "" && $r[$i]['instagram_url'] == "" ){
                echo'
                <a href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn boton_ver_mas rounded-0">Ver Publicación</a>';
            } 
              echo'
            
        </div>
    </div>

</div>  ';
             
}
    }


/* function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        echo '
        <div class="col-lg-4 col-md-6 col-12 mb-3">
        <div class="card" style="border-color: white;">
        <img style="object-fit: cover;width: 100%;height: 255px;" src="'.$r[$i]['imagen'].'" class="card-img-top" alt="...">  
            <div class="card-body espacio_tageta mt-4">
                <h4 class="card-title"><strong>' . $r[$i]['titulo'] .'</strong></h4>
                <p>' . $r[$i]['fecha'] .'</p>
                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">' . $r[$i]['descripcion'] . '</p>
                <a id="bonton_verde" href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn rounded-0 text-center">Ver más</a>
            </div>
        </div>
    </div>
    ';
    }
} */
