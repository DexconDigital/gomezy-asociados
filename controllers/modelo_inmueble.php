<?php 

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("447-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
        
            <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4 px-3">
                  <div class="card card-max-height">
                      <img src="' . $imagen . '" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="px-3 card-title">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </h5>
                          <li class="align-items-baseline d-flex m-0 ml-3"> <i class="direccion fas fa-map-marker-alt"></i> <p class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p> </li>
                          <div>
                              <ul class="justify-content-around list-group list-group-horizontal">
                                  <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                                      <p> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
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
                              <p class="ml-3 text-muted"> Código : '. $codigo .' </p>

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
        <div class="mb-5 col-12 col-md-6 col-lg-4 col-xl-4 px-3">
            <div class="card card-max-height">
                <img src="' . $imagen . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="px-3 card-title">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </h5>
                <li class="align-items-baseline d-flex m-0 ml-3"> <i class="direccion fas fa-map-marker-alt"></i> <p class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p> </li>
                <div>
                    <ul class="justify-content-around list-group list-group-horizontal">
                        <li class="align-items-baseline border-white d-flex list-group-item p-0 px-2"><i class="mr-2 fas fa-chart-area"></i>
                            <p> ' . $api['AreaConstruida'] . ' m<sup>2</p>
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
                    <p class="ml-3 text-muted"> Código : '. $codigo .' </p>

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
            <div class="mb-3 col-12 border-top border-bottom mb-5 col-12 col-md-6 col-lg-4 col-xl-4 px-3">
            <h5 class="text-center py-3 px-3 card-title">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </h5>
                            <a href="detalle_inmueble.php?co=' . $codigo . '" class="row align-items-center">
                            
                                <div class="col-12 mb-3">
                                    <img style="width:100%;" src="'. $imagen . '" alt="">
                                </div>
                            </a>

                           
                            
                            <li class="justify-content-center align-items-baseline d-flex m-0 ml-3"> <i style="color:#0089CF;" class="direccion fas fa-map-marker-alt"></i> <p class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p> </li>
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
                                <p class="ml-3 text-muted"> Código : '. $codigo .' </p>
                                
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