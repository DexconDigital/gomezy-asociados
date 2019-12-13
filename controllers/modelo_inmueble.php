<?php 

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("447-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
        
            <div class="mb-5 col-4 px-3">
                  <div class="card">
                      <img src="' . $imagen . '" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="px-3 card-title">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </h5>
                          <div>
                              <ul class="justify-content-around list-group list-group-horizontal">
                                  <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                      <p> ' . $api['AreaConstruida'] . '</p>
                                  </li>

                                  <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                                      <p>' . $api['banios'] . '</p>
                                  </li>

                                  <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                                      <p>' . $api['Alcobas'] . '</p>
                                  </li>

                                  <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                                      <p>' . $api['garaje'] . '</p>
                                  </li>
                              </ul>

                          </div>
                          <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                              <p> <span>$</span> ';
                              if ($api['Gestion'] == 'Arriendo/venta') {
                                  echo '' . $api['Canon'] . ' <br>' . $api['Venta'];
                              } else if ($api['Gestion'] == 'Arriendo') {
                                  echo '' . $api['Canon'];
                              } else {
                                  echo '' . $api['Venta'];
                              }
                              echo ' </p>
                              <a href="detalle_inmueble.php?co=' . $codigo . '" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                          </div>
                      </div>
                  </div>
              </div>
            ';
    }
}

//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble_todos($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("447-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 10;
        // recortar cadena
        if (strlen($descripcion) <= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        // fin de recortar cadena
        echo '
        <div class="mb-5 col-4 px-3">
            <div class="card">
                <img src="' . $imagen . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="px-3 card-title">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </h5>
                <div>
                    <ul class="justify-content-around list-group list-group-horizontal">
                        <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                            <p> ' . $api['AreaConstruida'] . '</p>
                        </li>

                        <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bath"></i>
                            <p>' . $api['banios'] . '</p>
                        </li>

                        <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-bed"></i>
                            <p>' . $api['Alcobas'] . '</p>
                        </li>

                        <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-warehouse"></i>
                            <p>' . $api['garaje'] . '</p>
                        </li>
                    </ul>

                </div>
                <div class="align-items-baseline p-0 m-0 border-top row justify-content-around col-12">
                    <p> <span>$</span> ';
                    if ($api['Gestion'] == 'Arriendo/venta') {
                        echo '' . $api['Canon'] . ' <br>' . $api['Venta'];
                    } else if ($api['Gestion'] == 'Arriendo') {
                        echo '' . $api['Canon'];
                    } else {
                        echo '' . $api['Venta'];
                    }
                    echo ' </p>
                    <a href="detalle_inmueble.php?co=' . $codigo . '" class="text-capitalize mt-4 rounded btn boton_detalles"> Detalles </a>
                </div>
            </div>
        </div>
    </div>
  ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

  for ($i = 0; $i < count($r); $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("447-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo ' 
            <div class="mb-3 col-12 border-top border-bottom">
                            <a href="detalle_inmueble.php?co=' . $codigo . '" class="row align-items-center">
                                <div class="col-12 mb-3">
                                    <img style="width:100%;" src="'. $imagen . '" alt="">
                                </div>
                            </a>
                            <div class="col-12 text-center">

                                <ul class="lista_simislares">
                                    <li>
                                        <i class="fas fa-chart-area"></i>
                                        <p class="d-inline">' . $api['AreaConstruida'] . 'm<sup>2</p>
                                    </li>
                                    <li>
                                        <i class="ml-3 fas fa-bed"></i>
                                        <p class="d-inline">' . $api['Alcobas'] . '</p>
                                    </li>
                                    <li>
                                        <i class="ml-3 fas fa-bath"></i>
                                        <p class="d-inline">'. $api['banios'] .'</p>
                                    </li>
                                    <li>
                                        <i class="ml-3 fas fa-warehouse"></i>
                                        <p class="d-inline">'. $api['garaje'] .'</p>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
';
  }
}



// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}

?>